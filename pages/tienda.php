<?php

session_start();
if (!isset($_SESSION['usuario_id'])){
    header("Location: php_iniciosesion/login.php");
    exit;
}
$hostDB = '127.0.0.1';
$nombreDB = 'abweb'; 
$usuarioDB = 'root';
$contrasenyaDB = 'Daniel$18052002';

$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

$miConsulta = $miPDO->prepare('SELECT * FROM producto');
$miConsulta->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/tatuadores.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/tienda.css">
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
    <header>
        <div class="titulo">
            <img class="titulo__logo" src="../img/InspoTatu_LOGO.png" alt="logo tatu">
            <h1>InspoTatu</h1>
            <img class="titulo__logo" src="../img/InspoTatu_LOGO.png" alt="logo tatu">
        </div>

        <div class="navbar">
            <a class="navbar__link" href="../pages/estilos_tatu.php">Inspiración</a>
            <a class="navbar__link" href="../php_iniciosesion/logout.php">Bienvenido/a <?php echo htmlspecialchars($_SESSION['usuario_nombre']); 
            ?></a>
            <a class="navbar__link" href="../pages/tatuadores.php">Tatuadores</a>
        </div>

        <div class="menu">
            <a class="menu__link" href="tienda.php">Tienda</a>  
            <a class="menu__link" href="contacto.php">Atención al cliente</a>                   
        </div>
    </header>
    <main>
        <section class="horadetatuarse">
            <a href="../index.php">
                <img class="hora__imagen" src= https://i.pinimg.com/originals/46/25/d5/4625d5f337921e6593b7fc2995f2c265.jpg alt="Tatuajes">
            </a>
            <a class="hora__link--2" href="../index.php">PÁGINA PRINCIPAL</a>
        </section> 
        <div class="button-container">
                        <?php if ($_SESSION['usuario_id'] == 1): ?> 
                            <a class="boton_crear" href="../php_productos/crear.php">Crear</a>
                        <?php endif; ?>
        </div>
        <section class="productos">
            <?php foreach ($miConsulta as $clave => $valor): ?>
                <div class="item">
                    <div class="img_item"><img src="<?= $valor['foto']; ?>" > </div>
                    <div><?= $valor['nombre']; ?></div>
                    <div>Estilo: <?= $valor['estilo']; ?></div>
                    <div>Tatuador: <?= $valor['tatuador']; ?></div>
                    <div>Precio: <?= $valor['precio']; ?>$</div>
                    <div>
                        <button class="botoncarrito" onclick="agregarAlCarrito('<?= $valor['nombre']; ?>', <?= $valor['precio']; ?>)">Agregar al Carrito</button>
                    </div>
                    <div class="button-container">
                        <?php if ($_SESSION['usuario_id'] == 1): ?> 
                            <a class="button" href="../php_productos/modificar.php?idproducto=<?= $valor['idproducto'] ?>">Modificar</a>
                            <a class="button" href="../php_productos/borrar.php?idproducto=<?= $valor['idproducto'] ?>">Borrar</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        <aside id="carrito-sidebar">
        <h2>CARRITO DE TATUS</h2>
        <div id ="carrito">
               
        </div>
        <div id="totalcarrito">
            <p>Total: 0$</p>
        </div>
        <div>
                <button class="botoncarrito" onclick="vaciarcarrito()">Vaciar carrito</button>
        </div>

        </aside>

        <div id="toggle-btn" onclick="toggleSidebar()">CARRITO</div>
    </main>

    <footer>
        <div class="links-footer">
            <a class="link-footer__1" href="#">Política de Privacidad</a>
            <a class="link-footer__2" href="#">Cookies</a>
            <a class="link-footer__3" href="#">Contacto</a>
        </div>
    </footer>
    <script src="carrito.js"></script>
</body>
</html>