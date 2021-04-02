<?php
    include $_SERVER['DOCUMENT_ROOT']."/aula7/db.php";
    $error = "";

    
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $veriEmail = mysqli_query($mysqli_connection, "SELECT email FROM usuario WHERE email = '$email' AND senha = '$pass'");

        if(mysqli_num_rows($veriEmail) > 0){
            header("Location: http://localhost/aula7/page/inicio.php");
            $taLogado = true;
        }
        else{
            $error = "<h2 style='color:red'>Senha ou email Errado</h2>";
        }
    }
?>