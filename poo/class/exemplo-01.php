<?php

class Pessoa{

    public $nome; // atributo

    //$this é a representação da classe já instanciada

    public function falar(){
        return "O meu nome é " . $this->nome;
    } // é um metodo



}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
?>