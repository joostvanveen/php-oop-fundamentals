<?php

namespace Acme\App;

/**
 * This class extends Acme\App\User
 */
class Administrator extends User {

    public function __construct() {
        $this->isAdmin = true;        
    }
    
    /**
     * Return the result of the login()
     */
    public function getLogin ()
    {
        // The login method in the parent class is accessible from here, 
        // because it is protected.
        return $this->login();
    }
    
    /**
     * This method is for Administrators only
     */
    public function reportForDuty ()
    {
        // Do stuff ...
    }
    
}