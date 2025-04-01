<?php

class PostController {
    /**
     * Mostrar posts publicados
     */
    public function showPublishedPosts() {
        $posts = Post::getPublished();
        include 'views/posts_list.php';
    }
}