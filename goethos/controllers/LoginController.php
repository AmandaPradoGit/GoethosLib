<?php
session_start();
require_once __DIR__ . '/../models/User.php';

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if(!$email || !$password){
        $_SESSION['login_error'] = "Preencha todos os campos";
        header('Location: ../view/login.php');
        exit;
    }
      
    $user = User::authUser($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['UsuarioID'];
        $_SESSION['user_name'] = $user['Nome'];
        
        $return = $_GET['return'] ?? 'home.php';
        header("Location: ../view/$return");
        exit;
    } else {
        $_SESSION['login_error'] = "E-mail ou senha incorretos.";
        header('Location: ../view/login.php');
        exit;
    }


?>