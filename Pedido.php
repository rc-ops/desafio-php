<?php
class Pedido
{
    private $tamanho;
    private $cliente;
    private $bebida;
    private $garcom;
    private $preco;
    private $pedido = [];

    public function __construct($tamanho, $cliente, $bebida, $garcom, $preco, array $pedido)
    {
        $this->tamanho = $tamanho;
        $this->cliente = $cliente;
        $this->bebida = $bebida;
        $this->garcom = $garcom;
        $this->preco = $preco;
        $this->pedido = [
          'tamanho' => $this->tamanho,
          'cliente' => $this->cliente,
          'bebida' => $this->bebida,
          'garcom' => $this->garcom,
          'preco' => $this->preco
        ];
    }

    private function calculoComissao()
    {
        return 0.03 * $this->preco;
    }
}
