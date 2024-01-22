<?php
$hostDB = '127.0.0.1';
$nombreDB = 'abweb';
$usuarioDB = 'root';
$contrasenyaDB = 'Daniel$18052002';
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

$idproducto = isset($_REQUEST['idproducto']) ? $_REQUEST['idproducto'] : null;

$miConsulta = $miPDO->prepare('DELETE FROM producto WHERE idproducto = ?');

$miConsulta->execute([ $idproducto]);

header('Location: ../pages/tienda.php');
?> 