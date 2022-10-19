<?php
require 'Cliente.php';
require 'Pedido.php';

$title = 'Sumário do pedido';
include 'inc/header.php';
print_r($_POST);

$cliente = new Cliente($_POST['nome'], $_POST['telefone'], $_POST['rua'], $_POST['bairro'], $_POST['numero']);

$pedido = new Pedido($_POST['tamanho'], $cliente, $_POST['bebida'], $_POST['garcom'], $_POST['sabor1'], $_POST['sabor2'], $_POST['sabor3'], $_POST['observacoes'], $_POST['recheio-da-borda']);


if (isset($_POST)) {
    echo "Resumo do pedido:\n";
    echo "Preço do pedido (sem taxa de entrega): R$" . $pedido->getPreco() . "\n";
    echo "Preço da comissão recebida pelo garçom/garçonete (" . $pedido->getGarcom() . "): R$" . $pedido->getComissao(). "\n";
    echo "Obrigado pelo seu pedido!";
}


?>

