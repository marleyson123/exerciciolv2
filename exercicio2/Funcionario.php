<?php

class Funcionario {

  public $nome;
  public $salario;
  public $horasTrabalhadas;
  public $valorHora;
  public $salarioHorista;
  public $salarioAsalariado;
public function dados($nome, $salario, $horasTrabalhadas, $valorHora){

  $this->nome = $nome;
  $this->salario = $salario; 
  $this->horasTrabalhadas = $horasTrabalhadas;
  $this->valorHora = $valorHora;
}

public function calcularHorista() {
    $this->salarioHorista = $this->valorHora * $this->horasTrabalhadas;

}

public function calcularAsalariado() {
    $this->salarioAsalariado = $this->salario * 1.15; // 15% a mais sobre o salário
}

public function mostrar(){

    $this->calcularHorista();
    $this->calcularAsalariado();

    echo"<br>Nome do funcionário: " . $this->nome .
    "<br>Valor do salário do funcionário asalariado: " . number_format($this->salarioAsalariado, 2) .
    "<br>Valor do salário do horista: " . number_format($this->salarioHorista, 2);
}
}








?>