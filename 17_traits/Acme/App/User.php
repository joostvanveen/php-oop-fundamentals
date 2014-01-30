<?php

namespace Acme\App;

abstract class User {
    
    use \Acme\App\Traits\Curlable;
    use \Acme\App\Traits\Accessible;
    
    /**
     * @var string
     */
    protected $facebookid;
    
    /**
     * @var string
     */
    protected $email;
    
    /**
     * @var string
     */
    protected $password;
    
    /**
     * @var boolean
     */
    protected $isAdmin = false;
    
    
    /**
     * Class configuration only
     * @param array $params
     */
    public function __construct(Array $params = array()) {
        
        // Here we set the properties from trait Accessible
        $this->fillable[] = 'email';
        $this->fillable[] = 'password';
        $this->fillable[] = 'facebookid';
        $this->accessible[] = 'email';
        $this->accessible[] = 'password';
        $this->accessible[] = 'facebookid';
        
        if (count($params)) {
            foreach ($params as $key => $value) {
                $this->$key = $value;
            }
        }
    }
   
    /**
     * Retrieve public Facebook data using the Curlable trait
     * @return array
     */
    public function getFacebookData ()
    {
        $url = 'http://graph.facebook.com/' . $this->facebookid;
        return json_decode($this->curl($url), true);
    }
    
    /**
     * Return accessible properties as a json object
     * @return string
     */
    public function __toString () {
        
        $data = array();
        
        // Only add property accessible
        foreach ($this->accessible as $key) {
            $data[$key] = $this->$key;
        }
        
        return json_encode($data);
    }
    
    /**
     * Log in a user
     * @return string
     */
    public function login(){
        return 'Logging in a user ...';
    }
    
    /**
     * Log in a user
     * @return string
     */
     public function logout(){
        return 'Logging out ...';
    }
    
}
