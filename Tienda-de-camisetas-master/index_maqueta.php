<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="container">
    <!--header-->
        <header id="header">
            <div id="logo">
                <img src="<?php base_url ?>img/camiseta.png" alt="camiseta-logo">
                <a href="index.php">Tienda de camisetas</a>
            </div>
        </header>
    
        <!--menu-->
        <nav id="menu">
            <ul>
                <li><a href=""> Inicio</a></li>
                <li><a href=""> Categoria 1</a></li>
                <li><a href=""> Categoria 2</a></li>
                <li><a href=""> Categoria 3</a></li>
                <li><a href=""> Categoria 4</a></li>
                <li><a href=""> Categoria 5</a></li>
            </ul>
        </nav>
    
        <div id="content">
            <!--barra lateral-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Login</h3>
                    <form action="#" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="Enviar">
                    </form>
                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>
                </div>
            </aside>
        

        <!--contenido central-->
        <div id="central">
            <h1>Productos destacados</h1>

            <div class="product">
                <img src="img/1.jpg" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>

            <div class="product">
                <img src="img/2.jpg" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>

            <div class="product">
                <img src="img/3.jpg" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
        </div><!--central-->
        </div><!--content-->
    
        <!--footer-->
        <div id="footer">
            <p>Pablo  &copy; <?=date('Y')?> </p>
        </div>
    </div><!--contenido-->
</body>
</html>
