<?php

namespace Acme\App\Traits;

trait Accessible
{
    
    /**
     * You cannot redefine these properties in the containing class, but you can 
     * set and use them there.
     */
    protected $fillable = array();
    protected $accessible = array();

    /**
     * Directly set inaccessible but existing properties, if in $this->fillable array
     * 
     * @param string $name            
     * @param mixed $value            
     * @return void
     */
    public function __set ($name, $value)
    {
        
        // Do not set if not fillable
        if (count($this->fillable) && ! in_array($name, $this->fillable)) {
            return false;
        }
        
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    /**
     * Directly get inaccessible but existing properties, if in $this->accesible array
     * 
     * @param string $name            
     * @return mixed
     */
    public function __get ($name)
    {
        
        // Do not return if not accessible
        if (count($this->accessible) && ! in_array($name, $this->accessible)) {
            return NULL;
        }
        
        return property_exists($this, $name) ? $this->$name : NULL;
    }
}