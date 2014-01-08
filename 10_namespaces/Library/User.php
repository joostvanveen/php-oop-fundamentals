<?php

// Always set the namespace at the top of the class
namespace Library;

class User
{
    
    /**
     * Let's just dump something to the screen so we know Library\User 
     * is instantiated.
     */
    public function __construct() {
        var_dump('Hello from third party User class');
    }
}

