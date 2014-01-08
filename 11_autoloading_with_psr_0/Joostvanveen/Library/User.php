<?php

namespace Joostvanveen\Library;

use Joostvanveen\App\User as AnotherUser;

class User
{
    
    /**
     * Let's just dump something to the screen so we know Library\User 
     * is instantiated.
     */
    public function __construct() {
        var_dump(new AnotherUser);
    }
}

