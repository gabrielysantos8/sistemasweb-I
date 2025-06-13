<?php

    class Livro {

        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo, $autor) {
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = true;
        }

        public function emprestar() {
            if ($this->Disponivel) {
                $this->Disponivel = false;
                echo "Livro emprestado com sucesso.<br><hr>";
            } else {
                echo "O livro já está emprestado.<br><hr>";
            }
        }

        public function devolver() {
            if (!$this->Disponivel) {  
                $this->Disponivel = true;
                echo "Livro devolvido com sucesso.<br><hr>";
            } else {
                echo "O livro já está disponível.<br><hr>";
            }
        }

        public function exibirStatus() {
            if ($this->Disponivel) {
                $status = 'Disponível';
            } else {
                $status = 'Emprestado';
            }
            return "Título: {$this->Titulo} <br> Autor: {$this->Autor} <br> Status: {$status}";
        }
    }

?>
