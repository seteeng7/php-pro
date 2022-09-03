<?php

namespace app\controllers;

class Login {
    public function index() {
        return [
            'view' => 'login.php',
            'data' => ['title' => 'Login']
        ];
    }

    public function store() {
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(empty($email) || empty($password)) {
            return setMessageAndRedirect('message', 'usuário ou senha inválidos 1', '/login');
        }

        $user = findBy('users', 'email', $email);

       // var_dump($user);
       // die();

        if(!$user) {
            return setMessageAndRedirect('message', 'usuário ou senha inválidos 2', '/login');
        }

        // Para funcionar o password_verify()
        $hash =  password_hash($user->password, PASSWORD_DEFAULT); 

        if(!password_verify($password, $hash)) {
            //var_dump($user->password);
            //die();
            return setMessageAndRedirect('message', 'usuário ou senha inválidos 3', '/login');
        }

        $_SESSION[LOGGED] = $user;
        return redirect('/');
    }

    public function destroy() {
        unset($_SESSION[LOGGED]);

        return redirect('/');
    }
}