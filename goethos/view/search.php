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
<html lang="en">
    <head>
         <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-mono">
         <div class="flex items-end justify-start h-80 bg-gray-100">
         </div>
         <p class="px-16 py-2">XX resultados</p>
        <script type="module" src="../view/components/header.js"></script>
    </body>
</html>