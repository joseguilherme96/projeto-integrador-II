<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cinema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/tema.css">
</head>
<body>
<?php include "../nav.php"?>
  <div class="container">
  
    <div class="row">
      <div class="col-12 cor-letra">
        <a href="../index.php" class="text-decoration-none cor-letra">Home</a> / <a href="index.php" class="text-decoration-none cor-letra">Cinema</a>
      </div>
    </div>
    <?php include "../barra-de-pesquisa.php";?>
  <section class="row">
    <div class="col-12 text-center">
      <h2 class="cor-letra">CINEMA</h2>
    </div>
  <div class="row">
    <div class="col-12 text-center">
      <p>
        Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. 
        As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos 
        principais filmes exclusivos da plataforma streamming, entrevistas com os autores mais 
        famosos dos filmes e filmes que foram inspirados na literatura.
      </p>
    </div>
  </div>
      <div class="row">
        <div class="col-6 col-sm-3 col-lg-3 p-1 "><!--col <= 576px; col-sm >=576px col-lg >=992px -->
          <img src="img/filmes.jpg" class="img-fluid" alt="Capa Filmes">
          <div class="row justify-content-center">
          <div class="cor-botao col-5 col-sm-10 col-lg-3 text-center   mt-2">
            <a href="filmes.php" class="text-decoration-none text-light">FILMES</a>
          </div>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/streaming.png" class="img-fluid" alt="Capa Streaming">
          <div class="row justify-content-center">
          <div class="cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2">
            <a href="streaming.php" class="text-decoration-none text-light">STREAMING</a>
          </div>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/entrevistas.png" class="img-fluid" alt="Capa Entrevistas">
          <div class="row justify-content-center">
          <div class="cor-botao col-6 col-lg-5 text-center col-sm-10 mt-2">
            <a href="entrevistas.php" class="text-decoration-none text-light">ENTREVISTAS</a>
          </div>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/literatura.png" class="img-fluid" alt=" Capa Literatura">
          <div class="row justify-content-center">
          <div class="cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2">
            <a href="literatura.php" class="text-decoration-none text-light">LITERATURA</a>
          </div>
          </div>
        </div>
      </div>
  </section>
  <section id="cinema">
  <div class="row">
    <div class="col-12">
      <h2 class="cor-letra">CINEMA</h2>
    </div> 
  </div>
  <div class="row text-center">
    <div class=" col-sm-5 col-lg-12">
    <a href="noticia-filme.php?cod=1">
      <picture >
        <source srcset="img/banner-cinema.jpg" class="img-fluid" media="(min-width:992px)">
        <img src="img/indiana-jones.jpg" class="img-fluid" alt="Banner Cinema">
      </picture>
      </a>
    </div>
    <div class="col-12 col-sm-5 col-lg-12">
      <div class="row ">
        <p>
        Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino
        </p>  
      </div>
      <div class="row justify-content-center ">
      <div class="col-3 col-sm-5 col-lg-2">LANÇAMENTO</div>
      <div class="col-2 col-sm-5 col-lg-1">AÇÃO</div>
      </div>
      <div>
        <i class="bi bi-circle"></i>
        <i class="bi bi-circle"></i>
        <i class="bi bi-circle"></i>
      </div>
    </div>
  </div>
</section>
<section id="streamming">
  <div class="row ">
    <div class="col">
      <h2>STREAMING</h2>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-12 col-sm-4 col-lg-4 "><!--col <= 576px; col-sm >=576px col-lg >=992px -->
      <img src="https://via.placeholder.com/250x350" class="img-fluid" alt="Capa Prime Video">
      <div><a href="streaming.php">PRIME VIDEO</a></div>
    </div>
    <div class="col-12 col-sm-4 col-lg-4 ">
      <img src="https://via.placeholder.com/250x350" class="img-fluid" alt="Capa Netflix">
      <div><a href="streaming.php">NETIFLIX</a></div>
    </div>
    <div class="col-12 col-sm-4 col-lg-4 ">
      <img src="https://via.placeholder.com/250x350" class="img-fluid" alt="Capa Disney Plus">
      <div><a href="streaming.php">DISNEY PLUS</a></div>
    </div>
  </div>
</section>
  <section id="literatura">
      <div class="row">
        <div class="col-12">
          <h2>LITERATURA</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="https://via.placeholder.com/250x350" alt="Capa Livro">
              <figcaption>Maze Runner</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h5>
              Lorem ipsum dolor sit amet, consectetur 
            </h5>
            <h6>
              Por <a href="">Yasmin</a>  28/10/20222
            </h6>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="text-right">
            <a href="artigo-literatura.php">Ler Mais</a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="https://via.placeholder.com/250x350" alt="Capa Livro">
              <figcaption>Maze Runner</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h5>
              Lorem ipsum dolor sit amet, consectetur 
            </h5>
            <h6>
              Por <a href="">Yasmin</a>  28/10/20222
            </h6>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
            <div class="text-right">
            <a href="artigo-literatura.php">Ler Mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="https://via.placeholder.com/250x350" alt="Capa Livro">
              <figcaption>Maze Runner</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h5>
              Lorem ipsum dolor sit amet, consectetur 
            </h5>
            <h6>
              Por <a href="">Yasmin</a>  28/10/20222
            </h6>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
            <div class="text-right">
            <a href="artigo-literatura.php">Ler Mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="https://via.placeholder.com/250x350" alt="Capa Livro">
              <figcaption>Maze Runner</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h5>
              Lorem ipsum dolor sit amet, consectetur 
            </h5>
            <h6>
              Por <a href="">Yasmin</a>  28/10/20222
            </h6>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
            <div class="text-right">
            <a href="artigo-literatura.php">Ler Mais</a>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section id="entrevistas">
    <div class="row">
      <div class="col-12">
        <h2>ENTREVISTAS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
          <h6>Ator 1</h6>
        </div>
        <div class="row">
          <img src="https://via.placeholder.com/294x160" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit ame</p>
        </div>
        <div class="row">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
          <h6>Ator 1</h6>
        </div>
        <div class="row">
          <img src="https://via.placeholder.com/294x160" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit ame</p>
        </div>
        <div class="row">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
          <h6>Ator 1</h6>
        </div>
        <div class="row">
          <img src="https://via.placeholder.com/294x160" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit ame</p>
        </div>
        <div class="row">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
          <h6>Ator 1</h6>
        </div>
        <div class="row">
          <img src="https://via.placeholder.com/294x160" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit ame</p>
        </div>
        <div class="row">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
    </div>
  </section>
  <?php include "../rodape.php"?>
</div>
</body>
</html>