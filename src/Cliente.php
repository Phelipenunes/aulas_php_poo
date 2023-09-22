<?php
class Cliente{
    
    private string $nome;
    private string $email;
    private string $senha;
    
    //nome
    public function setnome(string $nome):void{
        $this->nome = $nome;
    }

    public function getnome():string{
        return $this->nome;
    }

    //email
    public function setemail(string $email):void{
        $this->email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }

    public function getemail():string{
        return $this->email;
    }

    //senha
    public function setsenha(string $senha):void{
        $this->senha =password_hash($senha,PASSWORD_DEFAULT);
    }

    public function getsenha():string{
        return $this->senha;
    }
}


