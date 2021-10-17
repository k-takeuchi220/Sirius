<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ApiCreateCommand extends Command
{
    public const PHP_TAG = '<?php'.PHP_EOL;

    // generate file mode
    public const MODE_OVERRIDE = 1;
    public const MODE_CREATE_NEW = 2;

    // file paths
    public const REQUEST_PATH = './App/Http/Requests/Api';
    public const PCONTROLLER_PATH = './App/Http/Controllers/Api/Preprocess';
    public const CONTROLLER_PATH = './App/Http/Controllers/Api';
    public const API_JSON_PATH = './generator/api/json/*';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:create';

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
    }

    // 設定値を以下にまとめる
    public static $createFiles = [
        'Request' => [
            'viewFile' => 'request',
            'mode' => self::MODE_OVERRIDE,
            'path' => self::REQUEST_PATH
        ],
        'PreprocessController' => [
            'viewFile' => 'pcontroller',
            'mode' => self::MODE_OVERRIDE,
            'path' => self::PCONTROLLER_PATH
        ],
        'Controller' => [
            'viewFile' => 'controller',
            'mode' => self::MODE_CREATE_NEW,
            'path' => self::CONTROLLER_PATH
        ],
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $files = glob(self::API_JSON_PATH);
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
        foreach (self::$createFiles as $suffix => $file) {
            $content = self::PHP_TAG . view('apiTemplate/'.$file['viewFile'], $params)->render();
            $fileName = $params['name'].$suffix.'.php';

            $dirPath = $file['path'].'/'.$dir;
            $this->makeDir($dirPath);
            $path = $dirPath.'/'.$fileName;
            $this->makeFile($path, $content, $file['mode']);
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
            case self::MODE_OVERRIDE:
                file_put_contents($path, $content);
                break;

            case self::MODE_CREATE_NEW:
                if (!file_exists($path)) {
                    file_put_contents($path, $content);
                }
                break;
        }
    }
}
