<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestPhp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'khoi:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $arr = ['a', 'b', 'test' => 'c'];

        foreach ($arr as $key => $element) {
            echo $key . " - " . $element . "\n";
        }


        return 0;
    }
}
