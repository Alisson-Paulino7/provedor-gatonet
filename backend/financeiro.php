<?php
require_once "menu.php";
class menu_fin extends financeiro{
//menu para escolher qual a opção vc deseja ir;
  public function menuEscolha() {
    echo "Voce acessou o Financeiro\n";
    echo "Selecione uma das opções abaixo para ir aonde deseja:\n";
    echo "1 - Para inserir dados\n";
    echo "2 - Para alterar os dados\n";
    echo "3 - Para excluir os dados\n";
    echo "4 - Para consultar os dados\n";
    $opcao = fgets(STDIN);
    
    if ($opcao >= 1 && $opcao <= 4) {
      
      if ($opcao == 1) {
        $financeiro = new financeiro();
        $financeiro->inserirFinanceiro();
      } elseif ($opcao == 2) {
        $financeiro = new financeiro();
        $financeiro->alterarFinanceiro();   
      }elseif ($opcao == 3) {
        $financeiro = new financeiro();
        $financeiro->excluirFinanceiro();
      } else {
        $financeiro = new financeiro();
        $financeiro->pesquisarFinanceiro();
      }
    }
    
  }
}

class financeiro {
  private $plano;
  private $vencimento;
  private $pago;
  
//função para Inserir um novo valor no financeiro
  public function inserirFinanceiro() {
    echo "Digite o valor do seu plano: ";
    $this->plano = fgets(STDIN);

    echo "Digite a data de vencimento do seu plano: ";
    $this->vencimento = fgets(STDIN);

    echo "O plano já foi pago? ";
    $this->pago = fgets(STDIN);

    echo "\n Suas nformações: \n";
    echo $this->plano . "\n";
    echo $this->vencimento . "\n";
    echo $this->pago . "\n";

    //menu para retornar ao menu inicial ou ao a inicio da função  
    echo "Agora o que vc deseja fazer?"."\n";
    echo "1 - voltar para o menu inicial"."\n";
    echo "2 - Voltar ao inicio desta função"."\n";
      
    $opcao = fgets(STDIN);
      
     if ($opcao == 1){       
      $menus = new menu_princ();
      $menus->getmenu();
       
     }
     elseif($opcao == 2){
       $financeiros = new menu_fin();
       $financeiros->menuEscolha();
     }
     else{
       echo "Acho que você errou";
     }
  }

  public function alterarFinanceiro() {
    echo "Seu plano é: " . $this->plano;
    echo "A data de vencimento é: " . $this->vencimento;
    echo "O seu plano está pago? " . $this->pago;

    echo "Diga qual opção você deseja ajustar: \n";
    echo "1 - para alterar o plano\n";
    echo "2 - para alterar o vencimento\n";
    echo "3 - para alterar status do pagamento\n";
    $opcao = fgets(STDIN);

    if ($opcao >= 1 && $opcao <= 3) {
      if ($opcao == 1) {
        echo "Seu plano atual é: " . $this->plano;
        echo "Digite seu novo plano: ";
        $this->plano = fgets(STDIN);
        echo "Seu novo plano é: " . $this->plano;
      
      } elseif ($opcao == 2) {
        echo "A data de vencimento atual é: " . $this->vencimento;
        echo "Digite a nova data de vencimento: ";
        $this->vencimento = fgets(STDIN);
        echo "Sua nova data de vencimento é: " . $this->vencimento;
      
      } else {
        echo "A situação do pagamento atual é: " . $this->pago;
        echo "Digite a nova situação do pagamento: ";
        $this->pago = fgets(STDIN);
        echo "O novo status do pagamento é: " . $this->pago;
      }
    }
    
    //menu para retornar ao menu inicial ou ao a inicio da função  
    echo "Agora o que vc deseja fazer?"."\n";
    echo "1 - voltar para o menu inicial"."\n";
    echo "2 - Voltar ao inicio desta função"."\n";
      
    $opcao = fgets(STDIN);
      
     if ($opcao == 1){       
      $menus = new menu_princ();
      $menus->getmenu();
       
     }
     elseif($opcao == 2){
       $financeiros = new menu_fin();
       $financeiros->menuEscolha();
     }
     else{
       echo "Acho que você errou";
     }
  }
  
  public function excluirFinanceiro() {
    echo "Seu plano é: " . $this->plano;
    echo "A data de vencimento é: " . $this->vencimento;
    echo "O seu plano está pago? " . $this->pago;

    echo "Diga qual opção você deseja ajustar: \n";
    echo "1 - para excluir o plano\n";
    echo "2 - para cancelar vencimento\n";
    echo "3 - para deletar o status do pagamento\n";
    $opcao = fgets(STDIN);

    if ($opcao >= 1 && $opcao <= 3) {
      if ($opcao == 1) {
        echo "Seu plano atual é: " . $this->plano."\n";
        echo "Digite 1 se tem certeza para cancelar seu plano: "."\n";
        $cancelamento = fgets(STDIN);
        if ($cancelamento ==1) {
        $this->plano = 0;
        echo "Seu plano é".$this->plano."\n";
           }
      } elseif ($opcao == 2) {
        echo "A data de vencimento atual é: " . $this->vencimento."\n";
        echo "Digite 2 se tem certeza para cancelar seu plano: "."\n";
        $cancelamento = fgets(STDIN);
        if ($cancelamento ==2) {
        $this->vencimento = 0;
        echo "Sua data de vencimento é: ".$this->vencimento."\n";
           }
      
      } else {
        echo "A situação do pagamento atual é: " . $this->pago."\n";
 echo "Digite 3 se tem certeza para cancelar seu plano: "."\n";
        $cancelamento = fgets(STDIN);
        if ($cancelamento ==3) {
        $this->pago = null."\n";
        echo "Seu status de pagamento é : ".$this->pago."\n";
           }
      }
      
    }
    
    //menu para retornar ao menu inicial ou ao a inicio da função  
    echo "Agora o que vc deseja fazer?"."\n";
    echo "1 - voltar para o menu inicial"."\n";
    echo "2 - Voltar ao inicio desta função"."\n";
      
    $opcao = fgets(STDIN);
      
     if ($opcao == 1){       
      $menus = new menu_princ();
      $menus->getmenu();
     }
     elseif($opcao == 2){
       $financeiros = new menu_fin();
       $financeiros->menuEscolha();
     }
     else{
       echo "Acho que você errou";
     }
  }

  public function pesquisarFinanceio(){
    echo "Seu plano é: " . $this->plano;
    echo "A data de vencimento é: " . $this->vencimento;
    echo "O seu plano está pago? " . $this->pago;

      //menu para retornar ao menu inicial ou ao a inicio da função  
    echo "Agora o que vc deseja fazer?"."\n";
    echo "1 - voltar para o menu inicial"."\n";
    echo "2 - Voltar ao inicio desta função"."\n";
      
    $opcao = fgets(STDIN);
      
     if ($opcao == 1){       
      $menus = new menu_princ();
      $menus->getmenu();
       
     }
     elseif($opcao == 2){
       $financeiros = new menu_fin();
       $financeiros->menuEscolha();
     }
     else{
       echo "Acho que você errou";
     }
  }
}

