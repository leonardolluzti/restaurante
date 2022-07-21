<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Restaurante - Buffets</title>
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
    <h1>Buffets e Rodízios</h1>
    <hr/>
    <?php
    $buffets = [["Portal do Derby","c1.jpg","R. Clemente Pereira, s/n - Derby, Recife - PE, 52010-220"], 
                ["Macunaima","c2.jpg","R. das Creoulas, 268 - Graças, Recife - PE, 52011-270"], 
                ["Boi e Brasa","c3.jpg","Av. Caxangá, 4435 - Várzea, Recife - PE, 50670-000"]];
    foreach($buffets as list($buff, $images, $endereco)){  
        echo "<div>";     
        echo "<p>$buff</p><p>Endereço: $endereco</p>"; 
        echo "<img src='./img/".$images."' alt='Imagem: ".$buff."' width='300' height='300' />";
        echo "</div><hr/>";
    }    
    ?>

</section>
<footer>Copyright © LeoTech Informática Todos os Direitos Reservados 2022</footer>
</body>
</html>
