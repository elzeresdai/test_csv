<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class import_file extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:file {file_path} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for download data from file, expect parameters: file_path and id ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filePath = $this->argument('file_path');
        $recordId = $this->argument("id");
        $fileContents = \Illuminate\Support\Facades\File::lines($filePath);
        dd($fileContents);

        

        return Command::SUCCESS;
    }
}
