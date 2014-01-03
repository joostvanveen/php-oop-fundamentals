<?php

require 'user.php';

$joost = new User();
$joost->setPassword('12576rhgfsad');
var_dump($joost->getPassword());
