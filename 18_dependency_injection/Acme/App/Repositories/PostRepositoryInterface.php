<?php

namespace Acme\App\Repositories;

/**
 * The contract for all post repositories. They must all use the emthods defined in this interface. 
 */
interface PostRepositoryInterface {
    
    /**
     * Return all posts, as an array of objects
     * $post->title
     * $post->body
     *
     * @return array
     */
    public function All();
    
    /**
     * Return a single post
     * $post->title
     * $post->body
     *
     * @param integer $id
     * @return object
     */
    public function Find($id);
}