<?php

$servidor = "localhost"; 
$usuario = "root";
$clave = "";
$baseDeDatos = "agenda";
$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agenda</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 900px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .container h2 {
        text-align: center;
        margin-bottom: 30px;
    }
    input[type="text"],
    input[type="email"],
    input[type="submit"],
    input[type="reset"] {
        width: calc(100% - 22px);
        margin-bottom: 20px;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-bottom: 2px solid #00b894;
        background-color: #f8f9fa;
        transition: border-bottom-color 0.3s ease;
    }
    input[type="submit"],
    input[type="reset"] {
        background-color: #00b894;
        color: #fff;
        cursor: pointer;
    }
    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #00796b;
    }
    input[type="text"]:focus,
    input[type="email"]:focus {
        border-bottom-color: #0984e3;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #00b894;
        color: #fff;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
</style>
</head>
<body>

<div class="container">
    <h2>AGENDA</h2>
    <form action="#" name="agenda" method="post">
        <input type="text" name="NOMBRE" placeholder="Nombre">
        <input type="text" name="APELLIDOS" placeholder="Apellidos">
        <input type="text" name="DOMICILIO" placeholder="Domicilio">
        <input type="text" name="TELEFONO_DE_CASA" placeholder="Teléfono de Casa">
        <input type="text" name="CELULAR" placeholder="Celular">
        <input type="text" name="FECHA_DE_NACIMIENTO" placeholder="Fecha de Nacimiento">
        <input type="email" name="CORREO_ELECTRONICO" placeholder="Correo Electrónico">
      
        <input type="submit" name="registro" value="Registrar"> 
        <input type="reset" value="Limpiar">
    </form>
</div>
<?php
if(isset($_POST['registro'])){
    $NOMBRE= $_POST['NOMBRE']; 
    $APELLIDOS= $_POST ['APELLIDOS'];
    $DOMICILIO= $_POST['DOMICILIO'];
    $TELEFONO_DE_CASA= $_POST['TELEFONO_DE_CASA']; 
    $CELULAR= $_POST ['CELULAR'];
    $FECHA_DE_NACIMIENTO= $_POST['FECHA_DE_NACIMIENTO'];
    $CORREO_ELECTRONICO= $_POST['CORREO_ELECTRONICO'];



    $insertarDatos = "INSERT INTO agend VALUES ('$NOMBRE','$APELLIDOS','$DOMICILIO','$TELEFONO_DE_CASA','$CELULAR','$FECHA_DE_NACIMIENTO','$CORREO_ELECTRONICO','')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    
}
?>
<div class="container">
    <h2>BUSCADOR</h2>
    <form action="#" name="buscador" method="post">
        <input type="text" name="search" placeholder="Buscar por nombre...">
        <input type="submit" name="buscar" value="Buscar">
        
       
    </form>

    <div id="tabla-registros" style="display: <?php echo isset($_POST['buscar']) ? 'block' : 'none'; ?>">
        <h3>Registros:</h3>
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>DOMICILIO</th>
                <th>TELÉFONO DE CASA</th>
                <th>CELULAR</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>CORREO ELECTRÓNICO</th>
            </tr>
            <?php
            if(isset($_POST['buscar'])){
                $search = $_POST['search'];
                $query = "SELECT * FROM agend WHERE NOMBRE LIKE '%$search%'";
            } else {
                $query = "SELECT * FROM agend"; // Si no se realiza ninguna búsqueda, selecciona todos los registros
            }
            
            $resultados = mysqli_query($enlace, $query);
            while($registro = mysqli_fetch_array($resultados)){
                echo "<tr>";
                echo "<td>".$registro['NOMBRE']."</td>";
                echo "<td>".$registro['APELLIDOS']."</td>";
                echo "<td>".$registro['DOMICILIO']."</td>";
                echo "<td>".$registro['TELEFONO_DE_CASA']."</td>";
                echo "<td>".$registro['CELULAR']."</td>";
                echo "<td>".$registro['FECHA_DE_NACIMIENTO']."</td>";
                echo "<td>".$registro['CORREO_ELECTRONICO']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>



</body>
</html>
