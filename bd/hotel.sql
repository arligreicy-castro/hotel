CREATE TABLE tipo (
  idtipo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descritivo VARCHAR(80) NULL,
  preco FLOAT NULL,
  PRIMARY KEY(idtipo)
);

CREATE TABLE hotel (
  idhotel INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  logradouro VARCHAR(80) NULL,
  numero VARCHAR(5) NULL,
  pais VARCHAR(50) NULL,
  telefone VARCHAR(15) NULL,
  PRIMARY KEY(idhotel)
);

CREATE TABLE cliente (
  idcliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(80) NULL,
  celular VARCHAR(15) NULL,
  PRIMARY KEY(idcliente)
);

CREATE TABLE quarto (
  idquarto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idtipo INTEGER UNSIGNED NOT NULL,
  idhotel INTEGER UNSIGNED NOT NULL,
  numero VARCHAR(5) NULL,
  andar INT NULL,
  PRIMARY KEY(idquarto),
  INDEX quarto_FKIndex1(idhotel),
  INDEX quarto_FKIndex2(idtipo),
  FOREIGN KEY(idhotel)
    REFERENCES hotel(idhotel)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(idtipo)
    REFERENCES tipo(idtipo)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE reserva (
  idreserva INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idcliente INTEGER UNSIGNED NOT NULL,
  idquarto INTEGER UNSIGNED NOT NULL,
  data_reserva DATE NULL,
  data_entreda DATE NULL,
  data_saida DATE NULL,
  PRIMARY KEY(idreserva),
  INDEX reserva_FKIndex1(idquarto),
  INDEX reserva_FKIndex2(idcliente),
  FOREIGN KEY(idquarto)
    REFERENCES quarto(idquarto)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(idcliente)
    REFERENCES cliente(idcliente)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


