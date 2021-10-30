<?php

  namespace App\Models;

  use MF\Model\Model;

  class Produto extends Model {

    public function getProdutos(){
      $sql = "SELECT id, descricao, preco FROM tb_produtos";
      $stmt = $this->db->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

  }

?>