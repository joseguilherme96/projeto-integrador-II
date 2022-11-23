<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cinema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">
  <?php include "../nav.php"?>
    <div class="row">
      <div class="col-12">
        <a href="../index.php">Home</a> / <a href="index.php">Cinema</a>
      </div>
    </div>
  <div class="row justify-content-center">
    <div class="col-5 ">
      <input type="text" class="form-control " placeholder="Pesquise sobre filmes,noticias..">
    </div>
    <div class="col-2 p-2">
      <i class="bi-search "></i>
    </div>
  </div>
  <section class="row">
    <div class="col-12 text-center">
      <h2>CINEMA</h2>
    </div>
  <div class="row">
    <div class="col-12 text-center">
      <p>
        Lorem ipsum dolor sit amet, consecteturLorem ipsum
         dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
        consecteturLorem ipsum dolor sit amet, consectetur 
      </p>
    </div>
  </div>
      <div class="row">
        <div class="col-6 col-sm-3 col-lg-3 p-1"><!--col <= 576px; col-sm >=576px col-lg >=992px -->
          <img src="https://via.placeholder.com/250x350" class="img-fluid" alt="Capa Filmes">
          <div><a href="filmes.php">FILMES</a></div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="https://via.placeholder.com/250x350" class="img-fluid" alt="Capa Streaming">
          <div><a href="streaming.php">STREAMING</a></div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="https://via.placeholder.com/250x350" class="img-fluid" alt="Capa Entrevistas">
          <div><a href="entrevistas.php">ENTREVISTAS</a></div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="https://via.placeholder.com/250x350" class="img-fluid" alt=" Capa Literatura">
          <div><a href="literatura.php">LITERATURA</a></div>
        </div>
      </div>
  </section>
  <section id="cinema">
  <div class="row">
    <div class="col-12">
      <h2>CINEMA</h2>
    </div> 
  </div>
  <div class="row text-center">
    <div class=" col-sm-5 col-lg-12">
    <a href="noticia-filme.php">
      <picture >
        <source srcset="https://via.placeholder.com/1100x320" class="img-fluid" media="(min-width:992px)">
        <img src="https://via.placeholder.com/255x320" class="img-fluid" alt="Banner Cinema">
      </picture>
      </a>
    </div>
    <div class="col-12 col-sm-5 col-lg-12">
      <div class="row ">
        <p>
        Lorem ipsum dolor sit amet, consecteturLorem ipsum
         dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
        consecteturLorem ipsum dolor sit amet, consectetur
        Lorem ipsum dolor sit amet, consecteturLorem ipsum
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