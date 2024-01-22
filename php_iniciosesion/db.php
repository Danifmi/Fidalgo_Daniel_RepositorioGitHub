<?php
// db.php
$hostDB = '127.0.0.1';
$nombreDB = 'abweb';
$usuarioDB = 'root';
$contrasenyaDB = 'Daniel$18052002';
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
try {
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    $miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: No se pudo conectar. " . $e->getMessage());
}
?>
