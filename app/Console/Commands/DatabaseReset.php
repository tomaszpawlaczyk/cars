<?php

namespace App\Console\Commands;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;

class DatabaseReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Database reseting';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // dd(1);
        $this->call("migrate:rollback");
        $this->call("migrate");
        $this->call(DatabaseSeeder::class);
    }
}
