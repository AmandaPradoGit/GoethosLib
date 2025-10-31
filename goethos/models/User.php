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
            $password
        ]);
    }
    public static function verifyEmail($email){
        $pdo = Db::connect();

        $sql= "SELECT UsuarioID FROM usuarios WHERE Email=? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch() !== false;
    }

    public static function authUser($email, $password){
        $pdo = Db::connect();

        $sql = "SELECT * FROM usuarios WHERE Email=? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['Senha'])) {
            return $user;
        } else {
            return false;
        }
    }
}
?>