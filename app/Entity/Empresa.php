<?php

  namespace App\Entity;

  use \App\Db\DataBase;
  

class Empresa{
    
    public $id;  
    public $nome_empresa;
    
    /**
    * FUNÇÃO RESPONSÁVEL POR CADASTRAR OS 
    * OBJETOS DE EMPRESA NO BANCO 'empresa'
    * 
    *  */  
    public function cadastrarEmpresa(){
      //inserir vaga no banco 'empresa'
      $obDatabase = new Database('empresa');
      $this->id = $obDatabase->insert([
                                    'nome_empresa' => $this->nome_empresa
                                      ]);
    //RETORNAR STATUS
    return true;
  }



  }
