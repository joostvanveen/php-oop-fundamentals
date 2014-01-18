<?php

/**
 * Create a hash 
 * @param string $string
 * @return string
 */
function getHash($string){
    return hash('sha256', $string);
}
