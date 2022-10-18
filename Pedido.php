<?php

class Pedido
{
    private $tamanho;
    private $cliente;
    private $bebida;
    private $garcom;
    private $preco;
    private $observacoes;
    private $sabor1;
    private $sabor2;
    private $sabor3;
    private $sabores = [];
    private $pedido = [];

    public function __construct($tamanho, $cliente, $bebida, $garcom, $sabor1, $sabor2, $sabor3, $observacoes)
    {
        $this->tamanho = $tamanho;
        $this->cliente = $cliente;
        $this->bebida = $bebida;
        $this->garcom = $garcom;
        $this->observacoes = $observacoes;
        $this->sabor1 = $sabor1;
        $this->sabor2 = $sabor2;
        $this->sabor3 = $sabor3;
        $this->sabores = [
            'sabor1' => $this->sabor1,
            'sabor2' => $this->sabor1,
            'sabor3' => $this->sabor1
        ];
        $this->pedido = [
            'cliente' => $this->cliente,
            'tamanho' => $this->tamanho,
            'sabores' => $this->sabores,
            'bebida' => $this->bebida,
            'garcom' => $this->garcom,
            'observacoes' => $this->observacoes,
            'preco' => $this->preco
        ];
    }

    private function calculoComissao()
    {
        return 0.03 * $this->preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

}
