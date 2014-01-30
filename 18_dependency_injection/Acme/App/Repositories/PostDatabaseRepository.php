<?php

namespace Acme\App\Repositories;

/**
 * The post repository that fetches posts from a database
 */
class PostDatabaseRepository implements PostRepositoryInterface
{
    protected $db;

    public function __construct ()
    {
        // Store database connection
    }

    /**
     * @see \Acme\App\Repositories\PostRepositoryInterface::All()
     */
    public function All ()
    {
        // Fetch all posts from db
    }

    /**
     * @see \Acme\App\Repositories\PostRepositoryInterface::Find()
     */
    public function Find ($id)
    {
        // Fetch a single post from db
    }
}

