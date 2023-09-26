<?php
class PessoaFisica {
    private int $idade;
    private int $cpf;

    
    public function getIdade():int{
        return $this->idade;
    }

    public function setIdade(int $idade):void{
        $this->idade = $idade;
    }

    public function getCpf():int{
        return $this->cpf;
    }

    public function setCpf(int $cpf):void{
        $this->cpf = $cpf;
    }
}

