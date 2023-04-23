<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrevistas</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/tema.css">
</head>
<body>
  <?php include '../nav.php'; ?>
  <div class="container">
    <section class="row">
      <div class="col-12 cor-letra">
        <a href="../index.php" class="cor-letra">Home</a> / <a href="index.php" class="cor-letra">Cinema</a> / <a href="literatura.php" class="cor-letra">Entrevistas</a>
      </div>
    </section>
    <?php include "../barra-de-pesquisa.php"; ?>
    <section class="row">
      <h2 class="cor-letra row text-center">ENTREVISTAS COM ATORES</h2>
      <article class="col-12 col-sm-6 col-lg-4 p-1">
        <h2 class="cor-letra">Jason Stham</h2>
        <figure class="row">
          <img src="img/jason-statham.jpg" class="img-fluid" alt="Foto Autor">
        </figure>
        <p>Conhecido como o cara durão de Carga Explosiva, Os Mercenários e Velozes & Furiosos 7, Jason Statham fez poucas comédias em sua carreira. </p>
        <div class="row text-end">
          <a href="entrevista-com-autores.php?#jasonsthan">Ler Mais</a>
        </div>
      </article>
      <article class="col-12 col-sm-6 col-lg-4 p-1">
        <h2 class="cor-letra">Vin Diesel</h2>
        <figure class="row">
          <img src="img/vin-diesel.jpg" class="img-fluid" alt="Foto Autor">
        </figure>
        <p>Vin diesel fala sobre o filme Reativado que estreiou no dia 19 de janeiro.</p>
        <div class="row text-end">
          <a href="entrevista-com-autores.php?#vindiesel">Ler Mais</a>
        </div>
      </article>
      <article class="col-12 col-sm-6 col-lg-4 p-1">
        <h2 class="cor-letra">Camille Rowe</h2>
        <figure class="row">
          <img src="img/camille-rowe.jpg" class="img-fluid" alt="Foto Autor">
        </figure>
        <p>Camille Rowe a protagonista do primeiro fashion film Journeys by Mango a apresentar a coleção feminina mais em</p>
        <div class="row text-end">
          <a href="entrevista-com-autores.php?#camillerowe">Ler Mais</a>
        </div>
      </article>
      <article class="col-12 col-sm-12 col-lg-12 p-1">
        <h2 class="cor-letra">Audrey Tautou</h2>
        <figure class="row">
          <img src="img/audrey-tautou.jpg" class="img-fluid" alt="Foto Autor">
        </figure>
        <p>Audrey Justine Tautou é uma atriz francesa. Reconhecida na França por sua atuação em Vénus beauté que lhe rendeu o prêmio César de Atriz Revelação</p>
        <div class="row text-end">
          <a href="entrevista-com-autores.php?#audreytautou">Ler Mais</a>
        </div>
      </article>
    </section>
  <?php include "../rodape.php"; ?>
</body>
</html>