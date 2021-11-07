<?php

namespace App\Console\Commands;

use App\Consts\UserConst;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ApiDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:delete {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove API template';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // dir/ApiName
        $name = $this->argument('name');
        foreach(ApiCreateCommand::$createFiles as $suffix => $file){
            $fileName = $name.$suffix.'.php';
            $path = $file['path'].'/'.$fileName;
            unlink($path);
        }
    }
}
