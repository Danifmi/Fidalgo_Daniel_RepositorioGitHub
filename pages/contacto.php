<?php

session_start();
if (!isset($_SESSION['usuario_id'])){
    header("Location: php_iniciosesion/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspotatu-Contacto</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/contacto.css">
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
        <section class="Contacto">
            <div>
                <h2 class="Contacto_tit">Contacto</h2>
                <p class="Contacto_txt">Somos un proyecto que intenta acercar el tatuaje a todos los públicos, dando a conocer estilos y tatuadores. Si tienes cualquier duda, animate a ponerte en contacto con nosotros dejandonos un mensaje a través del formulario. </p>
            </div>
        </section>
        <section>
            <form action="/enviar" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            
                <button type="submit">Enviar</button>
        </section>
    </main>
    <footer>
        <div class="links-footer">
            <a class="link-footer__1" href="#">Política de Privacidad</a>
            <a class="link-footer__2" href="#">Cookies</a>
            <a class="link-footer__3" href="./contacto.php">Contacto</a>
        </div>
    </footer>
</body>
</html>