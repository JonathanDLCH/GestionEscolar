<?PHP
$servername = "localhost";
$database = "gestionalumnos";
$username = "root";
$password = "";

$id=$_GET['IdAlumno'];

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM alumnos WHERE idAlumno=$id";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
    $IdAlumno=$row['IdAlumno'];
    $nom=$row['Nombre'];
    $grado=$row['Grado'];
    $grupo=$row['Grupo'];
    $img=$row['Imagen'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $id ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <h1>Gestión Escolar</h1>
    </header>
    <main class="main-user">
        <section class="alumno">
            <img src="<?php echo $img?>" alt="foto alumno" class="perfil">
            <h2><?php echo $id . $nom?></h2>
            <h3><?php echo $grado . $grupo ?></h3>
        </section>
        <section>
            <h2>Calificaciónes</h2>
            <table>
                <tr>
			        <td>Materia</td>
                    <td>Calificación</td>
			    </tr>
                <?php
                    $sql = "SELECT * FROM calificaciones WHERE IdAlumno=$IdAlumno"; //Consulta todos los elementos
                    $result = mysqli_query($conn,$sql);
                    $aprobadas = 0;
                    $reprobadas = 0;
                        while($row = mysqli_fetch_array($result)) {

                            $mat = $row['IdMateria'];
                            if ($row["Calificacion"]>=6){
                                $aprobadas=$aprobadas+1;
                            }else{
                                $reprobadas = $reprobadas+1;
                            }
                            $sql2 = "SELECT * FROM materias WHERE IdMateria=$mat"; //Consulta todos los elementos
                            $result2 = mysqli_query($conn,$sql2);
                            while($row2 = mysqli_fetch_array($result2)) {
                ?>
                        <tr>
                            <td><?php echo $row2["Materia"];?></td>
                            <td><?php echo $row["Calificacion"];?></td>
                            <td><a href="editarCalificacion.php?id=<?php echo $row["IdCalificacion"] ?>" ?>Editar</a></td>
                        </tr>
                        
                <?php
                            }
                        }
                ?>
            </table>
            <br><br>
            <p>Materias aprobadas: <?php echo $aprobadas;?> | Materias reprobadas: <?php echo $reprobadas;?></p>
        </section>
        <br><br>
        <a href="index.php">Inicio</a>

    </main>
    <footer>
        <small>&copy; Jonathan De La Cruz Huerta | 201731754</small>
    </footer>
</body>
</html>