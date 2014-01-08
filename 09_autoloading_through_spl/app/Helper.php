<?php

/**
 * Create a hash 
 * @param string $string
 * @return string
 */
function getHash($string){
    return hash('sha256', $string);
}

/**
 * Autoloader, registered by spl_autoload_register()
 * @param string $className
 */
function autoload ($className) {
    
    $file = dirname(__FILE__) . '/' . $className . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('autoload');