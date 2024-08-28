<?php

    include 'Aluno.php';

    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    //var_dump($nome);
    $aluno1 = new Aluno();

    $aluno1->recebeDados($nome,$nota1,$nota2,$nota3);
    $aluno1->media();
    $aluno1->info();

    //var_dump($aluno1);