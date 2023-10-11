<?php
// OOP || POO
/*
$numero = 10; // Atribuicao
$objCarro = new stdclass (); // Instancia

// objeto || classe
class Carro 
{
    // propriedades || atributos

    const NRO_CHASSI = 'ak345l6k4n6j42o1adfa';

    public function ligar()
    {

    }

    protected function trocarMarcha($tipoMarcha)
    {
        $this->ligar(); // 

        self::NRO_CHASSI; // constante usa self para chamar
    }

    private function consertarMotor()
    {
        
    }
}

class Motorista
{
    function dirigir()
    {
        // uber, F1, onibus
    }
}

$carro = new Carro();
$carro->trocarMarcha("manual");

$motorista = new Motorista();
$motorista->dirigir();

$copo = new Copo();
$copo->();

private $marca; // privado
protected $marca; // eu e quem eu quiser vai ter acesso
public $marca; // publico
*/

class Pessoa
{
    public $nome; //
    public $altura; //
    public $peso; //
    public $idade; //
    public $pratiExerc; //
    public $pesoIdeal; //
    public $fazDieta; //
    public $pratiSaudavel; //
    public $pesoIdealGeral; //

    public function dados($nome, $idade)
    {
        echo "Olá {$nome}, você tem {$idade} anos! </br>";
    }

    public function fisico($altura, $peso)
    {
        $pesoIdeal = $peso / ($altura * $altura);
        return $pesoIdeal;
    }

    public function pratiSaudavel($pratiExerc, $fazDieta)
    {
        if ($pratiExerc == "sim" && $fazDieta == "sim")
        {
            $pratiSaudavel = 1;
        }

        else if ($pratiExerc == "sim" && $fazDieta == "nao")
        {
            $pratiSaudavel = 2;
        }

        else if ($pratiExerc == "nao" && $fazDieta == "sim")
        {
            $pratiSaudavel = 2;
        }

        else
        {
            $pratiSaudavel = 2;
        }
    }

    public function pesoIdeal($pesoIdeal)
    {
        if ($pesoIdeal < 18.5)
        {
            //echo "Abaixo do peso ideal";
            $pesoIdealGeral = 1;
        }

        else if ($pesoIdeal < 24.9)
        {
           // echo "Peso normal";
           $pesoIdealGeral = 2;
        }

        else if ($pesoIdeal < 29.9)
        {
           // echo "Sobrepeso";
           $pesoIdealGeral = 3;
        }

        else if ($pesoIdeal < 34.99)
        {
            //echo "Obesidade Grau I";
            $pesoIdealGeral = 3;
        }
    
        else if ($pesoIdeal < 39.9)
        {
           // echo "Obesidade Grau II";
           $pesoIdealGeral = 3;
        }

        else
        {
            //echo "Obesidade Grau III";
            $pesoIdealGeral = 3;
        }
    }


    public function saudeGeral($pesoIdealGeral, $pratiSaudavel)
    {
        if ($pesoIdealGeral == 1 && $pratiSaudavel == 1)
        {
            echo "Você está abaixo do peso ideal! Cuidado com dietas não equilibradas e exercicios exagerados!";
        }

        else if ($pesoIdealGeral == 1 && $pratiSaudavel == 2)
        {
            echo "Você está abaixo do peso ideal! Faça uma dieta equilibrada e pratique exercicios sem exagerar!";
        }

        else if ($pesoIdealGeral == 2 && $pratiSaudavel == 1)
        {
            echo "Graças a sua dieta e exercicios você está no peso ideal e saudavel!!";
        }

        else if ($pesoIdealGeral == 2 && $pratiSaudavel == 2)
        {
            echo "Seu peso é o ideal! Mas sempre pratique exercicios fisico e faça uma dieta equilibrada!";
        }

        else if ($pesoIdealGeral == 3 && $pratiSaudavel == 1)
        {
            echo "Você está acima do peso! Cuidado! Já que segue uma dieta e faz exercicios, consulte um médico!";
        }
        
        else
        {
            echo "Você está acima do peso! Cuidado! Tente uma dieta nova ou altere sua atual, junto com exercicios fisicos regulares";
            echo "$pesoIdealGeral, $pratiSaudavel";
        }
    } 
}


$altura = 1.90;
$peso = 100;

$pessoa = new Pessoa();
$pessoa->dados("Anderson", 22);
$pessoa->pesoIdeal($pesoIdeal);
$pessoa->pratiSaudavel("sim", "nao");
$pessoa->saudeGeral($pesoIdealGeral, $pratiSaudavel);














//$nome, $altura, $peso, $idade, $pratiExerc, $pesoIdeal, $fazDieta, $pratiSaudavel, $pesoIdealGeral









