<?php
class Cliente{
    
    private string $nome;
    private string $email;
    private string $senha;
    private array $telefones;

    public function setnome(string $nome):void{
        $this->nome = $nome;
    }

    public function getnome():string{
        return $this->nome;
    }
}


