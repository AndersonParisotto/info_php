<?php
/* Criar um objeto(classe) pessoa, 
   que contemple os 2 tipos de pessoa (juridaca e fisica) CNPJ e CPF
   separanado as suas caracteristicas/individualidades conforme o tipo
   EX: Pessoa fisica (CPF) validar o CPF // pai e mae
       Pessoa Juridica (CNPJ) validar o CNPJ // socios
*/

class Pessoa
{
    public $cpfCnpj;
    public $tipo;

    public function validar($cpfCnpj)
    {
        // Extrai somente os números
        $this->cpfCnpj = preg_replace('/[^0-9]/is', '', $cpfCnpj);

        if (strlen($this->cpfCnpj) == 11) // CPF
        {
            // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
            if (preg_match('/(\d)\1{10}/', $this->cpfCnpj)) {
                $this->tipo = "Erro";
                return false;
            }

            // Faz o calculo para validar o CPF
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $this->cpfCnpj[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;

                if ($this->cpfCnpj[$c] != $d) {
                    $this->tipo = "Erro";
                    return false;
                }
            }
            $this->tipo = "CPF";
            return true;
        } elseif (strlen($this->cpfCnpj) == 14) // CNPJ
        {
            if (preg_match('/(\d)\1{13}/', $this->cpfCnpj)) {
                $this->tipo = "Erro";
                return false;
            }

            // Valida primeiro dígito verificador
            for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
                $soma += $this->cpfCnpj[$i] * $j;
                $j = ($j == 2) ? 9 : $j - 1;
            }

            $resto = $soma % 11;

            if ($this->cpfCnpj[12] != ($resto < 2 ? 0 : 11 - $resto)) {
                $this->tipo = "Erro";
                return false;
            }

            // Valida segundo dígito verificador
            for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
                $soma += $this->cpfCnpj[$i] * $j;
                $j = ($j == 2) ? 9 : $j - 1;
            }

            $resto = $soma % 11;

            $this->tipo = "CNPJ";
            return true;
        } else {
            $this->tipo = "Erro";
            return false;
        }
    }

    public function tipo()
    {
        if ($this->tipo != "Erro") {
            return "Você possui um {$this->tipo}";
        } else {
            return "Numeração inválida";
        }
    }
}

$pessoa = new Pessoa();
$pessoa->validar("31.925.383/0001-32");
echo $pessoa->tipo();
