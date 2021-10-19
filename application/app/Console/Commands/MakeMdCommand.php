<?php

namespace App\Console\Commands;

use App\Consts\UserConst;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MakeMdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:md';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate markdown file from json';

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
        $files = glob(UserConst::API_JSON_PATH.'/*');
        foreach ($files as $file) {
            $json = file_get_contents($file);
            $data = json_decode($json, true);

            $apis = $data['apis'];
            $file = basename($file, '.json');

            $content = '';
            foreach ($apis as $api) {
                $content .= view('mdTemplate/apimd', $api)->render();
            }

            file_put_contents(UserConst::API_MD_PATH.'/'.$file.'.md', $content);
        }
    }
}
