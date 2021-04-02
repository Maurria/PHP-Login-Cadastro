<?php

    include("../db.php");
    $error = "";
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
        }else if(strlen($apelido) <6){
            $error = "<h2 style='color:red'>apelido muito pequeno</h2>";
        }else if(strlen($pass) < 6){
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
            }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
   
    <link rel="stylesheet" href="../css/registro.css">

</head>
<body>

<?php include ('menu.php'); ?>
<div  style="text-align:center" class="desce">
<h1>Registre-se</h1>
    <?php echo $error; ?>    
    <div class="container">
        <form class="fo" method="POST">
            <table>
                <tr class="tr">
                    <td>Nome:</td>
                    <td><input type="name" name="nome"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Apelido:</td>
                    <td><input type="name" name="apelido"></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>confirme a Senha:</td>
                    <td><input type="password" name="cpass"></td>
                </tr>
            </table>
                <input class="botao" type="submit" name="registrar" value="Registrar">
        </form>
                
    </div>
    <h3>Voê já tem conta? <a href="http://localhost/aula7/page/login.php">Click aqui</a</h3>
</div>
</body>
</html>