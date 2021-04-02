<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/projeto.css">
    <title>menu</title>

    <script>
        window.onhashchange = function(e) {
            const oldURL = e.oldURL.split('#')[1]
            const newURL = e.newURL.split('#')[1]
            console.log(oldURL, newURL)
            const oldMenu = document.querySelectorAll(`.menu a[href='#${oldURL}']`)
            const newMenu = document.querySelectorAll(`.menu a[href='#${newURL}']`)
            oldMenu && oldMenu.classList.remove('selected')
            newMenu && newMenu.classList.add('selected')
        }
    </script>
    
</head>
<body>
<header class="cabecalho">
        <div class="logo">
            <img src="../img/logo.png"/>
        </div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="http://localhost/aula7/page/index.php">Início</a>
                </li>
                <li>
                    <a href="http://localhost/aula7/page/Curso.php">Cursos</a>
                </li>
                <li>
                    <a href="http://localhost/aula7/page/Sobre.php">Sobre</a>
                </li>
            </ul>
        </nav>   
        <aside class="autenticacao">
            <a href="http://localhost/aula7/page/login.php" class="L">Login</a>
            <a href="http://localhost/aula7/page/Registro.php" class="botao destaque">Registrar</a>
        </aside>
</header> 
</body>
</html>




