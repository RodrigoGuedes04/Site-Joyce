<?php

$nome = filter_input(INPUT_POST, "nome");
$celular = filter_input(INPUT_POST, "telefone");
$encomenda = filter_input(INPUT_POST, "encomenda");
$pronome = filter_input(INPUT_POST, "pronome");
$conteudo = filter_input(INPUT_POST, "conteudo");
$crud = filter_input(INPUT_POST, "crud");

include "Encomendas.php";
include "EncomendasDAO.php";

$encomendas = new Encomendas();
$encomendasDao = new EncomendasDAO(); // Corrigido aqui

$encomendas->setNome($nome);
$encomendas->setCelular($celular);
$encomendas->setEncomenda($encomenda);
$encomendas->setPronome($pronome);
$encomendas->setConteudo($conteudo);


if($crud=='cadastrar'){ // Corrigido aqui
    $encomendasDao->cadastrarEncomenda($encomendas); // Corrigido aqui
}
?>
