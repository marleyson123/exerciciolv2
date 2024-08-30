<?php

include 'exercicio2.php';

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$horasTrabalhadas = $_POST['horasTrabalhadas'];
$valorHora = $_POST['valorHora'];


$empresa = new Empresa();

  $empresa->dados($nome,$salario,$horasTrabalhadas,$valorHora);
  $empresa->calcularHorista();
  $empresa->calcularAsalariado();
  $empresa->mostrar();
?>