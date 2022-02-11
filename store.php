<?php
    include('conexion.php');
    if (count($_POST) > 0) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $genero = $_POST['genero'];
        $comentario = $_POST['comentario'];

        $sql = "INSERT INTO contactos (nombre, correo, genero, comentario) VALUES ('$nombre','$correo','$genero','$comentario')";

        $conn->exec($sql);

        //Evita el reenvio de formulario al redirigir al index
        header('Location: index.php');

    }
?>