<?php
class Cliente{
    
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    //Método construtor
    //Permite configurar a forma de inicialização do objeto, exigindo a atribuição de dados no momento em que criar o objeto, é sempre chamado de forma automática assim que o objeto for criado.

    public function __construct(string $nome, string $email, array $telefones){
        //Atribuindo os valores dos parâmetros às propiedades. Usamos o $this para acessar as propiedades desta classe.
        $this->nome = $nome;
        $this->email = $email;
        $this->telefones = $telefones;
    }
}


