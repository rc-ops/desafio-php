<?php
$title = "Pedido";
include 'inc/header.php'
?>
    <h1>Faça o seu pedido!</h1>
    <form action="handler.php" method="POST">
        <br>
        <div>
            <label for="tamanho">Tamanho da pizza</label>
            <br>
            <input type="radio" name="tamanho" value="P">
            <label for="pequena">Pequena</label>
            <input type="radio" name="tamanho" value="M">
            <label for="media">Média</label>
            <input type="radio" name="tamanho" value="G">
            <label for="grande">Grande</label>
        </div>
        <div>
            <label for="garcom">Selecione o garçom</label>
            <select name="garcom">
                <option value="joao">João</option>
                <option value="maria">Maria</option>
                <option value="erik">Erik</option>
            </select>
        </div>

        <div>
            <p>Dados do cliente</p>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <br>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone">
            <br>
            <label for="rua">Rua</label>
            <input type="text" name="rua">
            <br>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="">
            <br>
            <label for="numero">Número</label>
            <input type="text" name="numero">
        </div>
        <br>
        <input type="submit" value="Enviar pedido">
    </form>
<?php
