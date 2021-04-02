class Projeto {

       constructor(elemento) {

            this.elemento = elemento;

            this.curso = new cursoView('#newCurso')
       }


    adc(){

        return `
        
        <div class="curso" id="cursoo">
            <img src="../img/logo.png" alt="Logo" />   
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
                <button class="clic" onclick="proejto.clickou()" >ver</button>
            </div>
        </div>
        
        `

    }


}