<?php

class aluno {

    //ATRIBUTOS
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;


    //MÉTODOS
    public function calcularMedia($media, $nota1, $nota2, $peso1, $peso2) {
        $media = ($peso1*$nota1+$peso2*$nota2)/$peso1+$peso2;
    }

    public function exibirDados($media) {
        echo "Média: " . $media;
    }

    public function verificarAprovação($media) {
        if ($media>=7){
            echo "Aprovado!";
        }

        else {
            echo "Reprovado!";
        }
    }

}

$aluno = new aluno();

$aluno->nome = "João Pedro";
$aluno->idade = "17 anos";
$aluno->matricula = "25500631";
$aluno->nota1 = "10";
$aluno->nota2 = "8";
$aluno->peso1 = "5";
$aluno->peso2 = "6";

echo "Nome: " . $aluno->nome . "<br>" . "Idade: " . $aluno->idade ."<br>" . "Matrícula: " . $aluno->matricula . "<br>" . "Média: " . $aluno->$calcularMedia . "<br>" . "Situação: " . $aluno->$verificarAprovação;
?>