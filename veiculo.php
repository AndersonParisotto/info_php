<?php

interface IVeiculo
{
    public function dirigir($chave);
    
    public function parar($chave);  
}

abstract class Veiculo implements IVeiculo
{
    public function dirigir($chave)
    {
        //ligar
        //colocar marcha
        //acelerar 
        echo "estou dirigindo {$chave}<br>";
    }

    public function parar($chave)
    {
        //freio
        echo "estou parando {$chave}<br>";
    }
}

class Carro extends Veiculo 
{
    public $chave = "chave_presencial";

    public function andar()
    {
        $this->dirigir($this->chave);

        echo "estou andando<br>";
    }
}

class Trator extends Veiculo 
{
    public $chave = "chave_digital";

    public function arrar()
    {
        $this->dirigir($this->chave);
    }

    public function andar()
    {
        $this->dirigir($this->chave);

        echo "estou andando<br>";
    }

    public function freiar()
    {
        $chave = "chaveiro";

        $this->parar($chave);

        echo "parado<br>";
    }

}

$carro = new Carro();
$trator = new Trator();
$trator->arrar();
$trator->freiar();
