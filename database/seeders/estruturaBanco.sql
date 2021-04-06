CREATE TABLE Usuarios(
	id_usuario SERIAL CONSTRAINT pk_id_usuario PRIMARY KEY,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	telefone VARCHAR(20) NOT NULL,
	data_nascimento DATE NOT NULL,
	senha VARCHAR(255) NOT NULL
);

CREATE TABLE Posts (
	id_post SERIAL CONSTRAINT pk_id_post PRIMARY KEY,
	id_usuario INTEGER NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	imagem VARCHAR(255) NOT NULL,
	status BOOLEAN NOT NULL,
	longitude VARCHAR(255) NOT NULL,
	latitude VARCHAR(255) NOT NULL,
	
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario) 
);

CREATE TABLE Comentarios (
	id_comentario SERIAL CONSTRAINT pk_id_comentario PRIMARY KEY,
	id_usuario INTEGER NOT NULL,
	id_post INTEGER NOT NULL,
	descricao VARCHAR(255),
	data DATE,
	
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario),
	FOREIGN KEY (id_post) REFERENCES Posts (id_post) 
);
