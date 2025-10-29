<?php
include_once('../config/db.php');
class User {
    private $name;
    private $email;
    private $password;
    private $registerDate;

    public static function registerUser($name, $email, $password, $registerDate){
        $pdo = Db::connect();
        
        $sql = "INSERT INTO usuarios (Nome, Email, Senha, DataCadastro) VALUES (?,?,?, NOW())";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $name,
            $email,
            $password,
            $registerDate
        ]);
    }
}
?>