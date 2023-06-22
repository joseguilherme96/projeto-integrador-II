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
    <?php include "footer.php"?>