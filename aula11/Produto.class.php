<?php

    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($Nome, $Preco = 0.0, $Quantidade = 0){
            $this->Nome = $Nome;
            $this->Preco = $Preco;
            $this->Quantidade = $Quantidade;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function setPreco($Preco){
            if ($Preco > 0){
                $this->Preco = $Preco;
            }else{
                echo "Preço inválido";
            }
        }

        public function AdicionarEstoque($quant){
            $this->Quantidade += $quant;
            $result = $this->Quantidade;
            return $result;
        }

        public function RemoverEstoque($quant){
            $this->Quantidade -= $quant;
            $result = $this->Quantidade;
            return $result;
        }

        public function MostrarDetalhes(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "Preço: " . $this->Preco . "<br>";
            echo "Quantidade de Estoque: " . $this->Quantidade . "<br>";
            echo "<hr>";
        }
    }

?>