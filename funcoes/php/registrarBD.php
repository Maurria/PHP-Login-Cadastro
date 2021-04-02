<?php

    include $_SERVER['DOCUMENT_ROOT']."/aula7/db.php";
    $error = "";
    $GLOBALS['taLogado'];

    if(isset($_POST['registrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $apelido = $_POST['apelido'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
   
        $verify = mysqli_query($mysqli_connection, "SELECT * FROM usuario WHERE email = '$email'");
        $verifyn = mysqli_query($mysqli_connection, "SELECT * FROM usuario WHERE apelido = '$apelido'");

        if(strlen($nome) < 3){
            $error = "<h2 style='color:red'>Nome muito pequeno</h2>";
        }else if(strlen($email) < 8){
            $error = "<h2 style='color:red'>Email muito pequeno</h2>";
        }else if(strlen($apelido) <3){
            $error = "<h2 style='color:red'>apelido muito pequeno</h2>";
        }else if(strlen($pass) < 5){
            $error = "<h2 style='color:red'>Senha muito pequeno</h2>";
        }else if($pass != $cpass){
            $error = "<h2 style='color:red'>Confirmação de senha errada</h2>";
        }else if(mysqli_num_rows($verify) > 0){
            $error = "<h2 style='color:red'>Email já registrado</h2>";
        }else if(mysqli_num_rows($verifyn) > 0){
            $error = "<h2 style='color:red'>Apelido já registrado</h2>";
        }else {
            mysqli_query($mysqli_connection, "INSERT INTO `usuario`(`nome`, `email`, `apelido`, `senha`) VALUES ('$nome','$email','$apelido','$pass')");
            $error = "<h2 style='color:green'>registrado com sucesso.</h2>";
            $taLogado = true;
            header("Location: http://localhost/aula7/page/inicio.php");
        }
    }
?>