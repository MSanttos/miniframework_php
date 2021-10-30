<?php

namespace MF\Model;

use App\Connection;

class Container{
 
  public static function getModel($model){
   
    $class = "\\App\\Models\\" . ucfirst($model);
   
    //instânciar a conexão com o banco de dados
    $conn = Connection::getDb();

    return new $class($conn);
  }
}

?>
<!-- 
  Objetivo é retornar o modelo solicitado já instanciado,
  com a conexão já estabelecida. 
-->