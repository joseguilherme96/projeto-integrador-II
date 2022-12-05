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
    <div class="row">
      <div class="col-12 cor-letra">
        <a href="../index.php" class="cor-letra">Home</a> / <a href="index.php" class="cor-letra">Cinema</a> / <a href="filmes.php" class="cor-letra">Streaming</a> 
      </div>
    </div>
    <?php include "../barra-de-pesquisa.php";?>
    <div class="row">
        <div class="col-12 text-center">
          <h1 class="cor-letra">STREAMING</h1>
        </div> 
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <p>Noticias exclusivas de filmes das principais plataformas de Streaming </p>
      </div> 
    </div>
    <section id="streamming">
  <div class="row text-center">
    <div class="col-12 col-sm-4 col-lg-4 "><!--col <= 576px; col-sm >=576px col-lg >=992px -->
      <img src="img/prime-video.png " class="img-fluid border" alt="Capa Prime Video">
      <div class="row justify-content-center">
      <div class="cor-botao col-5 col-lg-5 text-center col-sm-10 m-1">
            <a href="streaming.php" class="text-decoration-none text-light">PRIME VIDEO</a>
          </div>
      </div>
    </div>
    <div class="col-12 col-sm-4 col-lg-4 ">
      <img src="img/netflix.png" class="img-fluid border" alt="Capa Netflix">
      <div class="row justify-content-center">
      <div class="cor-botao col-5 col-lg-5 text-center col-sm-10 m-1">
            <a href="streaming.php" class="text-decoration-none text-light">NETFLIX</a>
          </div>
      </div>
    </div>
    <div class="col-12 col-sm-4 col-lg-4 ">
      <img src="img/disney-plus.png" class="img-fluid border " alt="Capa Disney Plus">
      <div class="row justify-content-center">
      <div class="cor-botao col-5 col-lg-5 text-center col-sm-10 m-1">
            <a href="streaming.php" class="text-decoration-none text-light">DISNEY PLUS</a>
          </div>
      </div>
    </div>
  </div>
</section>

    <div class="row">
      <section class="col-12 col-sm-6 col-lg-6 p-1">
        <div class="text-center">
            <img src="img/streaming/deep.png" class="img-fluid" alt="Capa do Filme" >
        </div>
        <div class=" row text-left ">
          <div class="row">
            <div class="col-lg-9">
              <h4 class="cor-letra">Como thriller erótico, Águas Profundas é uma ótima comédia de costumes </h4>
              <h5 class="cor-letra">Adrian Lyne está menos interessado em cenas de sexo do que está em tirar sarro dos ricos</h5>
              <h6>Por <a href="../autores.php?#caio-colletti">CAIO COLLETI</a>  28/10/2022</h6>
            </div>
            <div class="col-lg-3">
              <div class="row justify-content-center cor-botao">
              <div class="col-12 border text-light">PRIME VIDEO</div>
            </div>
          </div>
        </div>
        </div>
        <p>
        Águas Profundas era uma proposição bizarra desde o começo: um thriller erótico inspirado por um livro da autora de Carol (Patricia Highsmith), escrito pelos roteiristas de Mais Estranho que a Ficção (Zach Helm) e Euphoria (Sam Levinson), dirigido pelo responsável por Proposta Indecente e Atração Fatal (Adrian Lyne) e protagonizado pelo (já ex-)casal da vida real Ben Affleck e Ana de Armas. Como diria Natasha Lyonne naquela cena de Boneca Russa eternizada em memes no Twitter: “Que conceito”.
        </p>
        <div class="text-end">
            <a href="noticia-filme.php?cod=4">Ler Mais</a>
        </div>
      </section>
        <section class="col-12 col-sm-6 col-lg-6 p-1">
            <div class="text-center">
            <picture>
              <img src="img/streaming/agente-oculto.jpg" class="img-fluid" alt="Capa do Filme" >
          </div>
          <div class="text-left">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="cor-letra">Netflix divulga imagens e data de estreia de Agente Oculto</h4>
                    <h5 class="cor-letra">Filme é estrelado por Ryan Gosling, Ana de Armas, Chris Evans e dirigido pelos irmãos Russo</h5>
                    <h6>Por <a href="../autores.php?#omelete">BIA VACCARI</a>  26/04/2022</h6>
                </div>
                <div class="col-lg-3">
                    <div class="row justify-content-center cor-botao">
                        <div class="col-6 text-light">NETFLIX</div>
                    </div>
                </div>
            </div>
            <p>
            Na trama, Ryan Gosling é o agente da CIA Court Gentry, também conhecido como Agente Oculto e Sierra Six, enquanto Chris Evans é seu adversário psicopata Lloyd Hansen. O longa é baseado no livro The Gray Man, de Mark Greaney.
            </p>
          </div>
          <div class="text-end">
            <a href="noticia-filme.php?cod=5">Ler Mais</a>
          </div>
        </section>
</div>
  </div>
    <?php include "../rodape.php";?>
</body>
</html>