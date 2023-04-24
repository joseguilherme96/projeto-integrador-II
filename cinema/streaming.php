<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/tema.css">
</head>
<body>
  <?php include "../nav.php";?>
  <div class="container">
    <section class="row">
      <div class="col-12 cor-letra">
        <a href="../index.php" class="cor-letra">Home</a> / <a href="index.php" class="cor-letra">Cinema</a> / <a href="filmes.php" class="cor-letra">Streaming</a> 
      </div>
    </section>
    <?php include "../barra-de-pesquisa.php";?>
    <section class="row justify-content-center">
      <article class="row ">
        <hgroup class=" col-12 text-center">
          <h2 class="cor-letra">STREAMING</h2>
          <h3>Noticias exclusivas de filmes das principais plataformas de Streaming </h3>
        </hgroup>
        <figure class="col-12 col-sm-4 col-lg-4"><!--col <= 576px; col-sm >=576px col-lg >=992px -->
          <img src="img/prime-video.png " class="img-fluid border" alt="Capa Prime Video">
          <figcaption class="cor-botao col-5 col-lg-5 text-center col-sm-10 m-1">
                <a href="streaming.php" class="text-decoration-none text-light text-center ">PRIME VIDEO</a>
          </figcaption>
        </figure>
        <figure class="col-12 col-sm-4 col-lg-4 ">
          <img src="img/netflix.png" class="img-fluid border" alt="Capa Netflix">
          <figcaption class="cor-botao col-5 col-lg-5 text-center col-sm-10 m-1">
                <a href="streaming.php" class="text-decoration-none text-light">NETFLIX</a>
          </figcaption>
        </figure>
        <figure class="col-12 col-sm-4 col-lg-4 ">
          <img src="img/disney-plus.png" class="img-fluid border " alt="Capa Disney Plus">
          <figcaption class="cor-botao col-5 col-lg-5 text-center col-sm-10 m-1">
            <a href="streaming.php" class="text-decoration-none text-light">DISNEY PLUS</a>
          </figcaption>
        </figure>
      </article>
    </section>
    <section class="row">
      <article class="col-12 col-sm-6 col-lg-6">
        <figure class="text-center">
            <img src="img/streaming/deep.png" class="img-fluid" alt="Capa do Filme" >
            <figcaption class="d-none">Capa do filme deep</figcaption>
        </figure>
          <div class="row">
            <hgroup class="col-lg-9">
              <h4 class="cor-letra">Como thriller erótico, Águas Profundas é uma ótima comédia de costumes </h4>
              <h5 class="cor-letra">Adrian Lyne está menos interessado em cenas de sexo do que está em tirar sarro dos ricos</h5>
              <h6>Por <a href="../autores.php?#caiocolleti">CAIO COLLETI</a>  28/10/2022</h6>
            </hgroup>
            <div class="col-lg-3">
              <h6 class="col-12 border text-light cor-botao text-center ">PRIME VIDEO</h6 >
            </div>
          </div>
        <p>Águas Profundas era uma proposição bizarra desde o começo: um thriller erótico inspirado por um livro da autora de Carol (Patricia Highsmith), escrito pelos roteiristas de Mais Estranho que a Ficção (Zach Helm) e Euphoria (Sam Levinson), dirigido pelo responsável por Proposta Indecente e Atração Fatal (Adrian Lyne) e protagonizado pelo (já ex-)casal da vida real Ben Affleck e Ana de Armas. Como diria Natasha Lyonne naquela cena de Boneca Russa eternizada em memes no Twitter: “Que conceito”.</p>
        <div class="text-end">
            <a href="noticia-filme.php?cod=4">Ler Mais</a>
        </div>
      </article>
      <article class="col-12 col-sm-6 col-lg-6">
          <figure class="p-1">
              <img src="img/streaming/agente-oculto.jpg" class="img-fluid" alt="Capa do Filme" >
          </figure>
          <div class="text-left">
            <div class="row">
                <hgroup class="col-lg-8">
                    <h4 class="cor-letra">Netflix divulga imagens e data de estreia de Agente Oculto</h4>
                    <h5 class="cor-letra">Filme é estrelado por Ryan Gosling, Ana de Armas, Chris Evans e dirigido pelos irmãos Russo</h5>
                    <h6>Por <a href="../autores.php?#omelete">omelete</a>  26/04/2022</h6>
                </hgroup>
                <div class="col-lg-3">
                    <div class="row justify-content-center cor-botao">
                        <h6 class="col-6 text-light text-center p-1">NETFLIX</h6>
                    </div>
                </div>
            </div>
            <p>Na trama, Ryan Gosling é o agente da CIA Court Gentry, também conhecido como Agente Oculto e Sierra Six, enquanto Chris Evans é seu adversário psicopata Lloyd Hansen. O longa é baseado no livro The Gray Man, de Mark Greaney.</p>
          </div>
          <div class="text-end">
            <a href="noticia-filme.php?cod=5">Ler Mais</a>
          </div>
      </article>
    </section>
    <?php include "../rodape.php";?>
</body>
</html>