<?php 
session_start();
if(empty($_SESSION['user_id'])){
    header('Location: login.php?return=home.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-mono">
        <div class="flex items-end justify-start h-72 bg-gray-100">
            <h1 class="text-3xl px-16 py-6">Minha Estante</h1>
        </div>
        <script type="module" src="../view/components/main.js"></script>
    </body>