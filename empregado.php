<?php

/*
Implementar a classe estagiario // carreta
Implementar a classe empregadoClt // trator
Implementar a classe terceirizado // carro
Implementar a classe folhaDePagamento // veiculo
*/

interface IRemuneravel
{
    public function remuneracao($salario);
}

class FolhaDePagamento
{
    public IRemuneravel $folhaDePagamento;

    public function pagar(IRemuneravel $folhaDePagamento)
    {
        $this->folhaDePagamento = $folhaDePagamento;
    }
}

class Estagiario implements IRemuneravel
{
    public $salario = 500;

    public function remuneracao($salario)
    {
        $this->salario *= 2;
        echo "Você está pagando R$ {$this->salario} para trabalhar.<br>";
    }
}

class EmpregadoClt implements IRemuneravel
{
    public $salario = 300;

    public function remuneracao($salario)
    {
        $this->salario += 1000;
        echo "Você recebeu R$ {$this->salario} de salário.<br>";
    }
}

class Terceirizado implements IRemuneravel
{
    public $salario = 100;

    public function remuneracao($salario)
    {
        $this->salario *= 5;
        echo "Você ganhou R$ {$this->salario} de salário.<br>";
    }
}



$estagiario = new Estagiario();
$estagiario->remuneracao($salario);

$empregadoClt = new EmpregadoClt();
$empregadoClt->remuneracao($salario);

$terceirizado = new Terceirizado();
$terceirizado->remuneracao($salario);

$folhaDePagamento = new FolhaDePagamento();
echo $folhaDePagamento->pagar($estagiario);