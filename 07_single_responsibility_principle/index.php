<?php

// Require app files
require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

// Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12346789');

// Run validation
$validator = new Validator();
if ($validator->validate($data, $rules) == true) {
    
    // Validation passed. Set user values.
    $joost = new User();
    $joost->setEmail($data['email'])
          ->setPassword(getHash($data['password']));
    
    // Dump user
    var_dump($joost);
}
else {
    
    // Validation failed. Dump validation errors.
    var_dump($validator->getErrors());
}