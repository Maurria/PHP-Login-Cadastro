<?php include $_SERVER['DOCUMENT_ROOT']."/aula7/funcoes/php/logarBD.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/aula7/funcoes/php/registrarBD.php"; ?>

<?php 
    global $taLogado;
?>

<header class="cabecalho">
    <div class="logo">
        <img src="http://localhost/aula7/img/logo.png"/>
    </div>
    <nav class="menu">
        <ul>
            <li>
                <a href="http://localhost/aula7/page/inicio.php"> Início </a>
            </li>
            <li>
                <a href="http://localhost/aula7/page/Curso.php"> Cursos </a>
            </li>

            <?php if($taLogado) { ?>

                <li>
                    <a href="http://localhost/aula7/page/Favoritos.php"> Favoritos </a>
                </li>

            <?php } ?>
        </ul>
    </nav>   

    <?php

    if($taLogado) { ?>

        <aside class="autenticacao">
            <a href="http://localhost/aula7/page/inicio.php" class="botao destaque">Sair</a>
        </aside>
        

    <?php } else { ?>

        <aside class="autenticacao">
            <a href="http://localhost/aula7/page/login.php" class="L"> Login </a>
            <a href="http://localhost/aula7/page/Registro.php" class="botao destaque"> Registrar </a>
        </aside>

    <?php  }  ?>
</header> 
