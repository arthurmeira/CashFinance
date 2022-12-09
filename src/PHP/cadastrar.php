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
            <h1>Cash<span>Finance</span></h1>
            <div class="link">
                <a href="#"><span>/</span>github</a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <div id="erro-login-email">
                <h4>ATENÇÃO:</h4>
                <span>E-mail ou Login já cadastrados!</span>
            </div>

            <div class="card">
                <form action="cadastrar.php" method="post">
                    <div class="content">
                        
                        <input type="text" name="nome_cadastro" placeholder="Nome" required><br>

                        
                        <input type="email" name="email_cadastro" placeholder="E-mail" id="email" required><br>

                        
                        <input type="text" name="login_cadastro" placeholder="Login" id="login" required><br>

                        
                        <input type="password" name="senha_cadastro" id="senha" placeholder="Senha" required><br>

                        
                        <input type="password" name="confirma_senha" id="confirmacao" placeholder="Confirmar senha" required><br>
                    

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

    <script>
                let erro = document.querySelector('#erro-login-email');
                let login = document.getElementById('login');
                login.style.borderBottom = '2px solid #FF7373';

                let email = document.getElementById('email');
                email.style.borderBottom = '2px solid #FF7373';
                setTimeout(function () { erro.style.display = 'none' }, 3000);
            </script>

        <?php
            $email = $_POST['email_cadastro'];
            $login = $_POST['login_cadastro'];
            
            $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE login = '$login' OR email = '$email'");
            $row = mysqli_fetch_array($sql); 

            if (isset($_POST['sbmt'])) {
                if (isset($row['login']) || isset($row['email'])) {
                    
                    if ($row['login'] == $login || $row['email'] == $email) {
                        echo "<script>alert('Login ou E-mail já cadastrados!')</script>";
                    } else if ($row['login'] !== $login && $row['email'] !== $email) {
                        include_once('create.php');
                        echo "<script>alert('Usuário cadastrado!')</script>";
                    }  
                } 
            }  

        ?>

</body>
</html>