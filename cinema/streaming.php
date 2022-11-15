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
</head>
<body>
    <?php include "../nav.php";?>
    <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="../index.php">Home</a> / <a href="index.php">Cinema</a> / <a href="filmes.php">Streaming</a> 
      </div>
    </div>
        <div class="row justify-content-center">
    <div class="col-5 ">
      <input type="text" class="form-control " placeholder="Pesquise sobre filmes,noticias.." />
    </div>
    <div class="col-2 p-2">
      <i class="bi-search "></i>
    </div>
  </div>
        <section id="cinema">
  <div class="row">
    <div class="col-12 text-center">
      <h1>STREAMING</h1>
    </div> 
  </div>
  <div class="row">
    <div class="col-12 text-center">
      <p>Noticias exclusivas de filmes das principais plataformas de Streaming </p>
    </div> 
  </div>
  <div class="row text-center justify-content-center">
        <div class="col-12 col-sm-3 col-lg-3"><!--col <= 576px; col-sm >=576px col-lg >=992px -->  
          <img src="https://via.placeholder.com/250x350" class="img-fluid p-1">
          <p>PRIME VIDEO</p>
        </div>
        <div class="col-12 col-sm-3 col-lg-3"><!--col <= 576px; col-sm >=576px col-lg >=992px -->  
          <img src="https://via.placeholder.com/250x350" class="img-fluid p-1">
          <p>NETFLIX</p>
        </div>
        <div class="col-12 col-sm-3 col-lg-3"><!--col <= 576px; col-sm >=576px col-lg >=992px -->  
          <img src="https://via.placeholder.com/250x350" class="img-fluid p-1">
          <p>DISNEY PLUS</p>
        </div>
  </div>
  <div class="row">
        <div class="col-12 col-sm-6 col-lg-6 p-1">
          <div class="text-center">
            <picture>
              <source srcset="https://via.placeholder.com/450x250" media="(min-width:992px)">
              <img src="https://via.placeholder.com/250x250" >
            </picture>
          </div>
          <div class="text-left">
            <div class="row">
                <div class="col-lg-7">
                    <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                    <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
                </div>
                <div class="col-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-6 border">PRIME VIDEO</div>
                    </div>
                </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="text-end">
            <a href="noticia-filme.php?noticia=2">Ler Mais</a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 p-1">
          <div class="text-center">
            <picture>
              <source srcset="https://via.placeholder.com/450x250" media="(min-width:992px)">
              <img src="https://via.placeholder.com/250x250" >
            </picture>
          </div>
          <div class="text-left">
            <div class="row">
                <div class="col-lg-7">
                    <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                    <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
                </div>
                <div class="col-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-6 border">NETFLIX</div>
                    </div>
                </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="text-end">
            <a href="noticia-filme.php?noticia=2">Ler Mais</a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 p-1">
          <div class="text-center">
            <picture>
              <source srcset="https://via.placeholder.com/450x250" media="(min-width:992px)">
              <img src="https://via.placeholder.com/250x250" >
            </picture>
          </div>
          <div class="text-left">
            <div class="row">
                <div class="col-lg-7">
                    <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                    <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
                </div>
                <div class="col-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-6 border">DISNEY PLUS</div>
                    </div>
                </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="text-end">
            <a href="noticia-filme.php?noticia=2">Ler Mais</a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 p-1">
          <div class="text-center">
            <picture>
              <source srcset="https://via.placeholder.com/450x250" media="(min-width:992px)">
              <img src="https://via.placeholder.com/250x250" >
            </picture>
          </div>
          <div class="text-left">
            <div class="row">
                <div class="col-lg-7">
                    <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                    <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
                </div>
                <div class="col-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-6 border">NETFLIX</div>
                    </div>
                </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet, consecteturLorem ipsum
            dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
            consecteturLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="text-end">
            <a href="noticia-filme.php?noticia=2">Ler Mais</a>
          </div>
        </div>
</div>
  </div>
    <?php include "../rodape.php";?>
</div>
</body>
</html>