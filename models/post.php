<?php

class Post {
    /**
     * Obtiene todos los posts publicados
     */
    public static function getPublished() {
        $publishedPosts = [];
        
        foreach ($GLOBALS['posts'] as $post) {
            if ($post['status'] === 'published') {
                $publishedPosts[] = $post;
            }
        }
        
        return $publishedPosts;
    }

    /**
     * Obtiene los datos del autor de un post
     */
    public static function getAuthorInfo($authorId) {
        return User::findById($authorId);
    }
}