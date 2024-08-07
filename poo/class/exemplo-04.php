<?php

// protege as informações, além de garantir segurança de quem pode acessar oque 
// protected só quem consegue ver é quem esta dentro da propria classe ou quem herda
// private só quem consegue ver é a propria classe

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

$objeto = new Pessoa();

//echo $objeto->idade . "<br>";

$objeto->verDados();