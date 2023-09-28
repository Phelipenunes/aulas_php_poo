<?php
require_once "Cliente.php";

class PessoaJuridica extends Cliente {
    private int $anofundacao;
    private string $nomefantasia;
    private string $cnpj;

   
    public function getAnofundacao():int {
        return $this->anofundacao;
    }

    public function setAnofundacao(int $anofundacao):void {
        $this->anofundacao = $anofundacao;
    }

    public function getNomefantasia():string {
        return $this->nomefantasia;
    }

    public function setNomefantasia(string $nomefantasia):void {
        $this->nomefantasia = $nomefantasia;
    }

    public function getCnpj():string {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj):void
    {
        $this->cnpj = $cnpj;
    }

    public function __construct(){
        $this->setSituacao("Verificar");    
   }

   public function exibirdados():void{
        //parent::recursos
        //permite o acesso aos recursos da classe pai (superclasse)
    
        parent::exibirdados();
        echo"<p>Nome fantasia: ".$this->getNomefantasia()."</p>";
   } 
}