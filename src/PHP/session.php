<?php
    $id_parametro = isset($_GET['id']) ? $_GET['id'] : 0;
    #!isset($_SESSION['logado']) ||

    if ($_SESSION['id_user'] != $id_parametro) {
        header("Location: /LoginPage/src/PHP/login.php");
        session_destroy();
        exit;
    }

?>  