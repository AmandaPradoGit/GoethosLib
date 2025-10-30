<?php
    session_start();
    require_once __DIR__ . '/../models/User.php';

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $passConfirm = $_POST['passConfirm'] ?? '';
    $registerDate = date('Y-m-d H:i:s');

    if(!$name || !$email || !$password){
        $_SESSION['register_error'] = 'Preencha todos os campos';
        header('Location: ../view/register.php');
        exit;
    }
    if($password != $passConfirm){
        $_SESSION['register_error'] = 'As senhas não coincidem';
        header('Location: ../view/register.php');
        exit;
    }

    if(User::verifyEmail($email)){
        $_SESSION['register_error'] = "Email já cadastrado";
        header('Location: ../view/register.php');
        exit;
    }

    $sucess = User::registerUser($name, $email, $password, $registerDate);
    if ($sucess){
        $_SESSION['register_sucess'] = "Cadastro realizado";
        header('Location: ../view/login.php');
        exit;
    } else {
        $_SESSION['register_error'] = "Erro ao cadastrar";
        header('Location: ../view/register.php');
        exit;
    }
?>