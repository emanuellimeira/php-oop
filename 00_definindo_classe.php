<?php

/* Nomeando uma classe em PHP
 * 
 * 1. Começa com letra ou underline
 * 2. Caracteres seguintes devem ser letras, números ou underlines
 * 3. Não há limite
 * 
 */
/*
 * Melhores práticas
 * 
 * 1. Utilizar upper camel case name
 */

class Endereco {}
class EnderecoFisico {}
class Endereco_Fisico {}


/* Nomes inválidos
 * class endereco_fisico{}
 * class 21_pula_rua {}
 */


/*
 *  Vamos criar a primeira classe
 */

class Endereco {

    public $rua;
    public $subdivisao_nome = 'João Pessoa';
    public $cidade;
//    public $hora_Atualizada = time();
    
    /*
     * Atributos inválidos
     * 
     * public $-enderecoID
     * public$cidade_copia = $_cidade; -> Atributo é inválido.
     * 
     */
    
    
    
    

}


?>
