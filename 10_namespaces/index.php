<?php

// Require app files
require 'App/Helper.php';
require 'App/User.php';
require 'App/Validator.php';
require 'Library/User.php';

// Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12346789', 'foo' => 'bar');

// Run validation
$validator = new Validator();
if ($validator->validate($data, $rules) == true) {
    
    // Create a User in the global namespace
    $joost = new User($data);
    var_dump($joost);
    
    // Create a User in the Library namespace
    $nick = new Library\User(); 
    var_dump($nick);
}
else {
    
    // Validation failed. Dump validation errors.
    var_dump($validator->getErrors());
}