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
    public $nome;
    public $altura;
    public $peso;
    public $idade;
    public $pratiExerc;
    public $pesoIdeal;
    public $fazDieta; 
    public $pratiSaudavel;
    public $pesoIdealGeral;

    public function dados($nome, $idade)
    {
        echo "Olá {$nome}, você tem {$idade} anos! </br>";
    }

    public function fisico($altura, $peso)
    {
        $this->pesoIdeal = $peso / ($altura * $altura);
        return $this->pesoIdeal;
    }

    public function pratiSaudavel($pratiExerc, $fazDieta)
    {
        if ($pratiExerc == "sim" && $fazDieta == "sim")
        {
            $this->pratiSaudavel = 1;
        }

        else if ($pratiExerc == "sim" && $fazDieta == "nao")
        {
            $this->pratiSaudavel = 2;
        }

        else if ($pratiExerc == "nao" && $fazDieta == "sim")
        {
            $this->pratiSaudavel = 2;
        }

        else
        {
            $this->pratiSaudavel = 2;
        }
        
        return $this->pratiSaudavel;
    }

    public function pesoIdeal($pesoIdeal)
    {
        if ($pesoIdeal < 18.5)
        {
            //echo "Abaixo do peso ideal";
            $this->pesoIdealGeral = 1;
        }

        else if ($pesoIdeal < 24.9)
        {
           // echo "Peso normal";
           $this->pesoIdealGeral = 2;
        }

        else if ($pesoIdeal < 29.9)
        {
           // echo "Sobrepeso";
           $this->pesoIdealGeral = 3;
        }

        else if ($pesoIdeal < 34.99)
        {
            //echo "Obesidade Grau I";
            $this->pesoIdealGeral = 3;
        }
    
        else if ($pesoIdeal < 39.9)
        {
           // echo "Obesidade Grau II";
           $this->pesoIdealGeral = 3;
        }

        else
        {
            //echo "Obesidade Grau III";
            $this->pesoIdealGeral = 3;
        }
        
        return $this->pesoIdealGeral;
    }


    public function saudeGeral($pesoIdealGeral, $pratiSaudavel)
    {
        if ($this->pesoIdealGeral == 1 && $this->pratiSaudavel == 1)
        {
            return "Você está abaixo do peso ideal! Cuidado com dietas não equilibradas e exercicios exagerados!";
        }

        else if ($this->pesoIdealGeral == 1 && $this->pratiSaudavel == 2)
        {
            return "Você está abaixo do peso ideal! Faça uma dieta equilibrada e pratique exercicios sem exagerar!";
        }

        else if ($this->pesoIdealGeral == 2 && $this->pratiSaudavel == 1)
        {
            return "Graças a sua dieta e exercicios você está no peso ideal e saudavel!!";
        }

        else if ($this->pesoIdealGeral == 2 && $this->pratiSaudavel == 2)
        {
            return "Seu peso é o ideal! Mas sempre pratique exercicios fisico e faça uma dieta equilibrada!";
        }

        else if ($this->pesoIdealGeral == 3 && $this->pratiSaudavel == 1)
        {
            return "Você está acima do peso! Cuidado! Já que segue uma dieta e faz exercicios, consulte um médico!";
        }
        
        else
        {
            return "Você está acima do peso! Cuidado! Tente uma dieta nova ou altere sua atual, junto com exercicios fisicos regulares";
        }
    } 
}

$pessoa = new Pessoa();
$pessoa->dados("Anderson", 22);
$pesoIdeal = $pessoa->fisico(1.90, 77);
$pesoIdealGeral = $pessoa->pesoIdeal($pesoIdeal);
$pratiSaudavel = $pessoa->pratiSaudavel("nao", "nao");
echo $pessoa->saudeGeral($pesoIdealGeral, $pratiSaudavel);