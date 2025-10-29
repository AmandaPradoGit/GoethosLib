<?php
    session_start();
    require_once __DIR__ . '/../config/db.php';

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $passConfirm = $_POST['passConfirm'] ?? '';

    if(!$name || !$email || !$password){
        $_SESSION['register_error'] = 'Preencha todos os campos';
        header('Location: ../views/register.php');
        exit;
    }
    if($password != $passConfirm){
        $_SESSION['register_error'] = 'As senhas não coincidem';
        header('Location: ../views/register.php');
        exit;
    }
    $pdo = Db::connect();
    //verificando se ja existe
    $st = $pdo->prepare('SELECT UsuarioID FROM usuarios WHERE email = ? LIMIT 1');
    $st->execute([$email]);
    if ($st->fetch()){
        $_SESSION['register_error'] = 'E-mail já cadastrado.';
        header('Location: ../views/register.php');
        exit;
    }

    $passToStore = $pass; 
    $ins = $pdo->prepare('INSERT INTO usuarios (email, senha) VALUES (?, ?)');
    $ins->execute([$email, $passToStore]);
    $_SESSION['register_success'] = 'Cadastro realizado. Faça login.';
    header('Location: ../views/login.php');
    exit;
?>