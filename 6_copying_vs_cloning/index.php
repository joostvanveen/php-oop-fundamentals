<?php

require 'user.php';

$joost = new User();
$joost->setEmail('joost@tutsplus.com');
$joost->setPassword('12576rhgfsad');

$mike = clone $joost;
$mike->setEmail('mike@tutsplus.com');
$joost->setEmail('joost@tutsplus.com');

var_dump($joost);
echo '<br>';
var_dump($mike);
echo '<br>';
