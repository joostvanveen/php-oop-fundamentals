<?php

// Require psr-0 autoloader
require 'autoload.php';

$administrator = new Acme\App\Administrator();
$administrator->facebookid = 'joostvanveen';
var_dump($administrator->facebookid);
var_dump($administrator->getFacebookData());
