<?php
include 'array.php';

?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restaurante Dona Rita</title>
 </head>
 <body>
    
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="">
        </div>

        <nav class="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">CONTATO</a></li>
                <li><a href="#">SOBRE O RESTAURANTE</a></li>
            </ul>
        </nav>
    </header>

    <section class="marmitas">
        <h1>Conheça nossas marmitas.</h1>
        <div class="flex-content">
            <?php

                for($row = 0; $row < count($marmitas); $row++){


            ?>
            <div class="content">
                <img src="./img/<?=$marmitas[$row]['imagem'];?>" alt="">
                <h2><?=$marmitas[$row]['nome'];?></h2>
                <p><?= 'R$ '.number_format($marmitas[$row]['preco'], 2);?></p>
                <a href="marmita.php?id=<?=$marmitas[$row]['id']?>"><button>SAIBA MAIS</button></a>
            </div>

            <?php  }   ?>
        </div>
        
    </section>

    <footer>
        <div class="list">
            <ul>
                <li>Contato:</li>
                <li>(99) 99999-9999</li>
            </ul>
        </div>

        <div class="copy">
            <h3>&copy Feito por Guilherme Assis</h3>
        </div>

    </footer>

 </body>
 </html>