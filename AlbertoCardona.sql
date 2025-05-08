CREATE DATABASE Tienda_material_informatico;
USE Tienda_material_informatico;

CREATE TABLE VENDEDOR (
    nif VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(100),
    apellidos VARCHAR(100),
    telefono VARCHAR(15),
    email VARCHAR(100),
    nom_empresa VARCHAR(100)
);

CREATE TABLE CATEGORIA (
    cod_cat INT PRIMARY KEY,
    descripcion VARCHAR(255)
);

CREATE TABLE ARTICULO (
    cod_a INT PRIMARY KEY,
    descripcion VARCHAR(255),
    stock INT,
    precio_venta DECIMAL(10,2),
    precio_compra DECIMAL(10,2),
    IVA DECIMAL(5,2),
    categoria INT,
    FOREIGN KEY (categoria) REFERENCES CATEGORIA(cod_cat)
);

CREATE TABLE CLIENTE (
    nif VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(100),
    apellidos VARCHAR(100),
    telefono VARCHAR(15),
    email VARCHAR(100),
    direccion TEXT
);

CREATE TABLE FACTURA (
    num_fac INT PRIMARY KEY,
    forma_pago VARCHAR(50),
    comentario TEXT,
    fecha DATE,
    nif_cliente VARCHAR(20),
    FOREIGN KEY (nif_cliente) REFERENCES CLIENTE(nif)
);

CREATE TABLE ARTICULO_FACTURA (
    num_fac INT,
    cod_a INT,
    precio_venta DECIMAL(10,2),
    cantidad INT,
    PRIMARY KEY (num_fac, cod_a),
    FOREIGN KEY (num_fac) REFERENCES FACTURA(num_fac),
    FOREIGN KEY (cod_a) REFERENCES ARTICULO(cod_a)
);

CREATE TABLE VENDEDOR_ARTICULO (
    proart INT PRIMARY KEY AUTO_INCREMENT,
    nif_vendedor VARCHAR(20) NOT NULL,
    cod_a INT NOT NULL,
    FOREIGN KEY (nif_vendedor) REFERENCES VENDEDOR(nif),
    FOREIGN KEY (cod_a) REFERENCES ARTICULO(cod_a)
);
