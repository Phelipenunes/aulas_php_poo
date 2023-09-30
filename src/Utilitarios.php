<?php
class Utilitarios {
    public static string $data_atual;

    

    
    public static function ObterData(){
        self::$data_atual = date("d/m/y");
        //self::propiedade permite o acesso a propiedade estatica

    }

    public static function definirAtendimento(int $idade):string {
        if ($idade > 60){
            return "Atendimento prioritario";
        }else{
            return "Atendimento Normal";
        }
    }

}