<?php

namespace App\Console\Commands;
use App\Imports\SalesImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;


class CargarData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cargar data .csv';

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

        Excel::import(new SalesImport,'sales_data_sample.csv',null,\Maatwebsite\Excel\Excel::CSV);

    
        
    }
}
