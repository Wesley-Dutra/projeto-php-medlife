CREATE TABLE tipo (
	id int PRIMARY KEY AUTO_INCREMENT,
	descricao varchar(50)
);

CREATE TABLE fornecedor (
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(80) NOT NULL,
	telefone varchar(16),
	estado char(2),
	cidade varchar(35)
);

CREATE TABLE produtos (
	id serial PRIMARY KEY,
	nome varchar(120) NOT NULL,
	descricao varchar(380),
	data_entrega date,
	data_vencimento date,
	id_tipo int NOT NULL,
	id_fornecedor int NOT NULL,
	FOREIGN KEY (id_tipo) REFERENCES tipo(id),
	FOREIGN KEY (id_fornecedor) REFERENCES fornecedor(id)
);

INSERT INTO tipo (descricao) VALUES ('Álcool');
INSERT INTO tipo (descricao) VALUES ('Manipulado');
INSERT INTO tipo (descricao) VALUES ('Fitoteráptico');
INSERT INTO tipo (descricao) VALUES ('Genérico');
INSERT INTO tipo (descricao) VALUES ('Manipulado');
INSERT INTO tipo (descricao) VALUES ('Higiene');

INSERT INTO fornecedor (nome, telefone, estado, cidade) VALUES ('FitoLipto', '(54) 9 9936-5768', 'RS', 'Carpazinha');
INSERT INTO fornecedor (nome, telefone, estado, cidade) VALUES ('ArchMed', '(11) 9 9612-9366', 'SP', 'Alvorada');

INSERT INTO produtos (nome, descricao, data_entrega, data_vencimento, id_tipo, id_fornecedor) VALUES ('Chá de melissa', 'Calmante natural a base de erva cidreira', '2022-11-02', '2024-07-18', 3, 1);
INSERT INTO produtos (nome, descricao, data_entrega, data_vencimento, id_tipo, id_fornecedor) VALUES ('Losartana Potássica 50mg 30 comprimidos', 'medicamento que atua dilatando os vasos sanguíneos, para ajudar o coração a bombear o sangue para o corpo com mais facilidade.', '2021-12-15', '2022-07-03', 4, 2);