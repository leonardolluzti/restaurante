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
    <h1>Faça sua Reserva</h1>
    <hr/>
    <form action="reservar.php" method="post">
        <label for name="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Qual seu Nome"/>
        <br />
        <br />
         
        <label for name="email">E-mail: </label>
        <input type="email" name="email" placeholder="Qual seu@email.com"/>
        <br />
        <br />
        
        <label for name="fone">Fone: </label>
         <input type="phone" name="fone" placeholder="Qual seu telefone (81) 9.9999-9999"/>
         <br />
         <br />
        
        <label for name="data">Data: </label> 
        <input type="date" name="data" />
        <br />
        <br />
        
        <label for name="local">Local: </label>
        <select name="local">
            <?php
            $locais = ["Caldinho do Marcelo", "Princesa Isabel", "Sovaj","Guaiamum Gigante", "Mustang", "Atlântico", "Portal do Derby", "Macunaima", "Boi e Brasa"];
            for($a=0; $a<=8; $a++){
                echo "<option value='".$locais[$a]."'>".$locais[$a]."</option>";
            }            
            ?>
        </select>
        <br />
        <br />
        

        <input type="submit" value="Reservar" />

    </form>
</section>
<footer>Copyright © LeoTech Informática Todos os Direitos Reservados 2022</footer>
</body>
</html>
