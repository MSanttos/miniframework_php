<?php

  namespace App;

  class Connection{
    public static function getDb(){
      try{
        $conn = new \PDO(
          "mysql:host=localhost;dbname=nome_do_banco;charset=utf8",
          "root",
          "senha do banco"
        );

        return $conn;

      }catch(\PDOException $e){
        echo "Falha na conexão: ".$e->getMessage();
      }
    }
  }

?>