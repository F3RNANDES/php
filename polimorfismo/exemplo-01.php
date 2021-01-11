<?php
abstract class Animal{
    public function falar(){
        return "SOM";
    }
    public function mover(){
        return "Anda";
    }
}
    class Cachorro extends Animal{
        public function falar(){
            return "Late";
    }


}
class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}
CLass Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "Voa e " . parent::mover();
    }
}
$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover(). "<Br>";
echo "------------------<br>";
$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover(). "<Br>";
echo "------------------<br>";
$passarin = new Passaro();
echo $passarin->falar() . "<br>";
echo $passarin->mover(). "<Br>";
?>