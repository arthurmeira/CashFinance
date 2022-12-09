<?php
    session_start();
    include_once("connect.php");
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
            <div class="card">
                <form action="login.php" method="post">
                    <div class="content">
                        <input type="text" name="login_cadastro" placeholder="Login" required><br>

                        <input type="password" name="senha_cadastro" placeholder="Senha" required><br>

                        <div class="bottom">
                        <div class="cadastrar">
                                <a href="cadastrar.php">Cadastrar</a>
                            </div>    
                            <div class="enviar">
                                <input type="submit" value="Login" name="sbmt">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php
        include_once("var.php");
        error_reporting(0);

        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE (login = '$login') and (senha = '$senha')");
        $row = mysqli_fetch_array($sql); 

        $id = $row['id_usuario'];

        if (isset($_POST['sbmt'])) {
            if ($row['login'] == $login AND $row['senha'] == $senha AND $row['fk_tipo'] == 2 OR $row['fk_tipo'] == 1) {
                //$_SESSION['logado'] = true;
                $_SESSION['id_user'] = $id;
                header("Location: /LoginPage/src/PHP/admin.php?id=$id");
            
            }  else if ($row['login'] == $login AND $row['senha'] == $senha AND $row['fk_tipo'] = 3) {
                //$_SESSION['logado'] = true;
                $_SESSION['id_user'] = $id;
                header("Location: /LoginPage/src/PHP/user.php?id=$id");
            }
        } 

    ?>

    <footer>
    </footer>
</body>
</html>