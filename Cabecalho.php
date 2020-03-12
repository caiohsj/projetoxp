<?php require_once 'autoload.php';  ?>
<?php if(!isset($pesquisa)){$pesquisa = "";}?>

<html>
    <head>
        <title>XP</title>
        <!-- usar bootstrap online -->
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>

        <div class="container">
            <!-- título http://getbootstrap.com/components/#jumbotron -->
            <div class="jumbotron">
                <h1 class="text-center">Projeto XP</h1>
            </div>

<!-- Exibir usuário autenticado, opcao sair e menu completo -->
        
        <?php if(isset($_SESSION["cpf"])) : ?>
            <div class="text-right">
                    Usuário: <?=$_SESSION["nome"]; ?> (<?=$_SESSION["tipo"]; ?>)
                    <a href="ControllerLogin.php?op=logout">Sair</a>
            </div>

            <!-- navegação http://getbootstrap.com/components/#navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" 
                                data-toggle="collapse" 
                                data-target="#bs-example-navbar-collapse-1" 
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" 
                         id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php if($_SESSION["tipo"] == "proprietario"): ?>
                                <li><a href="ControllerUsuario.php?op=lista">Usuarios</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
            </nav>
        <?php endif ?>            