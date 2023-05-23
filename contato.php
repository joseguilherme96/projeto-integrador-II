<!--Validado na w3-->
<?php $title = "Contato";?>
<?php include "header.php"?>
    <main class="container my-5">
        <form class="row justify-content-end"  action="contato.php" method="POST"> 
            <fieldset>
                <legend class="cor-letra">Fale Conosco</legend>
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" id="nome" required>
                <label for="email">E-mail</label>
                <input type="text" class="form-control" placeholder="example@hotmail.com" id="email" required>
                <label for="assuntosSelect">Qual assunto que você gostaria de receber ?</label>
            </fieldset>
            <fieldset>
                <legend class="cor-letra">Assuntos</legend>
                <select id="assuntosSelect" aria-controls="assuntoInfo">
                    <option value="">Selecione um assunto : </option>
                    <option value="cinema">Cinema</option>
                    <option value="hqs">HQS</option>
                    <option value="cosplay">Cosplay</option>
                    <option value="seriestv">Series e Tv</option>
                </select>
                <div role="region" id="assuntoInfo" aria-live="polite">
                    <p id="assuntoDescricao">Selecione um assunto para ver sua descrição</p>
                </div>
            </fieldset>
            <fieldset>
                <legend class="cor-letra">Mensagem</legend>
                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" placeholder="Mensagem" id="mensagem" required></textarea>
                <input type="submit" class="btn col-3 col-lg-2 my-5" style="background-color:#E03616" value="Enviar Mensagem">
            </fieldset>
        </form>
    </main>
    <script>
        const ASSUNTOS_INFO = {

            cinema:{
                description: 
                "Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos principais filmes exclusivos da plataforma streamming, entrevistas com os autores mais famosos dos filmes e filmes que foram inspirados na literatura.",
            },

            hqs:{
                description:
                "HQs e mangás estão muito bem representados na DarkSide Books. Títulos nacionais e internacionais fazem parte da linha DarkSide Graphic Novel.",
            },

            cosplay:{
                description:
                "Cosplay, uma abreviação de costume play do inglês, costume; traduzido como  fantasia  ou figurino, e play, traduzido como jogo ou dramatização, é uma atividade e arte performática em que os participantes chamados cosplayers usam fantasias e acessórios para representar um personagem específico.",
            },

            seriestv:{
                description:
                "Sabia tudo sobre series e TV",
            },
        
        };

        function renderAssuntoInfo(assunto){

            const assuntoDescricao = document.querySelector("#assuntoDescricao");

            if(assunto in ASSUNTOS_INFO){

                assuntoDescricao.textContent = ASSUNTOS_INFO[assunto].description;

            }else{

                assuntoDescricao.textContent = "Selecione um assunto para ver a descrição";

            }

        }

        const renderAssuntoInfoButton = document.querySelector("#assuntosSelect");

        renderAssuntoInfoButton.addEventListener("click",(event)=>{
            const assuntosSelect = document.querySelector("#assuntosSelect");
            const selectedAssunto = assuntosSelect.options[assuntosSelect.selectedIndex].value;
            renderAssuntoInfo(selectedAssunto)
        });
    </script>
    <?php include "footer.php"?>