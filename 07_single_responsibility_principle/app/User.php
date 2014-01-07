<?php
class User {
    
    private $email;
    private $password;
    
    /**
     * Log in a user
     * @return string
     */
    public function login(){
        return 'Logging in with a vengeange ...';
    }
    
    /**
     * Log in a user
     * @return string
     */
     public function logout(){
        return 'Logging out ...';
    }
    
    /**
     * Set the user's password
     * @param string $string
     * @return User
     */
    public function setPassword ($string)
    {
        $this->password = $string;
        return $this;
    }
    
    /**
     * Get the user's password
     * @return string
     */
    public function getPassword ()
    {
        return $this->password;
    }
    
    /**
     * Set the user's email
     * @param string $string
     * @return User
     */
    public function setEmail ($string)
    {
        $this->email = $string;
        return $this;
    }
    
    /**
     * Get the user's email
     * @return string
     */
    public function getEmail ()
    {
        return $this->email;
    }
}
