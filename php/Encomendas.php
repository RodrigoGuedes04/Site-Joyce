<?php 

class encomendas{
    private $nome, $celular, $encomenda, $pronome, $conteudo;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getEncomenda(){
        return $this->encomenda;
    }

    public function setEncomenda($encomenda){
        $this->encomenda = $encomenda;
    }

    public function getPronome(){
        return $this->pronome;
    }

    public function setPronome($pronome){
        $this->pronome = $pronome;
    }

    public function getConteudo(){
        return $this->conteudo;
    }

    public function setConteudo($conteudo){
        $this->conteudo = $conteudo;
    }
}


?>