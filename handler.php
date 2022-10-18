<?php
include 'Cliente.php';
include 'Pedido.php';
echo "Informações acerca do $_POST";
print_r($_POST);

$cliente = new Cliente($_POST['nome'], $_POST['telefone'], $_POST['rua'], $_POST['bairro'], $_POST['numero']);




