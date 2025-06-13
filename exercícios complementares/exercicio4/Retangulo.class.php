<?php

    class Retangulo {

        private $largura;
        private $altura;

        public function setLargura($largura) {
            if ($largura > 0) {
                $this->largura = $largura;
            } else {
                echo "Valor inválido para largura <br>";
            }
        }

        public function setAltura($altura) {
            if ($altura > 0) {
                $this->altura = $altura;
            } else {
                echo "Valor inválido para altura <br>";
            }
        }

        public function getLargura() {
            return $this->largura;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function calcularArea() {
            return $this->largura * $this->altura;
        }

        public function calcularPerimetro() {
            return 2 * ($this->largura + $this->altura);
        }
    }

?>
