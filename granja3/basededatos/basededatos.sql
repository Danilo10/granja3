DROP DATABASE IF EXISTS granja3;

CREATE DATABASE granja3;

USE granja3;

CREATE TABLE registrolechon(
    id              INTEGER             NOT NULL				PRIMARY KEY             AUTO_INCREMENT,
    codigo_animal   TEXT                NOT NULL,
    precio          FLOAT               NOT NULL,
    peso            INTEGER             NOT NULL,
    descripcion     TEXT                NOT NULL,
    edad            INTEGER             NOT NULL,
    fecha_compra    TIMESTAMP           NOT NULL            DEFAULT            current_timestamp()         ON UPDATE           current_timestamp()
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_spanish_ci;

CREATE TABLE registropeso(
    id              INTEGER             NOT NULL				PRIMARY KEY             AUTO_INCREMENT,
    codigo_animal   TEXT                NOT NUll,
    peso            INTEGER             NOT NULL,
    fecha_registro  TIMESTAMP           NOT NULL            DEFAULT            current_timestamp()         ON UPDATE           current_timestamp()
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_spanish_ci;

CREATE TABLE venta(
    id              INTEGER             NOT NULL				PRIMARY KEY             AUTO_INCREMENT,
    codigo_animal   TEXT                NOT NULL,
    precio          FLOAT               NOT NULL,
    edad            TINYINT             NOT NULL,
    fecha_venta     DATETIME            NOT NULL
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_spanish_ci;

CREATE TABLE usuarios(
    id              INTEGER             NOT NULL				PRIMARY KEY             AUTO_INCREMENT,
    usuario         VARCHAR(15)         NOT NULL,
    contrasenia     VARCHAR(25)         NOT NULL,
    rol             VARCHAR(10)         NOT NULL
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_spanish_ci;

INSERT INTO usuarios(
    usuario,
    contrasenia,
    rol)
VALUES(
    'admin',
    'admin',
    'admin'
);

INSERT INTO usuarios(
    usuario,
    contrasenia,
    rol)
VALUES(
    'operador',
    'operador',
    'operador'
);