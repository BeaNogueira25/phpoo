<?php
//nome da classe
class Fruta{
    //nome dos atributos
    public $nome;
    public $cor;

    /*Metodos*/
    function _construct($nome, $cor)
    {
       $this->nome = $nome;
       $this->cor = $cor;
    }

    function set_name($nome){
        $this->nome = $nome;
    }
    function set_cor($cor){
        $this->cor =$cor;
    }
    //
    function get_name(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }
}
//a palavra new cria um objeto do tipo fruta 
$maca = new Fruta("maca_ifsp", "Vermelho");
/*atribuindo um nome par o meu objeto atraves do metodo  set_name*/
$maca->set_name("maca_ifsp");
// o  comando abaixo imprimi se a atributo for public 
//echo $maca->nome;
/*  o  comando abaixo imprimi se a atributo for public  ou private*/
echo "</br>".$maca->get_name();
$maca->set_cor("Vermelho");
echo "</br>".$maca->get_cor();

?>

