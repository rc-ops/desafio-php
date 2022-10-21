<?php
require 'Calculadora.php';

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
    private $borda;
    private $comissao;

    public function __construct($tamanho, $cliente, $bebida, $garcom, $sabor1, $sabor2, $sabor3, $observacoes, $borda)
    {
        $this->tamanho = $tamanho;
        $this->cliente = $cliente;
        $this->bebida = $bebida;
        $this->garcom = strtoupper($garcom);
        $this->observacoes = $observacoes;
        $this->sabor1 = $sabor1;
        $this->sabor2 = $sabor2;
        $this->sabor3 = $sabor3;
        $this->borda = $borda;
        $this->sabores = [
            'sabor1' => $this->sabor1,
            'sabor2' => $this->sabor2,
            'sabor3' => $this->sabor3
        ];
        $this->pedido = [
            'cliente' => $this->cliente,
            'tamanho' => $this->tamanho,
            'sabores' => $this->sabores,
            'borda' => $this->borda,
            'bebida' => $this->bebida,
            'garcom' => $this->garcom,
            'observacoes' => $this->observacoes,
            'preco' => $this->getPreco()
        ];
        $this->setPreco();
        $this->comissao = $this->calculoComissao();
        
    }

    private function calculoComissao()
    {
        $calculadora = new Calculadora();
        return $calculadora->calculoComissao($this->preco);
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco()
    {
        $calculadora = new Calculadora();
        $precoTotal = $calculadora->calculoPedido($this->sabores, $this->borda, $this->bebida);
        $this->preco = $precoTotal;
    }

    public function getPedido(): array
    {
        return $this->pedido;
    }

    public function getComissao(): float
    {
        return $this->comissao;
    }

    public function getGarcom()
    {
        return $this->garcom;
    }
}