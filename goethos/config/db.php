<?php
    class Db{
        private static $pdo;

        public static function connect(){
            if(!self::$pdo){ //self serve para se referir a metodos estaticos e $this para nãp estaticos
                self::$pdo = new PDO('mysql:host=localhost;dbname=goethoslib', 'root', '');
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //definição de atributos para o objeto e tratamentp de erros ;)
            }
            return self::$pdo;
        }
    }
?>