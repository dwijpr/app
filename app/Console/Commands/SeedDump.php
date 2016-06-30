<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class SeedDump extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:dump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate seeders';

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
        $tables = DB::select('show tables');
        $this->info('tables list:');
        $items = [];
        foreach ($tables as $i => $table) {
            $name = $table->Tables_in_piro;
            $this->line("- ".$name);
            if ($name === 'migrations') {
                $this->line('!! skipping migrations table');
            } else {
                $items[] = $name;
            }
        }
        $this->call('iseed', [
            "tables" => implode(",", $items)
        ]);
    }
}
