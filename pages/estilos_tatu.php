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
    <title>InspoTatu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos_tatu.css">
    <link rel="stylesheet" href="../css/base.css">
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
            <a class="navbar__link" href="estilos_tatu.php">Inspiración</a>
            <a class="navbar__link" href="../php_iniciosesion/logout.php">Bienvenido/a <?php echo htmlspecialchars($_SESSION['usuario_nombre']); 
            ?></a>
            <a class="navbar__link" href="tatuadores.php">Tatuadores</a>
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

        <section class="estilostatu">
            <h2 class="estilo__tit">Estilos</h2>
            <div class="estilo-flex">
                <article class="estilo__trady">
                    <img class="trady__img" src="https://i.pinimg.com/564x/b3/b6/68/b3b668d0d7c98659bcb9ccb84ed7fd80.jpg" width="100%" alt="">
                    <h2 class="trady__tit">Tradicional</h2>
                    
                </article>
                <article class="estilo__ignorant">
                    <img class="ignorant__img" src="https://i.pinimg.com/564x/26/a8/e9/26a8e95190a530968401e24bb78659b1.jpg" width="100%" alt="">
                    <h2 class="ignorant__tit">Ignorant</h2>
                    
                </article>
                <article class="estilo__geometricos">
                    <img class="geo__img" src="../img/geo__img.png" width="100%" alt="">
                    <h2 class="geo__tit">Geometricos y fluidos</h2>
                    
                </article>
            </div>
        </section>

        <section class="estilostatu">
            <div class="estilo-flex">
                <article class="estilo__trady">
                    <img class="trady__img" src="https://newmedia.10masters.com/images/Opcion_1.original.jpg" width="100%" alt="">
                    <h2 class="trady__tit">Blackout</h2>
                    
                </article>
                <article class="estilo__ignorant">
                    <img class="ignorant__img" src="https://i.pinimg.com/564x/61/0e/da/610eda9804dd93115b71b8c74e1e703d.jpg" width="100%" alt="">
                    <h2 class="ignorant__tit">Cibersigilos</h2>
                    
                </article>
                <article class="estilo__geometricos">
                    <img class="geo__img" src="https://i.pinimg.com/564x/f9/86/4c/f9864c7563b9d37ac340d4d38c6385b5.jpg" width="100%" alt="">
                    <h2 class="geo__tit">Neotradicional</h2>
                    
                </article>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="links-footer">
            <a class="link-footer__1" href="#">Política de Privacidad</a>
            <a class="link-footer__2" href="#">Cookies</a>
            <a class="link-footer__3" href="#">Contacto</a>
        </div>
    </footer>

</body>
</html>