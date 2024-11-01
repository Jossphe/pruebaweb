CREATE DATABASE contactos_website;

USE contactos_website;

USE contactos_website;

CREATE TABLE contactos (
    id INT NOT NULL IDENTITY(1,1),
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    asunto VARCHAR(100) NOT NULL,
    tipoConsulta VARCHAR(50) NOT NULL,
    preferenciaContacto VARCHAR(50) NOT NULL,
    fechaContacto DATE,
    horaContacto TIME,
    mensaje TEXT NOT NULL,
    fecha_envio DATETIME DEFAULT GETDATE(),
    PRIMARY KEY (id)
);

select * from contactos;