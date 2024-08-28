<?php
    class Aluno{
        public $nome;
        public $nota1;
        public $nota2;
        public $nota3;
        public $media;

        public function recebeDados($nome, $n1, $n2, $n3){
            $this->nome = $nome;
            $this->nota1 = $n1;
            $this->nota2 = $n2;
            $this->nota3 = $n3;
        }
        public function media(){
            $this->media = (($this->nota1 * 3)+($this->nota2 * 3)+($this->nota3 * 4))/(3+3+4);
        }
        public function info(){
            echo "Nome do aluno: ".$this->nome.
                          "<br>Média ".$this->media;
        }
    }
?>

