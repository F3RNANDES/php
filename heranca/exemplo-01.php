<?php
class Documento {
    private $numero;
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($n){
        $this->numero=$n;
    }
}
class CPF extends Documento{
    public function validar(){
        $numeroCPF = $this->getNumero();
        return true;
    }
}
$doc = new CPF();
$doc->setNumero("1111222333-44");
$doc->validar();
?>