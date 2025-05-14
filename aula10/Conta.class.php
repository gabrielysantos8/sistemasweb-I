<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($valor > $this->Saldo){
                $resultado = "Saldo insuficiente";
                return $resultado;
            }else{
                $this->Saldo -= $valor;
                $resultado = "Saldo atualizado para R$ " . $this->Saldo;
                return $resultado;
            }
        }

        public function Depositar($valor){
            $this->Saldo += $valor;
            $resultado = "Saldo atualizado para R$ " . $this->Saldo;
            return $resultado;
        }

        public function Consultar(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "Saldo atual R$ " . $this->Saldo . "<br>";
        }
    }

    
?>
