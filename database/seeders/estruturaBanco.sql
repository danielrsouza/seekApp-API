
CREATE TABLE Posts (
	id_post SERIAL CONSTRAINT pk_id_post PRIMARY KEY,
	id_usuario INTEGER NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	imagem VARCHAR(255) NOT NULL,
	status BOOLEAN NOT NULL,
	longitude VARCHAR(255) NOT NULL,
	latitude VARCHAR(255) NOT NULL,

	FOREIGN KEY (id_usuario) REFERENCES users (id)
);

CREATE TABLE Comentarios (
	id_comentario SERIAL CONSTRAINT pk_id_comentario PRIMARY KEY,
	id_usuario INTEGER NOT NULL,
	id_post INTEGER NOT NULL,
	descricao VARCHAR(255),
	data DATE,

	FOREIGN KEY (id_usuario) REFERENCES users (id),
	FOREIGN KEY (id_post) REFERENCES Posts (id_post)
);
