<!--Validado na w3-->
<?php $title = "Contato";?>
<?php include "header.php"?>
    <main class="container my-5">
        <section>
            <form class="row justify-content-end"  action="contato.php" method="POST">
                <h2 class="cor-letra">Fale Conosco</h2>
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome" required>
                <label>E-mail</label>
                <input type="text" class="form-control" placeholder="example@hotmail.com" required>
                <label>Mensagem</label>
                <textarea class="form-control" placeholder="Mensagem" required></textarea>
                <label for="assuntosSelect">Qual assunto que você gostaria de receber ?</label>
                <select id="assuntosSelect">
                    <option>Selecione um assunto : </option>
                    <option value="cinema">Cinema</option>
                    <option value="hqs">HQS</option>
                    <option value="cosplay">Cosplay</option>
                    <option value="seriestv">Series e Tv</option>
                </select>
                <hgroup role="assunto" id="assuntoInfo" aria-live="polite">
                    <h2 id="planetTitle">Não foi selecionado nenhum assunto</h2>
                    <p id="assuntoDescricao">Selecione um assunto para ver sua descrição</p>
                </hgroup>
                <p>
                    <small>
                        Referencias
                        <a href="https://en.wikipedia.org/wiki/Solar_System"></a>
                    <small>
                </p>
                <input type="submit" class="btn col-3 col-lg-2 my-5" style="background-color:#E03616" value="Enviar Mensagem" accsesskey="e">
            </form>
        </section>
    </main>
    <script>
        const ASSUNTOS_INFO = {

            cinema:{
                title:"Cinema",
                description: 
                "Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos principais filmes exclusivos da plataforma streamming, entrevistas com os autores mais famosos dos filmes e filmes que foram inspirados na literatura.",
            },

            hqs:{

                title: "HQS",
                description:
                "HQs e mangás estão muito bem representados na DarkSide Books. Títulos nacionais e internacionais fazem parte da linha DarkSide Graphic Novel.",

            }

            cosplay:{

                title:"cosplay",
                description:
                "Cosplay, uma abreviação de costume play do inglês, costume; traduzido como  fantasia  ou figurino, e play, traduzido como jogo ou dramatização, é uma atividade e arte performática em que os participantes chamados cosplayers usam fantasias e acessórios para representar um personagem específico.",
            
            }

            seriestv:{
                title:"seriestv"
                description:
                "Sabia tudo sobre series e TV",
            },
        
        };

        function renderAssuntoInfo(assunto){

            const assuntoTitle = document.querySelector("assuntoTitle");
            const assuntoDescription = document.query

        }
    </script>
    <?php include "footer.php"?>