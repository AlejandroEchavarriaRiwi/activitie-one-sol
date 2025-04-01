<?php

class AuthController {
    /**
     * Manejar inicio de sesión
     */
    public function login($email, $password) {
        $user = User::verifyCredentials($email, $password);
        
        if ($user) {
            // Iniciar sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            
            setMessage("¡Bienvenido/a, {$user['name']}!");
        } else {
            setMessage("Email o contraseña incorrectos. Por favor, intenta nuevamente.", 'error');
        }
    }
    
    /**
     * Manejar cierre de sesión
     */
    public function logout() {
        // Destruir todas las variables de sesión
        $_SESSION = array();
        
        // Destruir la sesión
        session_destroy();
        
        // Redirigir a la página principal
        header("Location: " . baseUrl());
        exit();
    }
}

