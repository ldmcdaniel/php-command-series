<?php


namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NewCommand extends Command
{
    public function configure()
    {
        $this->setName('new')
            ->setDescription('Create a new Laravel Application.')
            ->addArgument('name', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
       //Assert that the folder doesn't already exist

        //Download nightly version of Laravel

        //extract zip file

        //alert the user that they are ready to go
    }
}
