<?php
require_once "menu.php";

class Venda {
  private $dtVenda;
  private $cliente;
  private $responsavelVenda;
  private $numPedido;

  public function getDtVenda() {
    return $this->dtVenda;
  }

  public function getCliente() {
    return $this->cliente;
  }

  public function getResponsavelVenda() {
    return $this->responsavelVenda;
  }

  public function getNumPedido() {
    return $this->numPedido;
  }

 
  public function setDtVenda($dtVenda) {
    $this->dtVenda = $dtVenda;
  }

  public function setCliente($cliente) {
    $this->cliente = $cliente;
  }

  public function setResponsavelVenda($responsavelVenda) {
    $this->responsavelVenda = $responsavelVenda;
  }

  public function setNumPedido($numPedido) {
    $this->numPedido = $numPedido;
  }

  public function delete(){
    $this->dtVenda = null;
    $this->cliente = null;
    $this->responsavelVenda = null;
    $this->numPedido = null;
  }
}

$venda = new Venda();

$venda->setDtVenda('01/04/2023');
$venda->setCliente('Alisson ');
$venda->setResponsavelVenda('Gabriel Bernardino');
$venda->setNumPedido(40028922);

echo 'Data da venda: ' . $venda->getDtVenda() . "\n";
echo 'Cliente: ' . $venda->getCliente() . "\n";
echo 'Responsável pela venda: ' . $venda->getResponsavelVenda() . "\n";
echo 'Número do pedido: ' . $venda->getNumPedido() . "\n";
echo'Deseja finalizar o pedido(S/N)' ."\n";

$finalizacao = strtoupper(trim(fgets(STDIN)));

if ($finalizacao === "S") {
  echo "Venda finalizada com sucesso!";
  } 
else {
  $venda->delete();
  echo "Venda cancelada!";
}


?>

