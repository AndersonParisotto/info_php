<?php

interface IVeiculo
{
    public function dirigir($chave);

}

class Veiculo
{
    public $veiculo = null;

    public function locomover(IVeiculo $veiculo)  //////////
    {
        $this->veiculo = $veiculo;
    }

    public function __toString()
    {
        echo $this->veiculo->dirigir();
    }
}

class Carro implements IVeiculo 
{
    public $chave = "chave_presencial";

    public function dirigir($chave)
    {
        $this->chave = $chave;
        echo "estou andandoooo {$this->chave}<br>";
    }
}

class Trator implements IVeiculo 
{
    public $chave = "chave_digital";

    public function dirigir($chave)
    {
        $this->chave = $chave;
        $this->verifOleo();
        echo "estou andando... {$this->chave}<br>";
    }

    public function verifOleo()
    {
        echo "oleo ok...<br>";
        
    }
}

$carro = new Carro();
$carro->dirigir("xyz");

$trator = new Trator();
$trator->dirigir("abc");

$veiculo = new Veiculo();
echo $veiculo->locomover($trator);
