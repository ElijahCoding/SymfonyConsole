<?php

namespace App\Commands;

use PDO;
use Faker\Generator as Faker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserSeederCommand extends Command
{
    protected $db;

    protected $faker;

    public function __construct(PDO $db, Faker $faker)
    {
        parent::__construct();

        $this->db = $db;
        $this->faker = $faker;
    }

  protected function configure()
  {
    $this->setName('seed:users')
         ->setDescription('Seed users')
         ->setHelp('This command will seed users in your database.');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    // get the count
    // notify users that seeding has started
    // loop and generate fake records
    // notify user on completion
  }
}
