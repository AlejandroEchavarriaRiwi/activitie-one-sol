<?php
// Iniciar sesión al comienzo
session_start();

// Incluir archivos necesarios
require_once 'config.php';
require_once 'models/user.php';
require_once 'models/post.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/PostController.php';

// Procesar la solicitud
$authController = new AuthController();
$postController = new PostController();

// Manejar acciones
if (isset($_GET['logout'])) {
    $authController->logout();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $authController->login($_POST['email'] ?? '', $_POST['password'] ?? '');
}

// Cargar la vista correspondiente
include 'views/header.php';

if (isset($_SESSION['user_id'])) {
    // Usuario autenticado, mostrar posts
    $postController->showPublishedPosts();
} else {
    // Usuario no autenticado, mostrar formulario de login
    include 'views/login_form.php';
}

include 'views/footer.php'; 