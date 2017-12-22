/*
Llibreria de php per generar un codi QR desde PHP:
  http://phpqrcode.sourceforge.net/
*/

DROP SCHEMA IF EXISTS MATERIAL;
CREATE SCHEMA MATERIAL;
USE MATERIAL;

CREATE TABLE usuaris
(codi VARCHAR(10) AUTO_INCREMENT,
nom CHAR(30),
contrasenya BLOB, /*https://zinoui.com/blog/storing-passwords-securely*/ 
email VARCHAR(20),
ROL ENUM('admin','professor','alumne') DEFAULT 'alumne',
CONSTRAINT U_usuaris UNIQUE(codi), 
CONSTRAINT PK_usuaris PRIMARY KEY(codi)
);

CREATE TABLE stock
(codi VARCHAR(10) AUTO_INCREMENT,
nom VARCHAR(30),
quantitat_inicial FLOAT,
quantitat_actual FLOAT,
/* link_compra VARCHAR(255) podriem posar a la row un boto a dins que porti a la pagina on comprar els productes, si dona temps nomes */
percentatge_minim FLOAT, /*https://stackoverflow.com/questions/32456821/how-to-hide-a-column-if-no-data-is-present
                        per ocultar aquesta columna a l'usuari ja que no li interesa veure-ho
                        i aixi poder donar l'opcio a l'admin de canviar el percentatge minim d'un item sense
                        perdre-ho si ho fessim per variables PHP. */
CONSTRAINT U_stock UNIQUE(codi),
CONSTRAINT PK_stock PRIMARY KEY(codi)
);

CREATE TABLE moviments
(codi VARCHAR(10) AUTO_INCREMENT,
producte VARCHAR(10),
canvi_stock FLOAT,
usuari VARCHAR(10),
dia_moviment DATE,
CONSTRAINT U_moviments UNIQUE(codi),
CONSTRAINT PK_moviments PRIMARY KEY(codi),
CONSTRAINT FK_moviment_stock FOREIGN KEY (producte) REFERENCES stock(codi),
CONSTRAINT FK_moviment_usuaris FOREIGN KEY (usuari) REFERENCES usuaris(codi)
);