<?php

class Calculadora
{
    public function calculoPedido(array $sabores, $borda, $bebida)
    {
        $precoTotal = 0;
        foreach ($sabores as $k => $v) {
            $sabor = $v;
            switch ($sabor) {
                case "calabresa":
                    $precoTotal += 5;
                    break;
                case "frango":
                    $precoTotal += 12;
                    break;
                case "chocolate":
                    $precoTotal += 15;
                    break;
                case "catupiry":
                    $precoTotal += 10;
                    break;
                case "romeu-julieta":
                    $precoTotal += 10;
                    break;
            }
        }

        switch ($borda) {
            case "frango":
                $precoTotal += 8;
                break;
            case "chocolate":
                $precoTotal += 10;
                break;
            case "catupiry":
                $precoTotal += 8;
                break;
            case "romeu-julieta":
                $precoTotal += 12;
                break;
        }

        $precoTotal += $this->calculoBebida($bebida) + $this->calculoComissao($precoTotal);
        return $precoTotal;
    }

    private function calculoBebida($bebida)
    {
        $valor = 0;
        switch ($bebida) {
            case "agua":
                $valor += 5;
                break;
            case "refrigerante":
                $valor += 10;
                break;
            case "cerveja":
                $valor += 15;
                break;
        }
        return $valor;
    }

    public function calculoComissao($preco)
    {
        return number_format(0.03 * $preco, 2);
    }
}