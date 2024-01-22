<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idproducto = isset($_REQUEST['idproducto']) ? $_REQUEST['idproducto'] : null;
    $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
    $estilo = isset($_REQUEST['estilo']) ? $_REQUEST['estilo'] : null;
    $tatuador = isset($_REQUEST['tatuador']) ? $_REQUEST['tatuador'] : null;
    $precio = isset($_REQUEST['precio']) ? $_REQUEST['precio'] : null;
    $foto = isset($_REQUEST['foto']) ? $_REQUEST['foto'] : null;
    
    $hostDB = '127.0.0.1';
    $nombreDB = 'abweb';
    $usuarioDB = 'root';
    $contrasenyaDB = 'Daniel$18052002';
    
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    
    $miInsert = $miPDO->prepare('INSERT INTO producto (nombre, estilo, tatuador, precio, foto ) VALUES (:nombre, :estilo , :tatuador, :precio, :foto)');
    
    $miInsert->execute(
        array(

            'nombre' => $nombre,
            'estilo' => $estilo,
            'tatuador' => $tatuador,
            'precio' => $precio,
            'foto' => $foto
        )
    );
    
    header('Location: ../pages/tienda.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
    <link rel="stylesheet" href="../css/crearmod.css">
    <style>
        @font-face {
            font-family: 'Gótica';
            src: url('../css/GrenzeGotisch-VariableFont_wght.ttf') format(truetype);
        }
        *{
            font-family: 'Gótica';
        }
        
    </style>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" name="nombre">
        </p>
        <p>
            <label for="estilo">Estilo</label>
            <input id="estilo" type="text" name="estilo" >
        </p>
        <p>
            <label for="tatuador">Tatuador</label>
            <input id="tatuador" type="text" name="tatuador" >
        </p>
        <p>
            <label for="precio">Precio</label>
            <input id="precio" type="text" name="precio">
        </p>
        <p>
            <label for="foto">Link imagen</label>
            <input id="foto" type="text" name="foto">
        </p>
        <p>
            <input type="submit" value="Guardar">
        </p>
    </form>
</body>
</html>