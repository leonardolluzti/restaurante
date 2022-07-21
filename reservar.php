<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Restaurante - Reserva</title>
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
    <h1>Sua Reserva</h1>
    <hr/>
    <?php 
    echo "Reserva Realizada com Sucesso! <br />";

    echo "<br />Reserva Nº: ".rand(100, 900);
    echo "<br />Nome: ".$_POST['nome'];
    echo "<br />E-Mail: ".$_POST['email'];
    echo "<br />Fone: ".$_POST['fone'];
    echo "<br />Data: ".date('d/m/Y', strtotime($_POST['data']));
    echo "<br />Local: ".$_POST['local'];
    ?>
</section>
<footer>Copyright © LeoTech Informática Todos os Direitos Reservados 2022</footer>
</body>
</html>
