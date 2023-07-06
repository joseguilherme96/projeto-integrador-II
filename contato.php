<!--Validado na w3-->
<?php $title = "Contato";?>
<?php include "header.php"?>

    <main class="container my-5">
        <form class="row justify-content-end"  action="contato.php" method="POST"> 
            <fieldset>
                <legend class="cor-letra">Fale Conosco</legend>
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" id="nome" required accesskey="n" aria-describedby="nome-desc">
                <p id="nome-desc" hidden>
                    Digite seu nome para sabermos quem você é.
                </p>
                <label for="email">E-mail</label>
                <input type="text" class="form-control" placeholder="example@hotmail.com" id="email" required accesskey="i" aria-describedby="email-desc">
                <p id="email-desc" hidden>
                    Através do seu email que vamos manter contato com você.
                </p>
            </fieldset>
            <fieldset>
                <legend class="cor-letra">Assuntos</legend>
                <label for="assuntosSelect">Qual seu assunto predileto ?</label>
                <select id="assuntosSelect" aria-controls="assuntoInfo" required accesskey="s" aria-describedby="assuntoDescricao">
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
                <textarea class="form-control" placeholder="Mensagem" id="mensagem" required accesskey="m" aria-describedby="msg-desc"></textarea>
                <p id="msg-desc" hidden>
                    Escreva uma mesagem para a gente, será um prazer conversar com você.
                </p>
                <input type="submit" class="col-3 col-lg-2 my-5" value="Enviar Mensagem" accesskey="b" aria-describedby="btn-desc" aria-label="Enviar Mensagem">
                <p id="btn-desc" hidden>
                    Clique no botão para enviar os dados que você digitiou ou escolheu. Em breve entraremos em contato.
                </p>
            </fieldset>
        </form>
    </main>
    <?php include "footer.php"?>