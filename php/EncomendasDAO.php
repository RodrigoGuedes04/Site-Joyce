<?php 
include "conexao.php";

class encomendasDao{
    //CRUD - create, read, update, delete
    //create
    public function cadastrarEncomenda(Encomendas $m){
        
        $sql0 = "insert into encomenda (nome, telefone, encomenda, pronome, conteudo) values (?, ?, ?, ?, ?)";
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $m->getNome());
        $v0->bindValue(2, $m->getCelular());
        $v0->bindValue(3, $m->getEncomenda());
        $v0->bindValue(4, $m->getPronome());
        $v0->bindValue(5, $m->getConteudo());

        $result0 = $v0->execute();

        if($result0){
            echo "<script>alert('Encomendado com sucesso')</script>";
            header('location:../index.html');
        }else{
            echo "erro ao encomendar";
        }
    }

}