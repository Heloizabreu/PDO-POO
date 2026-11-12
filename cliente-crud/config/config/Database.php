<?php 
class Database{
    private static $conn;

    public static function conectar(){
        if(!self::$conn){
            self::$conn = new PDO(
                "pgsql:host=192.168.10.25;port=5432;dbname=cliente_crud",
                "cliente_crud",
                "cliente_crud",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            ); 
        }
         return self ::$conn;
    }
}
?>