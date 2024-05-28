DROP DATABASE IF EXISTS empleados;
CREATE DATABASE IF NOT EXISTS empleados;
USE empleados;

DROP TABLE IF EXISTS dept_emp,
                     dept_manager,
                     titulos,
                     salarios, 
                     empleados, 
                     departamentos;


CREATE TABLE empleados (
    id_emp      INT             NOT NULL,
    fecha_nacimiento  DATE            NOT NULL,
    nombre  VARCHAR(14)     NOT NULL,
    apellidos   VARCHAR(16)     NOT NULL,
    genero      ENUM ('M','F')  NOT NULL,    
    fecha_alta   DATE            NOT NULL,
    PRIMARY KEY (id_emp)
);

CREATE TABLE departamentos (
    id_dep     CHAR(4)         NOT NULL,
    nombre_departamento   VARCHAR(40)     NOT NULL,
    PRIMARY KEY (id_dep),
    UNIQUE  KEY (nombre_departamento)
);

CREATE TABLE dept_manager (
   id_emp       INT             NOT NULL,
   id_dep      CHAR(4)         NOT NULL,
   fecha_inicio    DATE            NOT NULL,
   fecha_fin      DATE            NOT NULL,
   FOREIGN KEY (id_emp)  REFERENCES empleados (id_emp)    ON DELETE CASCADE,
   FOREIGN KEY (id_dep) REFERENCES departamentos (id_dep) ON DELETE CASCADE,
   PRIMARY KEY (id_emp,id_dep)
); 

CREATE TABLE dept_emp (
    id_emp      INT             NOT NULL,
    id_dep     CHAR(4)         NOT NULL,
    fecha_inicio   DATE            NOT NULL,
    fecha_fin     DATE            NOT NULL,
    FOREIGN KEY (id_emp)  REFERENCES empleados   (id_emp)  ON DELETE CASCADE,
    FOREIGN KEY (id_dep) REFERENCES departamentos (id_dep) ON DELETE CASCADE,
    PRIMARY KEY (id_emp,id_dep)
);

CREATE TABLE titulos (
    id_emp      INT             NOT NULL,
    titulo       VARCHAR(50)     NOT NULL,
    fecha_inicio   DATE            NOT NULL,
    fecha_fin     DATE,
    FOREIGN KEY (id_emp) REFERENCES empleados (id_emp) ON DELETE CASCADE,
    PRIMARY KEY (id_emp,titulo, fecha_inicio)
) 
; 

CREATE TABLE salarios (
    id_emp      INT             NOT NULL,
    salario      INT             NOT NULL,
    fecha_inicio   DATE            NOT NULL,
    fecha_fin     DATE            NOT NULL,
    FOREIGN KEY (id_emp) REFERENCES empleados (id_emp) ON DELETE CASCADE,
    PRIMARY KEY (id_emp, fecha_inicio)
) 
; 