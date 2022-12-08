<?php
    include_once("connect.php");
    session_start();
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" type="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@300&family=Press+Start+2P&family=Roboto+Mono:wght@300;700&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <header>
        <div class="top">
            <h1>login<span>Page</span></h1>
            <div class="link">
                <a href="#"><span>/</span>github</a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="card">
                <form action="cadastrar.php" method="post">
                    <div class="content">
                        
                        <input type="text" name="nome_cadastro" placeholder="Nome" required><br>

                        
                        <input type="email" name="email_cadastro" placeholder="E-mail" required><br>

                        
                        <input type="text" name="login_cadastro" placeholder="Login" required><br>

                        
                        <input type="password" name="senha_cadastro" placeholder="Senha" required><br>

                        
                        <input type="password" name="confirma_senha" placeholder="Confirmar senha" required><br>
                    

                        <div class="bottom">
                        <div class="cadastrar">
                                <a href="Login.php">Login</a>
                            </div>    
                            <div class="enviar">
                                <input type="submit" value="Cadastrar" name="sbmt">
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php
        include_once('var.php');        
        if (isset($_POST['sbmt'])) {
            include_once('create.php');
            echo "<script>alert('Usuário adicionado com súcesso!')</script>";
        }   
    ?>

</body>
</html>