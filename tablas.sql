CREATE TABLE IF NOT EXISTS users (
    userId INT AUTO_INCREMENT,
    userName VARCHAR(20) NOT NULL UNIQUE,
    userEmail VARCHAR(50) NOT NULL UNIQUE,
    Password VARCHAR (255) NOT NULL,
    PRIMARY KEY(userId)
);

CREATE TABLE IF NOT EXISTS registros (
    registroId INT AUTO_INCREMENT,
    userId INT NOT NULL,
    tipo VARCHAR(255) NOT NULL,
    monto VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    categoria  VARCHAR(25) NOT NULL,
    fechaCreacionReg DATETIME NOT NULL,
    fechaRegistro DATETIME NOT NULL,
    nota VARCHAR(255),
    PRIMARY KEY (registroId),
    FOREIGN KEY (userId) REFERENCES users(userId)
);

CREATE TABLE IF NOT EXISTS passreset (
    passResetId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    passResetEmail TEXT NOT NULL,
    passResetSelector  TEXT NOT NULL,
    passResetToken LONGTEXT NOT NULL,
    passResetExpira TEXT NOT NULL
);

/* FALTA VERIFICAR */

CREATE TABLE IF NOT EXISTS cuentas (
    cuentaId INT NOT NULL AUTO_INCREMENT,
    cuentaNombre TEXT NOT NULL,
    cuentaTipo TEXT NOT NULL,
    PRIMARY KEY (cuentaId)
);

CREATE TABLE IF NOT EXISTS grupos (
    nombre VARCHAR(255) NOT NULL,
    userIdA INT,
    userIdB INT,
    FOREIGN KEY (userIdA) REFERENCES users(userId),
    FOREIGN KEY (userIdB) REFERENCES users(userId)
);


