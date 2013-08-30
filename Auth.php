<?php

class Auth extends \Slim\Middleware
{
  public function call()
  {
    $this->next->call();
  }
}
