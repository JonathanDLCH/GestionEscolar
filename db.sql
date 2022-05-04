CREATE DATABASE gestionalumnos; 
USE gestionalumnos; 

CREATE TABLE materias(
    IdMateria INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,    
    Materia VARCHAR(40) NOT NULL
);

CREATE TABLE alumnos(
    IdAlumno INT(3)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(40) NOT NULL,
    Grado VARCHAR(60) NOT NULL,
    Grupo varchar(20) NOT NULL,
    Imagen LONGBLOB
);

CREATE TABLE calificaciones(
    IdCalificacion INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    IdAlumno INT(3) NOT NULL,
    IdMateria INT(3) NOT NULL,
    Calificacion INT(2) NOT NULL,
    FOREIGN KEY(IdAlumno) REFERENCES alumnos(IdAlumno),
    FOREIGN KEY(IdMateria) REFERENCES materias(IdMateria)
);


/*
INSERCIONES DE ALUMNOS,MATERIAS Y CALIFICACIÓNES
*/

INSERT INTO materias(Materia) VALUES ('Matematicas');
INSERT INTO materias(Materia) VALUES ('Biología');
INSERT INTO materias(Materia) VALUES ('Historia');
INSERT INTO materias(Materia) VALUES ('Geografia');
INSERT INTO materias(Materia) VALUES ('Español');
INSERT INTO materias(Materia) VALUES ('Inglés');

INSERT INTO alumnos(Nombre,Grado,Grupo,Imagen) VALUES ('Juan Perez Perez','3ro','A','https://static.guiainfantil.com/media/20588/c/asi-es-el-desarrollo-psicomotor-y-la-evolucion-en-ninos-de-4-a-6-anos-md.jpg');
INSERT INTO alumnos(Nombre,Grado,Grupo,Imagen) VALUES ('Maria Lopez Lopez','3ro','A','https://www.etapainfantil.com/wp-content/uploads/2015/10/Beneficios-pintar-ni%C3%B1os.jpg');
INSERT INTO alumnos(Nombre,Grado,Grupo,Imagen) VALUES ('Luis Gomez Gomez','3ro','B','https://www.cdc.gov/ncbddd/spanish/childdevelopment/positiveparenting/images/preschool-400px.jpg');
INSERT INTO alumnos(Nombre,Grado,Grupo,Imagen) VALUES ('Carmen Sanchez Sanchez','4to','A','https://cdn.shopify.com/s/files/1/1415/1124/articles/09_enero_870x588.jpg?v=1484606953');
INSERT INTO alumnos(Nombre,Grado,Grupo,Imagen) VALUES ('Sergio Hernandez Hernandez','4do','B','https://static.guiainfantil.com/media/24057/c/el-desarrollo-de-un-nino-de-5-anos-que-aprenden-los-ninos-a-esta-edad-md.jpg');

INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (1,1,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (1,2,8);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (1,3,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (1,4,7);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (1,5,10);

INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (2,1,10);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (2,2,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (2,3,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (2,4,7);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (2,5,8);

INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (3,1,7);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (3,2,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (3,3,6);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (3,4,10);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (3,5,8);

INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (4,1,10);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (4,2,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (4,3,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (4,4,10);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (4,5,9);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (4,6,10);

INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (5,1,7);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (5,2,7);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (5,3,8);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (5,4,10);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (5,5,10);
INSERT INTO calificaciones(IdAlumno,IdMateria,Calificacion) VALUES (5,6,10);