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
         ->setHelp('This command will seed users in your database.')
         ->addOption('count', 'c', InputOption::VALUE_REQUIRED, 'How many fake users would you like to generate?', 1);
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    // get the count
    $count = $input->getOption('count');

    // notify users that seeding has started
    $output->writeln('<info>Seeding ' . $count . ' users</info>');

    // loop and generate fake records
    for ($i = 0; $i < $count; $i++) {
      $statement = $this->db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");

      $statement->execute([
        'name' => $this->faker->name,
        'email' => $this->faker->email
      ]);
    }

    // notify user on completion
    $output->writeln('<info>Finished seeding users</info>');
  }
}
