<?php

     include("../db.php");
     $error = "";
     if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        

        $veriEmail = mysqli_query($mysqli_connection, "SELECT email FROM usuario WHERE email = '$email' AND senha = '$pass'");
            if(mysqli_num_rows($veriEmail) > 0){
               
                header("Location: http://localhost/aula7/page/pósLogar.php");
             } else {
                
                $error = "<h2 style='color:red'>Senha ou email Errado</h2>";
        }
     }



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
</head>
<body>
<?php include ('menu.php'); ?>
<div class="desce">
    <h1 style="color: black">Login</h1>
    <?php echo $error; ?>
    <div class="container">  
        <form class="fo" method="POST">
            <table width="50%">
                <tr>
                    <td class="td">Email:</td>
                        <td><input class="input" type="email" name="email">
                    </tr>
                <tr>
                    <td class="td">Senha:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
            </table>
            <input class="botao" type="submit" name="login" value="Logar" style="width: 50%">       
        </form>
        </div>
        <h3>Você não tem conta? <a href="http://localhost/aula7/page/Registro.php">Click aqui</a</h3>
    </div>
</body>
</html>