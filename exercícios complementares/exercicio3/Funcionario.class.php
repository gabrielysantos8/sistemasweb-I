<?php

    class Funcionario {

        private $Nome;
        private $Salario;

        public function __construct($nome, $salario) {
            $this->Nome = $nome;
            $this->Salario = $salario;
        }

        public function aumentarSalario($porcentagem) {
            if ($porcentagem > 0) {
                $aumento = $this->Salario * ($porcentagem / 100);
                $this->Salario += $aumento;
                echo "Salário aumentado em {$porcentagem}% <br>";
            } else {
                echo "Porcentagem inválida <br>";
            }
        }

        public function exibirInformacoes() {
            echo "Nome: {$this->Nome}<br>";
            echo "Salário: R$ " . number_format($this->Salario, 2, ',', '.') . "<br><hr>";
        }
    }

?>
