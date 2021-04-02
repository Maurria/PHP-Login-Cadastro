<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/curso.css">
<link rel="stylesheet" href="../css/projeto.css">

</head>
<body>    
<script src="../js/projeto.js"></script>
<script src="../js/cursoView.js"></script>
<script>
    let projeto = new Projeto();
    let cview = new cursoView();
</script>
    <div>
    <?php include ('menu.php'); ?>
    </div>
    <div class="desce">
        <div class="curso" id="cursoo">
            <img src="../img/logo.png" alt="Logo" />   
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
        <img src="../img/logo.png" alt="Logo" /> 
            <div class="curso-info">
                <h4>Curso Web</h4>
                <p>Prof. Sicrano Filho</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
        <img src="../img/logo.png" alt="Logo" />   
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
            <img src="../img/logo.png" alt="Logo" /> 
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
            <img src="../img/logo.png" alt="Logo" />    
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
            <img src="../img/logo.png" alt="Logo" />    
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
            <img src="../img/logo.png" alt="Logo" />    
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
            <img src="../img/logo.png" alt="Logo" />    
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
            <img src="../img/logo.png" alt="Logo" />   
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
               
            </div>
        </div>
        <div id="newCurso"></div>
        <button class="clic" onclick="cview.adcCurso()" >ver</button>
        
    </div>
    
</body>
</html>