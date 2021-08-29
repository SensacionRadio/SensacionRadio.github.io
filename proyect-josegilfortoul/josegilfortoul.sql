--- Crear base de datos
	
	CREATE DATABASE <db>

	--- crear tabla

	CREATE TABLE contacto(
		id INT,
		nombre VARCHAR(155),
		apellido VARCHAR(155),
		email VARCHAR(155),
		age INT,
		--- status ENUM(''),
		mensaje TEXT,
		create_at TIMESTAMP,
	);