<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>/estilos/estilos.css">
    <title>Página de cadastro</title>
</head>
<body>
    <header>
        <?php echo view('header') ?>
    </header>

    <main>
        <h1>Bem vindo ao Feed!</h1>
        <p>Encontre os melhores filmes em sessões perto da sua casa!</p>
        <img src="<?php echo base_url()?>imagens/cinema.jpg" width="1000rem">
    </main>

    <footer class="fixed-bottom">
        <?php echo view('footer') ?>
    </footer>
</body>
</html>
<style>
    main{
        text-align: center;
    }
</style>