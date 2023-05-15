<?php

#vínculos com demais arquivos que serão apontados
require_once "financeiro.php";
require_once "planos.php";
require_once "sup_tecnico.php";


class menu_princ {
  
  public $opcoes = array (1 => "1 - Financeiro", 2=> "2 - Planos disponíveis",3=> "3 - Suporte técnico", 4=> "4 - Finalizar atendimento"); #Array com as opcoes

  #funcão que trará o menu junto de uma condicional que aponta para função de outra classe
  public function getmenu() {
    echo "\nOla, seja bem vindo!\n";
    echo "Por favor, Selecione a opção desejada:\n\n";
    
    for($x=1; $x <= count($this->opcoes);$x ++) {
      echo $this->opcoes[$x]."\n";
    } #Mostrar o menu completo descrito no Array
    
    $resp = fgets(STDIN); #Input de resposta do usuário
    
    if ($resp == 1) {
      $conta = new menu_fin();
      $conta->menuEscolha();
    }
    elseif ($resp == 2) {
      $planos = new plano();
      $planos->inserirPlanos();
    }
    elseif ($resp == 3) {
      $tecnico = new sup_tecnico();
      $tecnico->inserirsup_tecnico();
    }
    elseif ($resp == 4) {
      echo "Ok. Atendimento finalizado! Obrigado por entrar em contato.\n";
    }
    else {
      echo "\nEscolha uma opção válida\n";
      $menus = new menu_princ();
      $menus->getmenu();
    }
  }
}

