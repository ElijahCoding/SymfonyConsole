<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayGoodbyeCommand extends Command
{
  protected function configure()
  {
    $this->setName('say:goodbye')
         ->setDescription('Say goodbye')
         ->setHelp('This command will say goodbye')
         ->addArgument('name', InputArgument::REQUIRED, 'Your name');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln('Goodbye ' . $input->getArgument('name') . '!');
  }
}
