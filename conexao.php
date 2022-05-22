<?php
    class Conexao {
        private static $instancia;

        public static function get(){
            try{
                if(!isset(self::$instancia)){
                    self::$instancia = new PDO('mysql:host=localhost;dbname=rmsports', 'root', '');
                } 
                return self::$instancia;
            } catch(Exception $e) {
                $erro = $e -> getMessage();
                require('db-error.php');
        }
    }
}