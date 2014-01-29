<?php

namespace Acme\App\Repositories;

use stdClass;

/**
 * The post repository that fetches posts from an RSS feed
 */
class PostRssRepository implements PostRepositoryInterface {
    
    protected $posts = array();
    
    public function __construct() {
        $xml = simplexml_load_file(dirname(__FILE__) . '/posts.xml');
        $posts = $xml->xpath('channel/item');
        foreach ($posts as $key => $post){
            $post = json_decode(json_encode($post));
            $post->body = $post->description;
            unset($post->description);
            $this->posts[$key + 1] = $post;
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