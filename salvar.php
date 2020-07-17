<?php
session_start();

    include_once("conexao.php");

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO cadastros (Email, Nome) VALUES ('$email', '$nome')";
    $result = mysqli_query($conn, $sql);
    
   
    
   

    


?>

