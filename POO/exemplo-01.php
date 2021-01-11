<?php
class Pessoa {
    public $nome;//atributo
    public function falar(){//metodo
        return "O meu nome é " . $this->nome;
    }
}
$michael = new Pessoa();
$michael->nome = "Michael Jackson";
echo $michael->falar();
?>