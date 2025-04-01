<?php
// views/posts_list.php - Lista de posts publicados
?>
<h2>Publicaciones</h2>
<div class="posts-grid">
    <?php foreach ($posts as $post): 
        // Buscar información del autor
        $author = Post::getAuthorInfo($post['author_id']);
        $authorName = $author ? $author['name'] : "Autor desconocido";
    ?>
        <div class="post-card">
            <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="Imagen del post">
            <div class="post-content">
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><?php echo htmlspecialchars($post['description']); ?></p>
                <div class="post-meta">
                    <p>Autor: <?php echo htmlspecialchars($authorName); ?></p>
                    <p>Fecha: <?php echo htmlspecialchars($post['created_at']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>