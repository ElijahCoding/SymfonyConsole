<?php

namespace App\Console\Commands;

class SayHelloCommand extends Command
{
  protected $command = 'say:hello';

  protected $description = 'Say hello';

  public function handle()
  {
    echo 'hello';
  }

  protected function arguments()
  {
    return [];
  }

  protected function options()
  {
    return [];
  }
}
