<?php

namespace Modules\BuyCar\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Modules\BuyCar\Database\Seeders\ProductsTableSeeder;
use Modules\BuyCar\Services\CrawlDataService;

class ProductGetDataAPICommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'product:get-data-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command seeder data into table product';

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
        $crawl = new CrawlDataService();
        $crawl->insertData();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [

        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [

        ];
    }
}
