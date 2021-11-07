<?php

namespace App\Console\Commands;

use App\Console\CommandUtil;
use App\Consts\UserConst;
use App\StringUtil;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ModelCreateCommand extends Command
{
    public const PHP_TAG = '<?php'.PHP_EOL;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'model:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

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
        'Model' => [
            'viewFile' => 'model',
            'mode' => UserConst::FILE_MODE_CREATE_NEW,
            'path' => UserConst::MODEL_PATH
        ],
        'ModelBase' => [
            'viewFile' => 'modelbase',
            'mode' => UserConst::FILE_MODE_OVERRIDE,
            'path' => UserConst::MODEL_BASE_PATH
        ],
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tableNames = [];
        foreach (DB::select('SHOW TABLES') as $table) {
            $dbName = config('database.connections.mysql.database');
            $tableNames[] = $table->{'Tables_in_' . $dbName};
        }

        foreach ($tableNames as $tableName) {

            // 存在するカラムを取得
            $columns = Schema::connection('mysql')->getColumnListing($tableName);

            foreach (self::$createFiles as $prefix => $file) {
                $fileName = StringUtil::convertSnakeToUpperCamel($tableName).$prefix;
                $params = [
                    'columns' => $columns,
                    'table' => $tableName,
                    'class' => $fileName
                ];

                $content = self::PHP_TAG . view('modelTemplate/'.$file['viewFile'], $params)->render();
                
                CommandUtil::makeFile($file['path'].'/'.$fileName.'.php', $content, $file['mode']);
            }
        }

    }
}
