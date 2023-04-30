<?php $title = "Streaming";?>
<?php include "../header.php"?>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="../index.php" class="cor-letra">Home / </a></li>
        <li class="nav-item"><a href="index.php" class="cor-letra">Cinema / </a></li>
        <li class="nav-item"><a href="filmes.php" class="cor-letra">Streaming </a></li>
      </ul>
    </nav>
    <?php include "../barra-de-pesquisa.php"; ?>
    <section class="row justify-content-center">
      <article class="row justify-content-center">
        <hgroup class=" col-12 text-center cor-letra">
          <h2>STREAMING</h2>
          <h3>Noticias exclusivas de filmes das principais plataformas de Streaming </h3>
        </hgroup>
        <figure class="col-12 col-sm-4 col-lg-4 text-center"><!--col <= 576px; col-sm >=576px col-lg >=992px -->
          <img src="img/prime-video.png " class="img-fluid border" alt="Capa Prime Video">
          <figcaption class="row p-5">
            <a href="streaming.php" class="text-decoration-none text-light text-center border cor-botao">PRIME VIDEO</a>
          </figcaption>
        </figure>
        <figure class="col-12 col-sm-4 col-lg-4 text-center">
          <img src="img/netflix.png" class="img-fluid border" alt="Capa Netflix">
          <figcaption class="row p-5">
            <a href="streaming.php" class="text-decoration-none text-light cor-botao">NETFLIX</a>
          </figcaption>
        </figure>
        <figure class="col-12 col-sm-4 col-lg-4 text-center">
          <img src="img/disney-plus.png" class="img-fluid border " alt="Capa Disney Plus">
          <figcaption class="row p-5">
            <a href="streaming.php" class="text-decoration-none text-light cor-botao">DISNEY PLUS</a>
          </figcaption>
        </figure>
      </article>
    </section>
    <section class="row">
      <article class="col-12 col-sm-6 col-lg-6">
        <figure class="text-center">
          <img src="img/streaming/deep.png" class="img-fluid" alt="Capa do Filme">
          <figcaption class="d-none">Capa do filme deep</figcaption>
        </figure>
        <hgroup class="row">
          <h4 class="col-8 cor-letra">Como thriller erótico, Águas Profundas é uma ótima comédia de costumes </h4>
          <h6 class="col-4 border text-light cor-botao text-center mt-4 mb-5">PRIME VIDEO</h6>
          <h5 class="cor-letra">Adrian Lyne está menos interessado em cenas de sexo do que está em tirar sarro dos ricos</h5>
        </hgroup>
        <p>Por <a href="../autores.php?#caiocolleti">CAIO COLLETI</a><time datetime="2022-10-28">28/10/2022</time></p>
        <p>Águas Profundas era uma proposição bizarra desde o começo: um thriller erótico inspirado por um livro da autora de Carol (Patricia Highsmith), escrito pelos roteiristas de Mais Estranho que a Ficção (Zach Helm) e Euphoria (Sam Levinson), dirigido pelo responsável por Proposta Indecente e Atração Fatal (Adrian Lyne) e protagonizado pelo (já ex-)casal da vida real Ben Affleck e Ana de Armas. Como diria Natasha Lyonne naquela cena de Boneca Russa eternizada em memes no Twitter: “Que conceito”.</p>
        <a href="noticia-filme.php?cod=4" class="d-block text-end">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-6">
        <figure class="p-1">
          <img src="img/streaming/agente-oculto.jpg" class="img-fluid" alt="Capa do Filme">
        </figure>
        <hgroup class="row">
          <h4 class="col-8 cor-letra">Netflix divulga imagens e data de estreia de Agente Oculto</h4>
          <h6 class="col-4 border text-light cor-botao text-center mt-4 mb-5 ">NETFLIX</h6>
          <h5 class="cor-letra">Filme é estrelado por Ryan Gosling, Ana de Armas, Chris Evans e dirigido pelos irmãos Russo</h5>
        </hgroup>
        <p>Por <a href="../autores.php?#omelete">omelete</a><time datetime="2022-04-26">26/04/2022</time></p>
        <p>Na trama, Ryan Gosling é o agente da CIA Court Gentry, também conhecido como Agente Oculto e Sierra Six, enquanto Chris Evans é seu adversário psicopata Lloyd Hansen. O longa é baseado no livro The Gray Man, de Mark Greaney.</p>
        <div class="text-end">
          <a href="noticia-filme.php?cod=5">Ler Mais</a>
        </div>
      </article>
    </section>
  </div>
  <?php include "../footer.php"; ?>