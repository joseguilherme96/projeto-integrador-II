<!--Validado na w3-->
<?php $title = "Contato";?>
<?php include "header.php"?>
    <main class="container my-5">
        <section>
            <form class="row justify-content-end"  action="#" method="POST">
                <h2 class="cor-letra">Fale Conosco</h2>
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome">
                <label>E-mail</label>
                <input type="text" class="form-control" placeholder="example@hotmail.com">
                <label>Mensagem</label>
                <textarea class="form-control" placeholder="Mensagem"></textarea>
                <a class="btn col-3 col-lg-2 my-5" style="background-color:#E03616">Enviar Mensagem</a>
            </form>
        </section>
    </main>
    <?php include "footer.php"?>