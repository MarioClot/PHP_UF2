DROP SCHEMA IF EXISTS MATERIAL;
CREATE SCHEMA material;
USE material;

CREATE TABLE usuaris
(codi INT(10) AUTO_INCREMENT,
nom CHAR(30),
contrasenya VARCHAR(30), /*https://zinoui.com/blog/storing-passwords-securely */ 
email VARCHAR(30),
ROL ENUM('professor','alumne') DEFAULT 'alumne',
CONSTRAINT U_usuaris UNIQUE(codi), 
CONSTRAINT PK_usuaris PRIMARY KEY(codi)
);

CREATE TABLE stock
(codi INT(10) AUTO_INCREMENT,
nom VARCHAR(30),
tipus_stock ENUM('fungible','fix') DEFAULT 'fungible',
ambit VARCHAR(50),
data_obertura DATE,
quantitat_inicial FLOAT,
quantitat_actual FLOAT,
percentatge_minim FLOAT, 
CONSTRAINT U_stock UNIQUE(codi),
CONSTRAINT PK_stock PRIMARY KEY(codi)
);

CREATE TABLE moviments
(codi INT(10) AUTO_INCREMENT,
producte INT(10),
canvi_stock FLOAT,
usuari INT(10),
dia_moviment DATE,
CONSTRAINT U_moviments UNIQUE(codi),
CONSTRAINT PK_moviments PRIMARY KEY(codi),
CONSTRAINT FK_moviment_stock FOREIGN KEY (producte) REFERENCES stock(codi),
CONSTRAINT FK_moviment_usuaris FOREIGN KEY (usuari) REFERENCES usuaris(codi)
);

CREATE TABLE proveidors
(codi INT(10),
nom CHAR(30),
email VARCHAR(30),
direccio VARCHAR(100),
telefon INT(20),
link VARCHAR(100),
CONSTRAINT U_proveidors UNIQUE(codi),
CONSTRAINT PK_proveidors PRIMARY KEY(codi)
);