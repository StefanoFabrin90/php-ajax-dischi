<?php
require_once __DIR__ . '/partials/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpRepo</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- hedaer -->
    <header>
        <h1>LOGO</h1>
    </header>

    <!-- main -->
    <main>
        <section class="container">
            <?php 
            foreach($database as $item) : ?>
                <div class="card">
                    <div class="poster">
                        <img src= <?php echo "{$item['poster']}"; ?> alt="poster">
                    </div>
                    <div class="text">
                        <h3> <?php echo "{$item['title']}"; ?></h3>
                        <p> <?php echo "{$item['author']}"; ?></p>
                        <p> <?php echo "{$item['year']}"; ?></p>
                        <p> <?php echo "{$item['genre']}"; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>