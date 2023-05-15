<?php
require_once "menu.php";
class plano extends menu_princ {
  public $quant_mb = array (1 => "1. 100mb", 2 => "2. 200mb + Jornal online", 3 => "3. 300mb + Netflix + Jornal online", 4 => "4. 400mb + Netflix + Jornal online + Spotify", 5 => "5. 500mb + Netflix + Jornal online + Spotify");
  
  public $valor = array (1 => "R$59,90", 2 => "R$69,90", 3 => "R$79,90", 4 => "R$89,90", 5 => "R$99,90");
  
  public function inserirPlanos(){
    echo "Selecione um plano: \n";
    for($i=1; $i <= count($this->quant_mb); $i++){
    echo $this->quant_mb[$i]."\n";
    }
    $qtd = fgets(STDIN);
    if ($qtd == 1){
      echo "Seu novo plano é: \n" .$this->quant_mb[1]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[1]."\n";
    }
    elseif ($qtd == 2){
      echo "Seu novo plano é: \n" .$this->quant_mb[2]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[2]."\n";
    }
    elseif ($qtd == 3){
      echo "Seu novo plano é: \n" .$this->quant_mb[3]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[3]."\n";
    }
    elseif ($qtd == 4){
      echo "Seu novo plano é: \n" .$this->quant_mb[4]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[4]."\n ";
    }
    elseif ($qtd == 5){
      echo "Seu novo plano é: \n" .$this->quant_mb[5]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[5]."\n";
    }
    else {
      echo "Esse plano não existe\n";
    }

    //menu para retornar ao menu inicial ou ao a inicio da função  
    echo "\nAgora o que vc deseja fazer?"."\n";
    echo "1 - voltar para o menu inicial"."\n";
    echo "2 - Voltar ao inicio desta função"."\n";
    echo "3 - Finalizar atendimento\n";
      
    $opcao = fgets(STDIN);
      
     if ($opcao == 1){       
      $menus = new menu_princ();
      $menus->getmenu();
       
     }
     elseif($opcao == 2){
       $planos = new plano();
       $planos->inserirPlanos();
     }
     else{
       echo "Ok. Atendimento finalizado! Obrigado por entrar em contato.\n";
     }
  }
  
}

?>