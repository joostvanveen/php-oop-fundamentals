<?php

namespace Acme\App\Repositories;

use stdClass;

/**
 * The post repository that fetches posts from a json file
 */
class PostJsonRepository implements PostRepositoryInterface {
    
    protected $posts = array();
    
    /**
     * Config
     */
    public function __construct() {
        $posts = json_decode(file_get_contents(dirname(__FILE__) . '/posts.json'), true);
        foreach ($posts as $key => $post){
            $this->posts[$key] = (object) $post;
        }
    }
    
    /**
     * @see \Acme\App\Repositories\PostRepositoryInterface::All()
     */
    public function All ()
    {
        return $this->posts;
    }
    
    /**
     * @see \Acme\App\Repositories\PostRepositoryInterface::Find()
     */
    public function Find ($id)
    {
        return isset($this->posts[$id]) ? $this->posts[$id] : new stdClass;
    }
}