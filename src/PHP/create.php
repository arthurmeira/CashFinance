<?php
    include_once('connect.php');
    include_once('var.php');

    $sql = "INSERT INTO usuarios(
        nome, 
        login, 
        email, 
        senha,
        fk_tipo
        ) 
    VALUES(    
        '$nome',
        '$login',
        '$email',
        '$senha',
        3
        )";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

?>