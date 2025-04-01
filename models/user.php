<?php

class User {
    /**
     * Encuentra un usuario por su email
     */
    public static function findByEmail($email) {
        foreach ($GLOBALS['users'] as $user) {
            if ($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    /**
     * Encuentra un usuario por su ID
     */
    public static function findById($id) {
        foreach ($GLOBALS['users'] as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }
        return null;
    }

    /**
     * Verifica las credenciales del usuario
     */
    public static function verifyCredentials($email, $password) {
        $user = self::findByEmail($email);
        
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        
        return null;
    }
}
