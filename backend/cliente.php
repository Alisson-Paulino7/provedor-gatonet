<?php

require_once "menu.php";

class cliente {
  private $nome;
  private $telefone;

  public function setNome() {
    echo "Olá, seja bem vindo!\n"."Por favor, insira seu nome: \n";
    $this->nome = fgets(STDIN);
    echo "Agora digite o telefone: \n";
    $this->telefone = fgets(STDIN);
  }
  
  public function escolha() {
    echo "Muito obrigado, $this->nome\n"; 
    echo "Deseja acessar o menu principal [S/N]? ";
    $opcao = readline();
    if($opcao == 'S' || $opcao == 's') {
      $menus = new menu_princ();
      $menus->getmenu();
    }
    else {   
      echo "Ok. Atendimento finalizado! Obrigado por entrar em contato.\n";
    }
  }
}