<?php
$title = "Pedido";
include 'inc/header.php';
?>
<h1>Faça o seu pedido!</h1>
<form action="handler.php" method="POST">
    <br>
    <script src="js/selections.js"></script>
    <div>
        <h3>
            <p><label for="tamanho">Tamanho da pizza</label></p>
        </h3>
        <input type="radio" name="tamanho" value="G" id="tamanho-grande" onclick="hideShowFlavors()" checked="checked">
        <label for="grande">Grande</label>
        <input type="radio" name="tamanho" value="M" id="tamanho-medio" onclick="hideShowFlavors()">
        <label for="media">Média</label>
        <input type="radio" name="tamanho" value="P" id="tamanho-pequeno" onclick="hideShowFlavors()">
        <label for="pequena">Pequena</label>
    </div>
    <div>
        <h3>
            <p><label for="sabores">Sabores da pizza</label></p>
        </h3>

        <div id="sabores1">
            <label for="sabor1">Sabor 1</label>
            <select name="sabor1" id="sabor1">
                <option value="-">-</option>
                <option value="frango">Frango</option>
                <option value="calabresa">Calabresa</option>
                <option value="chocolate">Chocolate</option>
            </select>
        </div>

        <div id="sabores2">
            <label for="sabor2">Sabor 2</label>
            <select name="sabor2" id="sabor2">
                <option value="-">-</option>
                <option value="frango">Frango</option>
                <option value="calabresa">Calabresa</option>
                <option value="chocolate">Chocolate</option>
            </select>
        </div>

        <div id="sabores3">
            <label for="sabor3">Sabor 3</label>
            <select name="sabor3" id="sabor3">
                <option value="-">-</option>
                <option value="frango">Frango</option>
                <option value="calabresa">Calabresa</option>
                <option value="chocolate">Chocolate</option>
            </select>
        </div>
    </div>

    <div>
        <h3><label for="observacoes">Observações do pedido</label></h3>
        <textarea name="observacoes" id="" cols="50" rows="5" placeholder="Insira observações a serem passadas à cozinha. Ex. tirar cebola, ponto da carne, etc"></textarea>
    </div>


    <br>
    <div>
        <label for="bebida">Selecione a bebida</label>
        <select name="bebida">
            <option value="-">-</option>
            <option value="agua">Água</option>
            <option value="refrigerante">Refrigerante</option>
            <option value="cerveja">Cerveja</option>
        </select>
    </div>

    <div>
        <label for="garcom">Selecione o garçom</label>
        <select name="garcom">
            <option value="-">-</option>
            <option value="joao">João</option>
            <option value="maria">Maria</option>
            <option value="erik">Erik</option>
        </select>
    </div>

    <div>
        <h3>
            <p>Dados do cliente</p>
        </h3>
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Nome Completo">
        <br>
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" placeholder="(00)91234-5678">
        <br>
        <label for="rua">Rua</label>
        <input type="text" name="rua" placeholder="Rua dos Anjos">
        <br>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" placeholder="Nova Azul">
        <br>
        <label for="numero">Número</label>
        <input type="text" name="numero" placeholder="77">
    </div>
    <br>
    <input type="submit" value="Enviar pedido">
</form>

<?php include 'inc/footer.php'; ?>