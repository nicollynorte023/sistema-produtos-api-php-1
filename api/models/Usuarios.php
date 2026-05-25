<?php

namespace api\models;

use api\core\Database;
use PDO;
class Usuarios{
 
  public static function findAll(){
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM usuarios');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

 
  public static function findById(int $cpf){
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM usuarios WHERE cpf = :CPF LIMIT 1', array(
      ':CPF' => $cpf
    ));

    return $result->fetch(PDO::FETCH_ASSOC);
  }

  public static function updateById(int $cpf, array $nome){

    $conn = new Database();

    return $conn->executeQuery(
      'UPDATE produtos_informatica
       SET 
          nome = :NOME,
          email = :EMAIL,
          celular = :CELULAR,
       WHERE cpf = :CPF',
      array(
        ':NOME' => $nome['nome'],
        ':CPF' => $cpf['cpf'],
        ':EMAIL' => $email['email'],
        ':CELULAR' => $celular['celular'],
      )
    );
  }

   public static function deleteById(int $cpf){

    $conn = new Database();

    return $conn->executeQuery(
      'DELETE FROM usuarios WHERE cpf = :cpf',
      array(
        ':CPF' => $cpf
      )
    );
  }

}
