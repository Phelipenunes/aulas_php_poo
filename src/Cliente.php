<?php
// classe abstract torna as subs classes obrigatorias
abstract class Cliente{
    
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao =  "a definir" ;

    //Exibir dados  
    public function exibirdados():void{
        echo"<h2>Método exibirDados - Classe cliente";
        echo"<h3> $this->nome </h3>";
        echo"<p>Situação: $this->situacao </p>";
    }
    
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

    
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

    protected function setSituacao(string $situacao): self
    {
        $this->situacao = $situacao;

        return $this;
    }
}


