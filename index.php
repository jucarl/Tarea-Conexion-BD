<!-- Juan Carlos Chávez Arteaga 218744546 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica de HTML5 y CSS</title>
</head>
<body>
<?php
        include('conexion.php');
    ?>
    <div class="nav">
        <a href="index.php">Index</a>
        <a href="formulario.php">Formulario</a>
    </div>
    <?php
          //--- Aplicable a Sentencia SELECT ---//
        $sql = "SELECT * FROM contactos";    
        $stmt = $conn->prepare($sql);        
        $stmt->execute();
     
        // Configura los resultados como un arreglo asociativo    
        $stmt->setFetchMode(PDO::FETCH_ASSOC);   
        // $stmt->fetchAll() Obtiene el arreglo asociativo
            
        echo "<table>";
        echo "<tr><th>nombre</th><th>correo</th><th>genero</th><th>comentario</th></tr>";
        
        foreach ($stmt->fetchAll() as $row)
        {
            echo "<tr><td>" . $row['nombre'] . "</td>
                    <td>" . $row['correo'] . "</td>
                    <td>" . $row['genero'] . "</td>
                    <td>" . $row['comentario'] . "</td></tr>";
                    
        }
        
        echo "</table>";
        
    ?>
</body>