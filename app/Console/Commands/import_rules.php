<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class import_rules extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:rules';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for importing rules to database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        return Command::SUCCESS;
    }
}
