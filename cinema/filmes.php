<!--Validado na w3-->
<?php $title = "Filmes";?>
<?php include "../header.php"?>

    <div class="container">
      <nav class="navbar navbar-expand-lg bg-light">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="../index.php" class="nav-link cor-letra">Home / </a></li>
          <li class="nav-item"><a href="index.php" class="nav-link cor-letra">Cinema / </a></li>
          <li class="nav-item"><a href="filmes.php" class="nav-link cor-letra">Filmes</a></li>
        </ul>
      </nav>

      <?php include "../barra-de-pesquisa.php";?>

      <section class="row text-center" id="cimema">
        <h2 class="cor-letra text-center">CINEMA</h2>
        <article class="row justify-content-center">
          <h2 class="cor-letra text-start">Indiana Jones</h2>
          <a href="noticia-filme.php?cod=1">
            <picture>
              <source srcset="img/banner-cinema.jpg" class="img-fluid" media="(min-width:992px)">
              <img src="img/indiana-jones.jpg" class="img-fluid" alt="Banner Cinema">
            </picture>
            <p class="d-none d-lg-block">Fonte imagem em https://www.nerdview.com.br/2022/12/asista-ao-trailer-oficial-de-indiana.html</p>
          </a>
          <p class="text-start">Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino</p> 
          <a class="col-12 text-end" href="noticia-filme.php?cod=1">Ler Mais</a>
          <i class="bi bi-circle cor-letra col-1"></i>
          <i class="bi bi-circle cor-letra col-1" ></i>
          <i class="bi bi-circle cor-letra col-1"></i>
        </article>
      </section>
      <section class="row py-2">
        <h2>Noticias</h2>
        <article class="col-12 col-sm-6 col-lg-6">
          <figure>
            <img src="img/filmes/banner-marvel-menor.jpg" alt="Capa de Filmes">
            <figcaption class="d-none">Cena do filme da Marvel</figcaption>
          </figure>
          <hgroup>
            <h4 class="cor-letra">CCXP22: painel do Marvel Studios promete um 2023 cheio de despedidas</h4>
            <p class="cor-letra-D2D2D2">Apresentação do estúdio no Palco Thunder mostrou prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3</p>
          </hgroup>
          <p>Por <a href="../autores.php?#nicogarofalo">NICO GARÓFALO</a><time datetime="2022-12-01">01/12/2022</time> </p><!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
          <p>Como não podia deixar de ser, o painel do Marvel Studios no Palco Thunder by Cinemark Club na CCXP22 contou com muita alegria e energia do público, que conseguiu assistir às novidades trazidas por Kevin Feige para os fãs brasileiros. Mas, pelo que as novas prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3 deram a entender, 2023 não vai ser nem um pouco alegre</p>
          <a href="noticia-filme.php?cod=2" class="d-block text-end">Ler Mais</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-6">
          <img src="img/filmes/filme-the-last-of-us-menor.jpg" alt="Capa de Filmes">
          <hgroup>
            <h4 class="cor-letra">The Last of Us ganha trailer inédito e emocionante na CCXP22</h4>
            <p class="cor-letra-D2D2D2">Série estreia na HBO Max em 15 de janeiro</p>
          </hgroup>
          <p>Por <a href="../autores.php?#giovannabreve">GIOVANNA BREVE</a> E <a href="../autores.php?#nicogarofalo">NICOLAOS GARÓFAL</a><time datetime="2022-12-03">03/12/2022</time></p><!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
          <p>The Last of Us, série da HBO Max que adapta o game, ganhou um novo trailer na CCXP22 no Palco Thunder by Cinemark Club. A novidade veio com a presença do elenco de estrelas Pedro Pascal, Bella Ramsey, Gabriel Luna, Merle Dandrigge e os produtores execultivos Craig Mazin e Neil Druckmann</p>
          <a class="text-end d-block cor-letra" href="noticia-filme.php?cod=3">Ler Mais</a>
        </article>
      </section>
    </div>
<?php include "../footer.php"?>
