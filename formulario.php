<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <?php
        include('conexion.php');
    ?>
    <div class="nav">
        <a href="index.php">Index</a>
        <a href="formulario.php">Formulario</a>
    </div>
<form action="store.php" method="POST">
        <label for="nombre"></label>Nombre: <input name="nombre" id="nombre"  type="text" /><br />
        <label for="correo"></label>Correo: <input name="correo" id="correo"  step="1" type="mail"/><br />
        <label for="genero"></label> Genero: <select name="genero" id=genero>
            <option selected="selected" value="male">Hombre</option>
            <option value="female">Mujer</option>
        </select><br />
        <label for="comentario"></label>Comentario:<br /><textarea name="comentario" id="comentario" rows="4" cols="50"></textarea><br />
        <label for="enviar"></label><input type="submit" id="enviar"/></input>
    </form>
    <?php
        if(count($_POST)> 0){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $genero = $_POST['genero'];
            $comentario = $_POST['comentario'];

            $sql = "INSERT INTO contacto (nombre, correo, etiqueta) VALUES ('$nombre', '$correo', '$genero', '$comentario')";
            
            $conn->exec($sql);
        }
    ?>
</body>