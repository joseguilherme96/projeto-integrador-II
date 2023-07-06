/*Script responsável por atribuir o atributo tabindex e seu valor nas tags do rodapé e no campo pesquisa*/
let paginas = {
    0:{
        pagina:'index.php', //Prencher nome da pagina
        lastTabIndex:55,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:11,
        tabIndexBtnPesquisa:12
    },
    1:{
        pagina:'indexcinema.php',
        lastTabIndex:78,
        tabIndexCampoPesquisa:12,
        tabIndexBtnPesquisar : 13
    },
    2:{
        pagina:'filmes.php',
        lastTabIndex:40,
        tabIndexCampoPesquisa:13,
        tabIndexBtnPesquisar : 14
    },
    3:{
        pagina:'streaming.php', //Prencher nome da pagina
        lastTabIndex:32,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:13,
        tabIndexBtnPesquisar : 14
    },
    4:{
        pagina:'literatura.php', //Prencher nome da pagina
        lastTabIndex:35,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:13,
        tabIndexBtnPesquisar : 14
    },
    5:{
        pagina:'entrevistas.php', //Prencher nome da pagina
        lastTabIndex:31,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:13,
        tabIndexBtnPesquisar : 14
    },
    6:{
        pagina:'artigo-literatura.php', //Prencher nome da pagina
        lastTabIndex:51,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:14,
        tabIndexBtnPesquisar : 15
    },
    7:{
        pagina:'atores.php', //Prencher nome da pagina
        lastTabIndex:25,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:1000,
        tabIndexBtnPesquisar :1000
    },

    8:{
        pagina:'home.php', //Prencher nome da pagina
        lastTabIndex:32,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:1000,
        tabIndexBtnPesquisar :1000
    },

    9:{
        pagina:'atores.php', //Prencher nome da pagina
        lastTabIndex:25,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:1000,
        tabIndexBtnPesquisar :1000
    },
    10:{
        pagina:'lancamentos.php', //Prencher nome da pagina
        lastTabIndex:21,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:1000,
        tabIndexBtnPesquisar :1000
    },
    11:{
        pagina:'criticas.php', //Prencher nome da pagina
        lastTabIndex:16,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:1000,
        tabIndexBtnPesquisar :1000
    },
    12:{
        pagina:'noticias.php', //Prencher nome da pagina
        lastTabIndex:14,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:1000,
        tabIndexBtnPesquisar :1000
    },
    13:{
        pagina:'resenhas.php', //Prencher nome da pagina
        lastTabIndex:20,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:1000,
        tabIndexBtnPesquisar :1000
    },
    14:{
        pagina:'entrevista-com-autores.php', //Prencher nome da pagina
        lastTabIndex:28,  //Alterar de 0 para o ultimo valor do tabindex adicionado na pagina
        tabIndexCampoPesquisa:14,
        tabIndexBtnPesquisar :15
    }
    


}

//Pega a url
let pagina = window.location.href.split("/");

// Localiza o nome do arquivo
let lastIndex = pagina.length - 1

let arquivo = pagina[lastIndex].split("?")
arquivo = arquivo[0]



if(arquivo == "literatura.php" || arquivo == "indexcinema.php" || arquivo == "filmes.php" || 
arquivo == "streaming.php" || arquivo == "entrevistas.php" || arquivo == "index.php" || 
arquivo == "noticia-filme.php" || arquivo == "artigo-literatura.php" || arquivo == "atores.php" 
|| arquivo == "home.php" || arquivo == "lancamentos.php" || arquivo == "criticas.php" || arquivo == "noticias.php"
|| arquivo == "resenhas.php"){
    
    // Verifica se a pagina atual corresponde a alguma pagina do objeto paginas
    let lastTabIndex =-1;
    for(let chave in paginas){


        let dadosPaginas = Object.values(paginas[chave])
        console.log(dadosPaginas)
        // Se a pagina atual for igual alguma pagina salva no objeto pagina
        if(dadosPaginas[0] == arquivo){
            lastTabIndex = dadosPaginas[1] // Pega o ultimo tabIndex da pagina atual
            tabIndexCampoPesquisa = dadosPaginas[2]
            tabIndexBtnPesquisa = dadosPaginas[3]
            
        }

    }
   
    if(tabIndexCampoPesquisa !== 1000){
        
    //Atribui o atributo tabindex e seu valor para barra de pesquisa
    let campoPesquisa = document.querySelector("#campoPesquisa");
    campoPesquisa.setAttribute("tabindex",tabIndexCampoPesquisa);

    //Atribui o atributo tabindex e seu valor para o btn pesquisa
    let btnPesquisar = document.querySelector("#btnPesquisar");
    btnPesquisar.setAttribute("tabindex",tabIndexBtnPesquisa)

    }

    let listaClassesUL = ['.cinemaFooter','.hqsFooter','.cosplayFooter','.seriestvFooter']
    let index = 1

    listaClassesUL.forEach((classe)=>{
        //Seleciona a lista com a classe .cinemaFooter
        let cinemaFooter = document.querySelector(""+classe+"");

        //Pelas todas as tags <li>
        let lista = cinemaFooter.children;

        //Atribui o atributo tabindex nas tags <li> e seu valor de acordo com o ultimo tabindex da pagina + 1 
        for(let i = 0; i< lista.length;i++){

            lista[i].setAttribute("tabindex",lastTabIndex + index)
            index+=1

        }
    })

    //Atribui o atributo tabindex para tag com id #participantes e o valor de acordo com o ultimo tabindex adicionado + 1 .
    let tituloParticipantes = document.querySelector("#participantes")
    tituloParticipantes.setAttribute("tabindex",lastTabIndex + index)
    index+=1

    // Atribui tabindex para as tags com a classe .fotoparticipante
    let fotoParticipantes = document.querySelectorAll(".fotoParticipante");

    fotoParticipantes.forEach((fotoParticipante)=>{
        
        fotoParticipante.setAttribute("tabindex",lastTabIndex + index)
        index+=1

    })

    // Atribui tabindex para a tag com a classe .frase
    let frase = document.querySelector("#fraseFooter");
    frase.setAttribute("tabindex",lastTabIndex + index)
    index+=1

    //Atribui foco no primeiro icone da pagina
    var logo = document.querySelector("#home");
    logo.focus();

    //Implementar atributo tabindex nas tags das paginas artigo-literatura.php/noticia-filme.php
    let contIndex = 16
    let elementos = document.querySelectorAll(".tabindex");

    elementos.forEach((elemento)=>{
        elemento.setAttribute("tabindex",+contIndex)
        contIndex +=1
    })
}

//Mantém focos na seção de acordo com o autor escolhido na pagina autores.php
if(window.location.href.indexOf("autores.php") !== -1 ){

    if(window.location.href.indexOf("#") !==-1){
        
        let idAutor = window.location.href.split("#")
        let indexIdAutor = idAutor.length - 1
        let sectionAutor = document.querySelector("#"+idAutor[indexIdAutor]+"")
        sectionAutor.focus();

    }else{

        let sectionAutor = document.querySelector("#home")
        sectionAutor.focus();
    }
    

    
}

