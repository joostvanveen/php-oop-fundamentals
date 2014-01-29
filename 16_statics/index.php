<?php

// Require psr-0 autoloader
require 'autoload.php';

$post = new stdClass();
$post->title = 'My title';

// Static function call
// Debug::dump($post);
// echo Debug::$foo;

// Creaet an instance and echo $wrapperStart
$dumper = new Debug();
$dumper::$wrapperStart = 'New value';
echo $dumper::$wrapperStart;

// Create another instance
$anotherDumper = new Debug();
// Huh? $wrapperStart has the value we set in the OTHER instance!
echo $anotherDumper::$wrapperStart;

/**
 * A class with static functions and methods
 */
class Debug {
    
    static $wrapperStart = '<pre>';
    static $wrapperEnd = '</pre>';
    static $foo = 'Bar';
    
    static public function dump($var) {
        echo self::$wrapperStart;
        var_dump($var);
        echo self::$wrapperEnd;
    }
}
