<?php

namespace Acme\App;

/**
 * This class extends Acme\App\User
 */
class Member extends User {
    
    /**
     * Log in a user
     * @return string
     */
    public function login(){
        
        // Login in our member using the logic in the parent class.
        $message = parent::login();
        
        // Add some member-spcific logic
        return $message . ' ... Set a flag in the online members table';
    }
    
}