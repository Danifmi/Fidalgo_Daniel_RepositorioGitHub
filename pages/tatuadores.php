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
    <link rel="stylesheet" href="../css/tatuadores.css">
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
            <a class="hora__link--2" href="../index.php">HORA DE TATUARSE</a>
        </section> 
        
        <section class="Tatuadores">
            <h2 class="Tatuadores__tit">Tatuadores</h2>
            <div class="Tatuadores-flex">
                <article class="Tatuadores__1">
                    <img class="Tatuadores__img" src="https://i.pinimg.com/474x/b7/7f/08/b77f0854b2ac04d3218c39f2e4b23c75.jpg" alt="Tatuador1">
                    <h3>Delarose</h3>
                    
                </article>
                <article class="Tatuadores__2">
                    <img class="Tatuadores__img" src="https://avatars.mds.yandex.net/i?id=f0b4622513f7c40ecc05d4917b92eb6c89c7cf83-9268554-images-thumbs&n=13" alt="Tatuador2">
                    <h3>Yisu</h3>
                   
                </article>
                <article class="Tatuadores__3">
                    <img class="Tatuadores__img" src="https://images.8tracks.com/cover/i/012/724/532/fiona-7296.png?rect=166,0,720,720&q=98&fm=jpg&fit=max&w=320&h=320" alt="Tatuador3">
                    <h3>Gigi</h3>
                    
                </article>
                <article class="Tatuadores__4">
                    <img class="Tatuadores__img" src="https://avatars.mds.yandex.net/i?id=fbe3bd0bb8b613ab03bae1438090d98a6f6bbb20-9158689-images-thumbs&n=13" alt="Tatuador4">
                    <h3>Joey</h3>
                  
                </article>
            </div>
        </section>

        <section class="Tatuadores">
            <div class="Tatuadores-flex">
                <article class="Tatuadores__1">
                    <img class="Tatuadores__img" src="https://i.ytimg.com/vi/UxCjh6zPEN4/hqdefault.jpg" alt="Tatuador1">
                    <h3>Diggy</h3>
                    
                </article>
                <article class="Tatuadores__2">
                    <img class="Tatuadores__img" src="../img/pedrito.jpg" alt="Tatuador2">
                    <h3>Pepinillo</h3>
                   
                </article>
                <article class="Tatuadores__3">
                    <img class="Tatuadores__img" src="data:image/jpeg;base64,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" alt="Tatuador3">
                    <h3>Eu</h3>
                    
                </article>
                <article class="Tatuadores__4">
                    <img class="Tatuadores__img" src="https://i.quotev.com/zea7wzm7aaaa.jpg" alt="Tatuador4">
                    <h3>McChicken</h3>
                  
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