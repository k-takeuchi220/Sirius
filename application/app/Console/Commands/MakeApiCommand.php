<?php

namespace App\Console\Commands;

use App\Console\Kernel;
use App\Consts\UserConst;
use Illuminate\Console\Command;
use Illuminate\Console\Events\ArtisanStarting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

class MakeApiCommand extends Command
{
    public const PHP_TAG = '<?php'.PHP_EOL;

    public const API_ROUTE_FORMAT = "Route::%s('%s', 'Api\Preprocess\%s\%sPreprocessController@index')->name('%s');";

    protected $routes;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate API template file from json';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->routes = Route::getRoutes();
    }

    // 設定値を以下にまとめる
    public static $createFiles = [
        'Request' => [
            'viewFile' => 'request',
            'mode' => UserConst::MODE_OVERRIDE,
            'path' => UserConst::REQUEST_PATH
        ],
        'PreprocessController' => [
            'viewFile' => 'pcontroller',
            'mode' => UserConst::MODE_OVERRIDE,
            'path' => UserConst::PCONTROLLER_PATH
        ],
        'Controller' => [
            'viewFile' => 'controller',
            'mode' => UserConst::MODE_CREATE_NEW,
            'path' => UserConst::CONTROLLER_PATH
        ],
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $files = glob(UserConst::API_JSON_PATH.'/*');
        foreach ($files as $file) {
            $json = file_get_contents($file);
            $data = json_decode($json, true);

            $dir = $data['dir'];
            $apis = $data['apis'];

            foreach ($apis as $api) {
                $this->makeApiFiles($dir, $api);
            }
        }
    }

    private function makeApiFiles(string $dir, array $params): void
    {
        $params['dir'] = $dir;

        // url prams
        preg_match_all('/\{(.*?)\}/', $params['route'], $matches);
        $params['params'] = $matches[1];

        foreach (self::$createFiles as $suffix => $file) {
            $content = self::PHP_TAG . view('apiTemplate/'.$file['viewFile'], $params)->render();
            $fileName = $params['name'].$suffix.'.php';

            $dirPath = $file['path'].'/'.$dir;
            $this->makeDir($dirPath);
            $path = $dirPath.'/'.$fileName;
            $this->makeFile($path, $content, $file['mode']);
        }

        // api.php 存在しなければ追記
        $apiName = $dir.'.'.$params['name'];
        if(!$this->routes->hasNamedRoute($apiName)){
            $content = sprintf(self::API_ROUTE_FORMAT, strtolower($params['method']), $params['route'], $dir, $params['name'], $apiName).PHP_EOL;
            file_put_contents(UserConst::API_ROUTES_PATH, $content, FILE_APPEND);
        }
    }

    private function makeDir(string $dir)
    {
        if (!file_exists($dir)) {
            mkdir($dir, 0777);
        }
    }

    private function makeFile(string $path, string $content, int $mode): void
    {
        switch ($mode) {
            case UserConst::MODE_OVERRIDE:
                file_put_contents($path, $content);
                break;

            case UserConst::MODE_CREATE_NEW:
                if (!file_exists($path)) {
                    file_put_contents($path, $content);
                }
                break;
        }
    }
}
