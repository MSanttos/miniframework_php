<?php

  namespace App\Models;

  use MF\Model\Model;

  class Info extends Model{

    public function getInfo(){
      $sql = "SELECT titulo, descricao FROM tb_info";
      $stmt = $this->db->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

  }

?>