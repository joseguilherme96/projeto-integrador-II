let input = document.querySelectorAll("input");

input.forEach((campo) => {
    campo.addEventListener("focus", () => {
        campo.style.background = "lightgrey";
    })

    campo.addEventListener("blur", () => {
        campo.style.background = "white";
    })
    console.log(campo)
});

let select = document.querySelector("select");

select.addEventListener("focus", () => {
    select.style.background = "lightgrey";
})

select.addEventListener("blur", () => {
    select.style.background = "white";
})

let textarea = document.querySelector("textarea");

textarea.addEventListener("focus", () => {
    textarea.style.background = "lightgrey";
})

textarea.addEventListener("blur", () => {
    textarea.style.background = "white";
})

const ASSUNTOS_INFO = {
    cinema: {
        description:
            "Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos principais filmes exclusivos da plataforma streamming, entrevistas com os autores mais famosos dos filmes e filmes que foram inspirados na literatura.",
    },
    hqs: {
        description:
            "HQs e mangás estão muito bem representados na DarkSide Books. Títulos nacionais e internacionais fazem parte da linha DarkSide Graphic Novel.",
    },
    cosplay: {
        description:
            "Cosplay, uma abreviação de costume play do inglês, costume; traduzido como  fantasia  ou figurino, e play, traduzido como jogo ou dramatização, é uma atividade e arte performática em que os participantes chamados cosplayers usam fantasias e acessórios para representar um personagem específico.",
    },
    seriestv: {
        description:
            "Sabia tudo sobre series e TV",
    },
};

function renderAssuntoInfo(assunto) {

    const assuntoDescricao = document.querySelector("#assuntoDescricao");

    if (assunto in ASSUNTOS_INFO) {

        assuntoDescricao.textContent = ASSUNTOS_INFO[assunto].description;

    } else {

        assuntoDescricao.textContent = "Selecione um assunto para ver a descrição";

    }

}

const renderAssuntoInfoButton = document.querySelector("#assuntosSelect");

renderAssuntoInfoButton.addEventListener("change", (event) => {
    const assuntosSelect = document.querySelector("#assuntosSelect");
    const selectedAssunto = assuntosSelect.options[assuntosSelect.selectedIndex].value;
    renderAssuntoInfo(selectedAssunto)
});
