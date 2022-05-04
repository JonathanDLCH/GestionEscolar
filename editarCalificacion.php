<?php
    $servername = "localhost";
    $database = "gestionalumnos";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT * FROM calificaciones WHERE IdCalificacion = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $idAlumno = $row["IdAlumno"];
            $idMateria = $row["IdMateria"];
            $calificacion = $row["Calificacion"];
        }
    }

    if (isset($_POST["calificacion"])) {
        $calificacion_new = $_POST["calificacion"];

        $query = "UPDATE calificaciones set Calificacion = '$calificacion_new' WHERE IdCalificacion = $id";
        mysqli_query($conn, $query);
        header("Location: generarKardex.php?IdAlumno=".$idAlumno);
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando materia</title>
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
        <section>
            <h2>Editar Calificación</h2>
            <form action="editarCalificacion.php?id=<?php echo $_GET["id"]?>" method="POST">
                <label for="">Id Materia: <?php echo $idMateria ?></label>
                <p>Nueva calificacion: <input type="text" value="<?php echo $calificacion ?>" placeholder="calificacion" name="calificacion"></p>
                <button type="submit" name="submit" class="style-button">Guardar</button>
            </form>
        </section>
        
        <br><br>
        <a href="index.php">Inicio</a>
    </main>
    <footer>
        <small>&copy; Jonathan De La Cruz Huerta | 201731754</small>
    </footer>
</body>
</html>