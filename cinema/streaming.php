<!--Validado na w3-->
<?php $title = "Streaming";?>
<?php include "../header.php"?>

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="../index.php" class="cor-letra" tabindex="10">Home / </a></li>
        <li class="nav-item"><a href="index.php" class="cor-letra" tabindex="11">Cinema / </a></li>
        <li class="nav-item"><a href="filmes.php" class="cor-letra" tabindex="12">Streaming </a></li>
      </ul>
    </nav>

    <?php include "../barra-de-pesquisa.php"; ?>

    <section class="row justify-content-center">
      <hgroup class=" col-12 text-center" tabindex="15">
        <h2 class="cor-letra" id="streaming">STREAMING</h2>
        <p>Noticias exclusivas de filmes das principais plataformas de Streaming </p>
      </hgroup>
      <figure class="col-12 col-sm-4 col-lg-4 text-center" tabindex="16"><!--col <= 576px; col-sm >=576px col-lg >=992px -->
        <img src="img/prime-video.png " class="img-fluid border" alt="Aqui temos um logo da plataforma streaming Prime Video">
        <figcaption class="row justify-content-center">
          <a href="streaming.php" class="text-decoration-none text-light cor-botao col-5 text-center" tabindex="17" id="prime-video" aria-labelledby="desc-opcoes-conteudo prime-video">PRIME VIDEO</a>
        </figcaption>
      </figure>
      <figure class="col-12 col-sm-4 col-lg-4 text-center" tabindex="18">
        <img src="img/netflix.png" class="img-fluid border" alt="Aqui temos um logo da plataforma streaming Netflix">
        <figcaption class="row justify-content-center">
          <a href="streaming.php" class=" cor-botao col-5 col-lg-5 text-center col-sm-10 m-1 text-decoration-none text-light" tabindex="19" id="netflix" aria-labelledby="desc-opcoes-conteudo netflix">NETFLIX</a>
        </figcaption>
      </figure>
      <figure class="col-12 col-sm-4 col-lg-4 border text-center" tabindex="20">
        <img src="img/disney-plus.png" class="img-fluid border " alt="Aqui temos um logo da plataforma streaming Disney Plus">
        <figcaption class="row justify-content-center">
          <a href="streaming.php" class=" cor-botao col-5 col-lg-5 text-center col-sm-10 m-1 text-decoration-none text-light" tabindex="21" id="disneyplus" aria-labelledby="desc-opcoes-conteudo disneyplus">DISNEY PLUS</a>
        </figcaption>
      </figure>
    </section>
    <section class="row">
      <h2 class="cor-letra" tabindex="22" >Noticias Filmes de Streaming</h2>
      <article class="col-12 col-sm-6 col-lg-6">
        <figure class="text-center" tabindex="23">
          <img src="img/streaming/deep.png" class="img-fluid" alt="Capa do Filme">
          <figcaption>Cena filme deep</figcaption>
        </figure>
        <hgroup class="row" tabindex="24">
          <h4 class="col-8 cor-letra">Como thriller erótico, Águas Profundas é uma ótima comédia de costumes </h4>
          <p class="col-4 border text-light cor-botao text-center mt-4 mb-5">PRIME VIDEO</p>
          <p class="cor-letra">Adrian Lyne está menos interessado em cenas de sexo do que está em tirar sarro dos ricos</p>
        </hgroup>
        <p>Por <a href="../autores.php?#caiocolleti" tabindex="25">CAIO COLLETI</a><time datetime="2022-10-28">28/10/2022</time></p>
        <p tabindex="26">Águas Profundas era uma proposição bizarra desde o começo: um thriller erótico inspirado por um livro da autora de Carol (Patricia Highsmith), escrito pelos roteiristas de Mais Estranho que a Ficção (Zach Helm) e Euphoria (Sam Levinson), dirigido pelo responsável por Proposta Indecente e Atração Fatal (Adrian Lyne) e protagonizado pelo (já ex-)casal da vida real Ben Affleck e Ana de Armas. Como diria Natasha Lyonne naquela cena de Boneca Russa eternizada em memes no Twitter: “Que conceito”.</p>
        <a href="noticia-filme.php?cod=4#noticia" class="d-block text-end" tabindex="27">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-6">
        <figure class="p-1" tabindex="28">
          <img src="img/streaming/agente-oculto.jpg" class="img-fluid" alt="Capa do Filme">
          <figcaption>Cena : Agente Oculto</figcaption>
        </figure>
        <hgroup class="row" tabindex="29">
          <h4 class="col-8 cor-letra">Netflix divulga imagens e data de estreia de Agente Oculto</h4>
          <p class="col-4 border text-light cor-botao text-center mt-4 mb-5 ">NETFLIX</p>
          <p class="cor-letra">Filme é estrelado por Ryan Gosling, Ana de Armas, Chris Evans e dirigido pelos irmãos Russo</p>
        </hgroup>
        <p>Por <a href="../autores.php?#omelete" tabindex="30">omelete</a><time datetime="2022-04-26">26/04/2022</time></p>
        <p tabindex="31">Na trama, Ryan Gosling é o agente da CIA Court Gentry, também conhecido como Agente Oculto e Sierra Six, enquanto Chris Evans é seu adversário psicopata Lloyd Hansen. O longa é baseado no livro The Gray Man, de Mark Greaney.</p>
        <div class="text-end">
          <a href="noticia-filme.php?cod=5#noticia" tabindex="32">Ler Mais</a>
        </div>
      </article>
    </section>

<?php 
include "../desc-detalhada-para-deficiente-visual.php" ?>

  </div>
  <?php include "../footer.php"; ?>