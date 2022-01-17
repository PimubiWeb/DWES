CREATE DATABASE tienda_master;
USE tienda_master;

CREATE TABLE usuarios(
    id          INT(255) auto_increment NOT NULL,
    nombre      VARCHAR(100) NOT NULL,
    apellido    VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255)    NOT NULL,
    rol         VARCHAR(20),
    imagen      VARCHAR(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)

)ENGINE=InnoDB;

INSERT INTO usuarios VALUES(NULL,'Admin','Admin','admin@admin','admin','admin',NULL);

CREATE TABLE categorias(
    id          INT(255) auto_increment NOT NULL,
    nombre      VARCHAR(100) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

INSERT INTO categorias VALUES(NULL,'Manga corta');
INSERT INTO categorias VALUES(NULL,'Manga Tirantes');
INSERT INTO categorias VALUES(NULL,'Manga larga');
INSERT INTO categorias VALUES(NULL,'Sudaderas');

CREATE TABLE productos(
    id              INT(255) auto_increment NOT NULL,
    categoria_id    int(255) NOT NULL,
    nombre          VARCHAR(100) NOT NULL,
    descripcion     text,
    precio          float(100,2) not null,
    stock           int(255) not NULL,
    oferta          varchar(2),
    fecha           date NOT NULL,
    imagen          VARCHAR(255),
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)

)ENGINE=InnoDB;

CREATE TABLE pedidos(
    id              INT(255) auto_increment NOT NULL,
    usuario_id      INT(255) NOT NULL,
    provincia       VARCHAR(100) NOT NULL,
    localidad       VARCHAR(100) NOT NULL,
    direccion       VARCHAR(255) NOT NULL,
    coste           float(200,2) not NULL,
    estado          varchar(20) not null,
    fecha           date,
    hora            time,
    CONSTRAINT pk_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDB;

CREATE TABLE lineas_pedido(
    id              INT(255) auto_increment NOT NULL,
    pedido_id       INT(255) NOT NULL,
    producto_id     INT(255) NOT NULL,
    unidades        INT(255) NOT NULL,
    CONSTRAINT pk_lineas_pedido PRIMARY KEY(id),
    CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
    CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDB;