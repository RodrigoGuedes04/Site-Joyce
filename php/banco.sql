create database joyce;

use joyce;

CREATE TABLE encomenda (
    id_encomenda INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    encomenda VARCHAR(20) NOT NULL,
    pronome VARCHAR(20) NOT NULL,
    conteudo varchar(500) NOT NULL
);

select * from encomenda;