
<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Blog - Sistema de sesiones PHP</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Blog PHP</h1>
            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="welcome">
                    <p>Bienvenido/a, <strong><?php echo htmlspecialchars($_SESSION['user_name']); ?></strong></p>
                    <a href="<?php echo baseUrl('?logout=1'); ?>" class="logout-btn">Cerrar sesión</a>
                </div>
            <?php endif; ?>
        </header>

        <?php if (!empty($GLOBALS['message'])): ?>
            <div class="message <?php echo $GLOBALS['message']['type'] === 'error' ? 'error' : 'success'; ?>">
                <?php echo $GLOBALS['message']['text']; ?>
            </div>
        <?php endif; ?>