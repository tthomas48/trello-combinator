#!/usr/bin/env php
<?php
  require "vendor/autoload.php";
  require "trello.config.php";

  $key = 'yourkey';
    $secret = 'yoursecret';
    $trello = new \Trello\Trello($key, $secret);
    $trello->authorize(array(
        'expiration' => '1hour',
        'scope' => array(
            'read' => true,
        ),
        'name' => 'My Test App'
    ));
    var_dump($trello->members->get('my/boards'));
