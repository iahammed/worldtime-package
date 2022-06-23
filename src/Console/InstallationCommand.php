<?php

namespace Dfytech\Worldtime\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InstallationCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'worldtime:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Worldtime instalation wizard';

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
        $env = '';
        $path = base_path('.env');

        $this->line(PHP_EOL);
        $this->line('---------------------------------------------------------');
        $this->line('         Wellcome to the Worldtime installation');
        $this->line('---------------------------------------------------------');
        
        $timezone_url = $this->ask('insert your Worldtime provider URL ?');
        $env  .=  'TIMEZONE_URL=' . $timezone_url . PHP_EOL;
        
        $this->line($env);
        
        if($this->confirm('your data is correct ?')){
            if (file_exists($path)) {
                $file = file_get_contents($path);
                file_put_contents($path, $file . PHP_EOL . $env);

            }
            $this->line(PHP_EOL);
            $this->line('---------------------------------------------------------');
            $this->line(PHP_EOL);
            $this->info('Installation Finish');
            $this->line('---------------------------------------------------------');
        } else {
            $this->error('Installation canceled!');
        }
    }

}