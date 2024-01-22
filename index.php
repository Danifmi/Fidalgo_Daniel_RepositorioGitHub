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
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&displaitemsCAy=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/base.css">
    <style>
        @font-face {
            font-family: 'Gótica';
            src: url('./css/GrenzeGotisch-VariableFont_wght.ttf') format(truetype);
        }
        *{
            font-family: 'Gótica';
        }
        
    </style>
</head>

<body>
    <header>
        <div class="titulo">
            <img class="titulo__logo" src="./img/InspoTatu_LOGO.png" alt="logo tatu">
            <h1>InspoTatu</h1>
            <img class="titulo__logo" src="./img/InspoTatu_LOGO.png" alt="logo tatu">
        </div>

        <div class="navbar">
            <a class="navbar__link" href="pages/estilos_tatu.php">Inspiración</a>
            <a class="navbar__link" href="php_iniciosesion/logout.php">Bienvenido/a <?php echo htmlspecialchars($_SESSION['usuario_nombre']); 
            ?></a>
            <a class="navbar__link" href="pages/tatuadores.php">Tatuadores</a>
        </div>

        <div class="menu">

            <a class="menu__link" href="pages/tienda.php">Tienda</a>  
            <a class="menu__link" href="./pages/contacto.php">Atención al cliente</a>                   
        </div>
    </header>

    <main>
        <section class="horadetatuarse">
            <a href="./pages/tienda.php">
                <img class="hora__imagen" src= https://i.pinimg.com/originals/46/25/d5/4625d5f337921e6593b7fc2995f2c265.jpg alt="Tatuajes">
            </a>
            <a class="hora__link--2" href="./pages/tienda.php">HORA DE TATUARSE</a>
        </section> 
        <section class="estilostatu">
            <h2 class="estilo__tit">Estilos</h2>
            <div class="estilo-flex">
                <article class="estilo__trady">
                    <img class="trady__img" src="https://i.pinimg.com/564x/b3/b6/68/b3b668d0d7c98659bcb9ccb84ed7fd80.jpg" width="100%" alt="">
                    <h2 class="trady__tit">Tradicional</h2>
                    <a class="trady__link" href="./pages/estilos_tatu.php">VER</a>
                </article>
                <article class="estilo__ignorant">
                    <img class="ignorant__img" src="https://i.pinimg.com/564x/26/a8/e9/26a8e95190a530968401e24bb78659b1.jpg" width="100%" alt="">
                    <h2 class="ignorant__tit">Ignorant</h2>
                    <a class="ignorant__link" href="./pages/estilos_tatu.php">VER</a>
                </article>
                <article class="estilo__geometricos">
                    <img class="geo__img" src="./img/geo__img.png" width="100%" alt="">
                    <h2 class="geo__tit">Geometricos y fluidos</h2>
                    <a class="geo__link" href="./pages/estilos_tatu.php">VER</a>
                </article>
            </div>
        </section>
     
        <section class="Tatuadores">
            <h2 class="Tatuadores__tit">Tatuadores</h2>
            <div class="Tatuadores-flex">
                <article class="Tatuadores__1">
                    <img class="Tatuadores__img" src="https://i.pinimg.com/474x/b7/7f/08/b77f0854b2ac04d3218c39f2e4b23c75.jpg" alt="Tatuador1">
                    <h3>Delarose</h3>
                    <a class="Tatuadores__link" href="./pages/tatuadores.php">Contactar</a>
                </article>
                <article class="Tatuadores__2">
                    <img class="Tatuadores__img" src="https://avatars.mds.yandex.net/i?id=f0b4622513f7c40ecc05d4917b92eb6c89c7cf83-9268554-images-thumbs&n=13" alt="Tatuador2">
                    <h3>Yisu</h3>
                    <a class="Tatuadores__link" href="./pages/tatuadores.php">Contactar</a>
                </article>
                <article class="Tatuadores__3">
                    <img class="Tatuadores__img" src="https://images.8tracks.com/cover/i/012/724/532/fiona-7296.png?rect=166,0,720,720&q=98&fm=jpg&fit=max&w=320&h=320" alt="Tatuador3">
                    <h3>Gigi</h3>
                    <a class="Tatuadores__link" href="./pages/tatuadores.php">Contactar</a>
                </article>
                <article class="Tatuadores__4">
                    <img class="Tatuadores__img" src="https://avatars.mds.yandex.net/i?id=fbe3bd0bb8b613ab03bae1438090d98a6f6bbb20-9158689-images-thumbs&n=13" alt="Tatuador4">
                    <h3>Joey</h3>
                    <a class="Tatuadores__link" href="./pages/tatuadores.php">Contactar</a>
                </article>
            </div>
        </section>

    </main>
    <footer>
        <div class="links-footer">
            <a class="link-footer__1" href="#">Política de Privacidad</a>
            <a class="link-footer__2" href="#">Cookies</a>
            <a class="link-footer__3" href="./pages/contacto.php">Contacto</a>
        </div>
        <div>
            <a href=""><img src="" alt=""></a>
        </div>
        <div class="Contáctanos">
            <h4 class="Contáctanos__tit">Contáctanos</h4>
                <p class="Contáctanos__dir">Calle Consuegra, 4</p>
            <div class="Contáctanos-flex">   
                <p class="Contáctanos__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5629.093670486481!2d-3.4195648822876343!3d40.135784611178764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd426cd528ffe273%3A0xf6be7ff6391d2d7f!2sSupermercado%20Coviran!5e0!3m2!1ses!2ses!4v1700074184362!5m2!1ses!2ses" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>