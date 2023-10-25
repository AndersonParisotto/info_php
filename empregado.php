<?php

/*
Implementar a classe estagiario // carreta
Implementar a classe empregadoClt // trator
Implementar a classe terceirizado // carro
Implementar a classe folhaDePagamento // veiculo
*/

interface IRemuneravel
{
    public function remuneracao();
}

class FolhaDePagamento
{
    public IRemuneravel $funcionario;

    public function pagar(IRemuneravel $funcionario)
    {
        $this->funcionario = $funcionario;

        $this->funcionario->remuneracao();
    }

    public function __toString()
    {
        return "Você ganhou R$ {$this->funcionario->salario} de salário.<br>";
    }
    
}

class Estagiario implements IRemuneravel
{
    public $salario = 500;

    public function remuneracao()
    {
        $this->salario *= 2;
    }
}

class EmpregadoClt implements IRemuneravel
{
    public $salario = 312.49;

    public function remuneracao()
    {
        $this->salario *= 5.2;
    }
}

class Terceirizado implements IRemuneravel
{
    public $salario = 1000;

    public function remuneracao()
    {
        $this->salario *= 5;
    }
}

$estagiario = new Estagiario();
$terceirizado = new Terceirizado();
$empregadoCLT = new EmpregadoClt();

$folhaDePagamento = new FolhaDePagamento();
$folhaDePagamento->pagar($empregadoCLT);
echo $folhaDePagamento;