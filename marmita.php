<?php
include 'array.php';

$id = $_GET['id'];
$posicao = $id - 1;
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

    <section class="detalhes">
        <div class="img">
            <img src="./img/<?= $marmitas[$posicao]['imagem']?>" alt="">
        </div>

        <h2><?= $marmitas[$posicao]['nome']?></h2>
        <h3>Tamanho: <?= $marmitas[$posicao]['tamanho']?></h3>

        <h4>Ingredientes: </h4>
        <?php
            foreach($marmitas[$posicao]['ingredientes'] as $ingrediente){
        ?>

        <span><?= $ingrediente ?>,</span>

        <?php
            }
        ?>

        <p>R$ <?= number_format($marmitas[$posicao]['preco'], 2)?></p>
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
