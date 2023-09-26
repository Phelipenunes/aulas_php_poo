<?php
require_once "PessoaJuridica.php";
final class MEI extends PessoaJuridica {
    private string $areadeatuacao;

    
    public function getAreadeatuacao(): string{
        return $this->areadeatuacao;
    }

    public function setAreadeatuacao(string $areadeatuacao):void {
        $this->areadeatuacao = $areadeatuacao;
    }
}