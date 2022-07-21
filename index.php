<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Restaurantes</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css" media="screen" />
</head>
<body>
<header>
<nav>
    <ul>
        <?php
            $menu = ["Home", "Restaurantes", "Bares", "Buffets", "Faça sua Reserva"];
            $links = ["index.php", "restaurantes.php", "bares.php", "buffets.php", "reserva.php"];
            for($c=0; $c<=4; $c++){
                echo "<li><a href='$links[$c]'>$menu[$c]</a></li>";
            } 
                
        ?>
    </ul>
</nav>
</header>
<section>
<section>
    <img src="./img/banner-topo.jpg" alt="Banner"/>
</section>
<footer>Copyright © LeoTech Informática Todos os Direitos Reservados 2022</footer>
</body>
</html>
