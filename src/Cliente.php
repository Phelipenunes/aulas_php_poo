<?php
class Cliente{
    
    private string $nome;
    private string $email;
    private string $senha;
    
    //nome
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }

    //email
    public function setEmail(string $email):void{
        $this->email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }

    public function getEmail():string{
        return $this->email;
    }

    //senha
    public function setSenha(string $senha):void{
        $this->senha =password_hash($senha,PASSWORD_DEFAULT);
    }

    public function getSenha():string{
        return $this->senha;
    }
}


