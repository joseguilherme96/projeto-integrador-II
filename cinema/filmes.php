<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
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
        <a href="../index.php" class="cor-letra">Home</a> / <a href="index.php" class="cor-letra">Cinema</a> / <a href="filmes.php" class="cor-letra">Filmes</a> 
      </div>
    </div>
    <?php include "../barra-de-pesquisa.php";?>
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
        </a>
        <figcaption class="d-none d-lg-block">Fonte imagem em https://www.nerdview.com.br/2022/12/asista-ao-trailer-oficial-de-indiana.html</figcaption>
      </picture>
      
    </div>
    <div class="col-12 col-sm-5 col-lg-12">
      <div class="row ">
        <p>
        Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino
        </p>  
      </div>
      <div class="row justify-content-center ">
      <div class="cor-botao col-5 col-lg-2 text-center col-sm-7 m-1">
            <a href="literatura.php" class="text-decoration-none text-light">LANÇAMENTO</a>
          </div>
          <div class="cor-botao col-5 col-lg-2 text-center col-sm-3 m-1">
            <a href="literatura.php" class="text-decoration-none text-light">AÇÃO</a>
          </div>
      </div>
      <div>
        <i class="bi bi-circle cor-letra"></i>
        <i class="bi bi-circle cor-letra" ></i>
        <i class="bi bi-circle cor-letra"></i>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-6">
          <img src="img/filmes/banner-marvel-menor.jpg" alt="Capa de Filmes">
          <h4 class="cor-letra">
          CCXP22: painel do Marvel Studios promete um 2023 cheio de despedidas
          </h4>
          <h5 class="cor-letra-D2D2D2">
          Apresentação do estúdio no Palco Thunder mostrou prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3
          </h5>
            <h6>
              Por <a href="../autores.php">NICO GARÓFALO</a>  01/12/2022
              <!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
            </h6>
            <p>
            Como não podia deixar de ser, o painel do Marvel Studios no Palco Thunder by Cinemark Club na CCXP22 contou com muita alegria e energia do público, que conseguiu assistir às novidades trazidas por Kevin Feige para os fãs brasileiros. Mas, pelo que as novas prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3 deram a entender, 2023 não vai ser nem um pouco alegre
            </p>
            <div class="text-end">
              <a href="noticia-filme.php?cod=2">Ler Mais</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6">
          <img src="img/filmes/filme-the-last-of-us-menor.jpg" alt="Capa de Filmes">
          <h4 class="cor-letra">
          The Last of Us ganha trailer inédito e emocionante na CCXP22
          </h4>
          <h5 class="cor-letra-D2D2D2">
          Série estreia na HBO Max em 15 de janeiro
          </h5>
            <h6>
              Por <a href="../autores.php">GIOVANNA BREVE E NICOLAOS GARÓFAL</a>  03/12/2022
              <!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
            </h6>
            <p>
            The Last of Us, série da HBO Max que adapta o game, ganhou um novo trailer na CCXP22 no Palco Thunder by Cinemark Club. A novidade veio com a presença do elenco de estrelas Pedro Pascal, Bella Ramsey, Gabriel Luna, Merle Dandrigge e os produtores execultivos Craig Mazin e Neil Druckmann
            </p>
            <div class="text-end">
              <a href="noticia-filme.php?cod=3">Ler Mais</a>
            </div>
        </div>
    </div>
    
    </div>
  </div>
</section>
  <?php include "../rodape.php"?>
</body>
</html>