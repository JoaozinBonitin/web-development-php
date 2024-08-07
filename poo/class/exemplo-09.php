<?php
// polimorfismo -- do grego muitas formas

abstract class Animal{

    public function falar(){

        return "Som";

    }

    public function mover(){

        return "Andar";

    }

}

class Cachorro extends Animal {

    public function falar(){

        return "Late";

    }

}

class Gato extends Animal{

    public function falar(){

        return "Mia";

    }

}

class Passaro extends Animal {

    public function falar(){

        return "Canta";

    }

    public function mover(){

        return "Voar e " . parent::mover();

    }

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

$garfield = new Gato();

echo "---------------------------";
echo "<br>";

echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

$ave = new Passaro();

echo "---------------------------";
echo "<br>";

echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";

?>