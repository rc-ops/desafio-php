<?php
include 'Cliente.php';
include 'Pedido.php';
//print_r($_POST);

$cliente = new Cliente($_POST['nome'], $_POST['telefone'], $_POST['rua'], $_POST['bairro'], $_POST['numero']);

$pedido = new Pedido($_POST['tamanho'], $cliente, $_POST['bebida'], $_POST['garcom'], $_POST['sabor1'], $_POST['sabor2'], $_POST['sabor3'], $_POST['observacoes']);

print_r($pedido);




