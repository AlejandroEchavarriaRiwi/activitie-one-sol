<?php
// views/login_form.php - Formulario de inicio de sesión
?>
<div class="login-form">
    <h2>Iniciar sesión</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="login">Iniciar sesión</button>
    </form>
    <p>Usuarios de prueba:</p>
    <ul>
        <li>ana@example.com - password123</li>
        <li>carlos@example.com - qwerty456</li>
        <li>laura@example.com - abc12345</li>
        <li>david@example.com - pass7890</li>
        <li>maria@example.com - mypass321</li>
    </ul>
</div>