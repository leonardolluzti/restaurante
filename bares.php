<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Restaurante - Bares</title>
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
    <h1>Bares</h1>
    <hr/>
    <?php   
    $bares = [  ["Caldinho do Marcelo", "b1.png","R. Clemente Pereira, s/n - Derby, Recife - PE, 52010-220"], 
                ["Princesa Isabel",     "b2.jpg","R. das Creoulas, 268 - Graças, Recife - PE, 52011-270"], 
                ["Sovaj",               "b3.jpg","Av. Caxangá, 4435 - Várzea, Recife - PE, 50670-000"]];
    foreach($bares as list($bar, $images, $endereco)){  
        echo "<div>";     
        echo "<p>$bar</p><p>Endereço: $endereco</p>"; 
        echo "<img src='./img/".$images."' alt='Imagem: ".$bar."' width='300' height='300' />";
        echo "</div><hr/>";
    }    
    
    ?>
</section>
<footer>Copyright © LeoTech Informática Todos os Direitos Reservados 2022</footer>
</body>
</html>
