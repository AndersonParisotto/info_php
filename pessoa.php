<?php
/* Criar um objeto(classe) pessoa, 
   que contemple os 2 tipos de pessoa (juridaca e fisica) CNPJ e CPF
   separanado as suas caracteristicas/individualidades conforme o tipo
   EX: Pessoa fisica (CPF) validar o CPF // pai e mae
       Pessoa Juridica (CNPJ) validar o CNPJ // socios
*/

// CLASS TUDO JUNTO 
class Pessoa
{
    public $cpfCnpj;
    public $tipo;
    /*public $nome;
    public $nomeMae;
    public $socio;
    public $dataNascimento


    public function nome($nome)
    {
        echo ("Seja Bem-Vindo {$nome}!!")
    }
*/

    public function validar($cpfCnpj, $tipo)
    {
        // Extrai somente os números
        $this->cpfCnpj = preg_replace( '/[^0-9]/is', '', $cpfCnpj );
        $this->tipo = $tipo;

        if (strlen($cpfCnpj) == 11) // CPF
        {
            // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
            if (preg_match('/(\d)\1{10}/', $cpfCnpj)) 
            {
                $tipo = "Erro";
                return false;
            }
            
            // Faz o calculo para validar o CPF
            for ($t = 9; $t < 11; $t++) 
            {
                for ($d = 0, $c = 0; $c < $t; $c++) 
                {
                    $d += $cpfCnpj[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;

                if ($cpfCnpj[$c] != $d) 
                {
                    $tipo = "Erro";
                    return false;
                }
            }
            $tipo = "CPF";
            return true;
        }

        else if (strlen($cpfCnpj) == 14 ) // CNPJ
        {
            if (preg_match('/(\d)\1{13}/', $cpfCnpj))
                $tipo = "Erro";
		        return false;	

            // Valida primeiro dígito verificador
            for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
            {
                $soma += $cpfCnpj[$i] * $j;
                $j = ($j == 2) ? 9 : $j - 1;
            }

            $resto = $soma % 11;

            if ($cpfCnpj[12] != ($resto < 2 ? 0 : 11 - $resto))
                $tipo = "Erro";
                return false;

            // Valida segundo dígito verificador
            for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
            {
                $soma += $cpfCnpj[$i] * $j;
                $j = ($j == 2) ? 9 : $j - 1;
            }

            $resto = $soma % 11;

            $tipo = "CNPJ";
            return true;
        }

        else // FORA
        {
            $tipo = "Erro";
            return false;
        }
    }
    
    public function tipo($tipo)
    {
        $this->tipo = $tipo;

        if ($tipo != "Erro")
        {
            return "{$nome} você possui um {$this->cpfCnpj}";
        }
        
        else
        {
            return "{$nome}, numeração invalida";
        }
    }
    
}

$pessoa = new Pessoa();
$pessoa->validar("039.140.250-18", $tipo);
$pessoa->tipo($tipo);
echo $pessoa;

