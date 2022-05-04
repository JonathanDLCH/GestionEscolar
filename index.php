<?PHP
$servername = "localhost";
$database = "gestionalumnos";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM alumnos";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Escolar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <h1>Gestión Escolar</h1>
    </header>
    <main>
        <form action="generarKardex.php"  method="GET" class="style-form">
            <label for="">Alumno:</label>
            <select name="IdAlumno" id = "IdAlumno">
                <option value= 0 >Seleccione el Alumno</option>
            <?php
                while($row = mysqli_fetch_array($result)) {
                    $IdAlumno=$row['IdAlumno'];
                    $nom=$row['Nombre'];
                    echo "<option value= $IdAlumno > $IdAlumno $nom </option>";
                }
            ?>
            </select>
            <button type="submit" class="style-button">Kardex</button>
        </form>
    </main>
    <footer>
        <small>&copy; Jonathan De La Cruz Huerta | 201731754</small>
    </footer>
</body>
</html>