<?php
class Cliente
{
    private $nome;
    private $telefone;
    private $rua;
    private $bairro;
    private $numero;
    private $cliente = [];

    public function __construct($nome, $telefone, $rua, $bairro, $numero)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->cliente = [
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'rua' => $this->rua,
            'bairro' => $this->bairro,
            'numero' => $this->numero
        ];
    }
}
