<!--Validado na w3-->
<?php $title = "Filmes";?>
<?php include "../header.php"?>

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="../index.php" class="nav-link cor-letra" tabindex="10">Home / </a></li>
        <li class="nav-item"><a href="indexcinema.php" class="nav-link cor-letra" tabindex="11">Cinema / </a></li>
        <li class="nav-item"><a href="filmes.php" class="nav-link cor-letra" tabindex="12">Filmes</a></li>
      </ul>
    </nav>

    <?php include "../barra-de-pesquisa.php";?>
    
    <section class="row text-center" id="cimema">
      <h2 class="cor-letra text-center" tabindex="15" id="filmes" >FILMES</h2>
      <article class="row justify-content-center">
        <h2 class="cor-letra text-start" tabindex="16" id="titulo-artigo-1">Indiana Jones</h2>
        <a href="noticia-filme.php?cod=1" tabindex="17">
          <picture>
            <source srcset="img/banner-cinema.jpg" class="img-fluid" media="(min-width:992px)" tabindex="18">
            <img src="img/indiana-jones.jpg" class="img-fluid" alt="Temos uma foto de capa do filme Indiana Jones" tabindex="19">
          </picture>
          <p class="d-none d-lg-block" tabindex="20">Fonte imagem em https://www.nerdview.com.br/2022/12/asista-ao-trailer-oficial-de-indiana.html</p>
        </a>
        <p class="text-start" tabindex="21">Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino</p> 
        <a class="col-12 text-end" href="noticia-filme.php?cod=1#noticia" tabindex="22" aria-labelledby="desc-ver-mais-topico titulo-artigo-1">Ler Mais</a>
        <i class="bi bi-circle cor-letra col-1"></i>
        <i class="bi bi-circle cor-letra col-1" ></i>
        <i class="bi bi-circle cor-letra col-1"></i>
      </article>
    </section>
    <section class="row py-2">
      <h2 tabindex="23">Noticias</h2>
      <article class="col-12 col-sm-6 col-lg-6">
        <figure>
          <img src="img/filmes/banner-marvel-menor.jpg" alt="Capa de Filmes" tabindex="24">
          <figcaption class="d-none" tabindex="25">Cena do filme da Marvel</figcaption>
        </figure>
        <hgroup tabindex="26">
          <h4 class="cor-letra"id="titulo-artigo-2">CCXP22: painel do Marvel Studios promete um 2023 cheio de despedidas</h4>
          <p class="cor-letra-D2D2D2">Apresentação do estúdio no Palco Thunder mostrou prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3</p>
        </hgroup>
        <p>Por <a href="../autores.php?#nicogarofalo" tabindex="28" aria-labelledby="desc-artigo autor-5 data-9">NICO GARÓFALO</a><time datetime="2022-12-01">01/12/2022</time></p><!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
        <p tabindex="30">Como não podia deixar de ser, o painel do Marvel Studios no Palco Thunder by Cinemark Club na CCXP22 contou com muita alegria e energia do público, que conseguiu assistir às novidades trazidas por Kevin Feige para os fãs brasileiros. Mas, pelo que as novas prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3 deram a entender, 2023 não vai ser nem um pouco alegre</p>
        <a href="noticia-filme.php?cod=2#noticia" class="d-block text-end" tabindex="31" aria-labelledby=" desc-ver-mais-topico titulo-artigo-2">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-6">
        <figure >
          <img src="img/filmes/filme-the-last-of-us-menor.jpg" alt="Capa de Filmes" tabindex="32">
          <figcaption tabindex="33">Autor The Last Us</figcaption>
        </figure>
        <hgroup tabindex="34">
          <h4 class="cor-letra" id="titulo-artigo-3">The Last of Us ganha trailer inédito e emocionante na CCXP22</h4>
          <p class="cor-letra-D2D2D2">Série estreia na HBO Max em 15 de janeiro</p>
        </hgroup>
        <p>Por <a href="../autores.php?#giovannabreve" tabindex="36" aria-labelledby="desc-artigo autor-3 dois-autores autor-5 data-4">GIOVANNA BREVE</a> E <a href="../autores.php?#nicogarofalo" tabindex="37" aria-labelledby="desc-artigo autor-3 dois-autores autor-5 data-4">NICOLAOS GARÓFALO</a>  <date datetime="2022-12-03" >03/12/2022</date></p><!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
        <p tabindex="39">The Last of Us, série da HBO Max que adapta o game, ganhou um novo trailer na CCXP22 no Palco Thunder by Cinemark Club. A novidade veio com a presença do elenco de estrelas Pedro Pascal, Bella Ramsey, Gabriel Luna, Merle Dandrigge e os produtores execultivos Craig Mazin e Neil Druckmann</p>
        <a class="text-end d-block cor-letra" href="noticia-filme.php?cod=3#noticia" tabindex="40" aria-labelledby="desc-ver-mais-topico titulo-artigo-3">Ler Mais</a>
      </article>
    </section>
    <?php include "../desc-detalhada-para-deficiente-visual.php" ?>
  </div>
  <?php include "../footer.php"?>
