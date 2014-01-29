<?php

// Require psr-0 autoloader
require 'autoload.php';

// Work with the RSS implementation of PostRepositoryInterface
$postRepository = new Acme\App\Repositories\PostRssRepository();
$posts = $postRepository->All();
echo '<ul>';
foreach ($posts as $post) {
    echo '<li>' . $post->title . '</li>';
}
echo '</ul>';

$post = $postRepository->Find(2);
echo '<h1>' . $post->title . '</h1>';
echo '<p>' . $post->body . '</p>';

// Work with the json implementation of PostRepositoryInterface
$postRepository = new Acme\App\Repositories\PostJsonRepository();
$posts = $postRepository->All();
echo '<ul>';
foreach ($posts as $post) {
    echo '<li>' . $post->title . '</li>';
}
echo '</ul>';

$post = $postRepository->Find(2);
echo '<h1>' . $post->title . '</h1>';
echo '<p>' . $post->body . '</p>';