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
    <section>
    <?php include "../barra-de-pesquisa.php";?>
    </section>
    <section class="row">
      <article>
        <h2 class="col-12 cor-letra text-center">CINEMA</h2>
          <p class="text-center">
            Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. 
            As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos 
            principais filmes exclusivos da plataforma streamming, entrevistas com os autores mais 
            famosos dos filmes e filmes que foram inspirados na literatura.
          </p>
      </article>
    </section>
    <section class="row">
        <div class="col-6 col-sm-3 col-lg-3 p-1 "><!--col <= 576px; col-sm >=576px col-lg >=992px -->
          <figure>
            <img src="img/filmes.jpg" class="img-fluid" alt="Capa Filmes">
          </figure>
          <div class="row justify-content-center">
            <div class="cor-botao col-5 col-sm-10 col-lg-3 text-center   mt-2">
              <a href="filmes.php" class="text-decoration-none text-light">FILMES</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <figure>
            <img src="img/streaming.png" class="img-fluid" alt="Capa Streaming">
          </figure>
          <div class="row justify-content-center">
          <div class="cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2">
            <a href="streaming.php" class="text-decoration-none text-light">STREAMING</a>
          </div>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <figure>
            <img src="img/entrevistas.png" class="img-fluid" alt="Capa Entrevistas">
          </figure>
          <div class="row justify-content-center">
          <div class="cor-botao col-6 col-lg-5 text-center col-sm-10 mt-2">
            <a href="entrevistas.php" class="text-decoration-none text-light">ENTREVISTAS</a>
          </div>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 p-1">
          <figure>
            <img src="img/literatura.png" class="img-fluid" alt=" Capa Literatura">
          </figure>
          <div class="row justify-content-center">
          <div class="cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2">
            <a href="literatura.php" class="text-decoration-none text-light">LITERATURA</a>
          </div>
          </div>
        </div>
    </section>
  <section id="cinema">
    <article>
      <h2 class="cor-letra">CINEMA</h2>
  <div class="row text-center">
    <div class=" col-sm-5 col-lg-12">
    <a href="noticia-filme.php?cod=1">
      <picture >
        <source srcset="img/banner-cinema.jpg" class="img-fluid" media="(min-width:992px)">
        <img src="img/indiana-jones.jpg" class="img-fluid" alt="Banner Cinema">
        </a>
        <figcaption class="">Fonte imagem em https://www.nerdview.com.br/2022/12/asista-ao-trailer-oficial-de-indiana.html</figcaption>
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
  </article>
</section>
<section id="streamming">
  <div class="row ">
    <div class="col">
      <h2>STREAMING</h2>
    </div>
  </div>
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
  <section id="literatura">
      <div class="row">
        <div class="col-12">
          <h2 class="cor-letra">LITERATURA - FILMES INSPIRADOS EM LIVROS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="img/jogador-n1.jpg" alt="Capa Livro">
              <figcaption>Jogador Nº 1</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h4 class="cor-letra">
            Jogador Nº 1 | Crítica
           
            </h4>
            <h5 class="cor-letra-D2D2D2">
            A volta do Steven Spielberg moleque
            </h5>
            <h6>
              Por <a href="../autores.php?#omelete">Omelete</a> 19/03/2018
              <!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
            </h6>
            <p>
            Ninguém melhor que Steven Spielberg para levar às telas a adaptação de Jogador Nº 1 de Ernest Cline.
             O cineasta, afinal, é a maior influência (o maior responsável, na verdade) 
             por tudo aquilo que inspirou o autor.
            </p>
          </div>
          <div class="text-end">
            <a href="artigo-literatura.php?cod=1">Ler Mais</a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="img/harry-potter.jpg" alt="Capa Livro">
              <figcaption>Harry Potter</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h5 class="cor-letra">
            Harry Potter é a a saga do órfão bruxo criada por J.K. Rowling e iniciada em 1997.
            </h5>
            <h6>
              Por <a href="../autores.php?#omelete">Omelete.</a>  04/12/20222
            </h6>
            <!-- https://www.omelete.com.br/harry-potter?gclid=EAIaIQobChMI3Kaew5_g-wIVFWSRCh0sSAh2EAAYASAAEgLR_vD_BwE -->
            <p>
            Depois dos oito filmes baseados nos livros, a franquia agora se prepara para 
            lançar Animais Fantásticos e Onde Habitam, que adapta o livro didático 
            no mundo de Harry Potter que cataloga 75 espécies de criaturas 
            mágicas pelos cinco continentes.
            </p>
            <div class="text-end">
            <a href="artigo-literatura.php?cod=2">Ler Mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="img/jogos-vorazes.jpg" alt="Capa Livro">
              <figcaption>Jogos Vorazes</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h4 class="cor-letra">
            Jennifer Lawrence descarta papéis em grandes franquias: "Velha demais"
            </h4>
            <h5 class="cor-letra-D2D2D2">
            Estrela de X-Men e Jogos Vorazes deve se concentrar em títulos independentes
            </h5>
            <h6>
              Por <a href="../autores.php?#caiocolleti">Caio Coletti</a>  08/10/20222
            </h6>
            <!-- https://www.omelete.com.br/autores/caio-coletti-->
            <p>
            Não espere ver Jennifer Lawrence de volta às grandes franquias hollywoodianas. Participando do BFI London Film Festival [via Deadline], ela explicou por que deve se concentrar em projetos independentes daqui em diante.
            </p>
            <div class="text-end">
            <a href="artigo-literatura.php?cod=3">Ler Mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 p-1">
          <div class="text-center">
            <figure>
              <img src="img/senhor-dos-aneis.jpg" alt="Capa Livro">
              <figcaption>Senhor dos Anéis</figcaption>
            </figure>
          </div>
          <div class="text-left">
            <h4 class="cor-letra">
                Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja
            </h4>
            <h5 class="cor-letra-D2D2D2">
            Personagens dos atores não foram revelados
            </h5>
            <h6>
              Por <a href="../autores.php?#omelete">Omelete.</a>28/10/20222
            </h6>
            <!-- https://www.omelete.com.br/autores/flavio-pinto-->
            <p>
            O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada. 
            </p>
            <div class="text-end">
            <a href="artigo-literatura.php?cod=4">Ler Mais</a>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section id="entrevistas">
    <div class="row">
      <div class="col-12">
        <h2 class="cor-letra">ENTREVISTAS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
        <h2 class="cor-letra">Jason Stham</h2>
        </div>
        <div class="row">
            <img src="img/jason-statham.jpg" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Conhecido como o cara durão de Carga Explosiva, Os Mercenários e Velozes & Furiosos 7, Jason Statham fez poucas comédias em sua carreira. </p>
        </div>
        <div class="row text-end">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
          <h2 class="cor-letra">Camille Rowe</h2>
        </div>
        <div class="row">
          <img src="img/camille-rowe.jpg" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Camille Rowe a protagonista do primeiro fashion film Journeys by Mango a apresentar a coleção feminina mais em</p>
        </div>
        <div class="row text-end">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
      
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
          <h2 class="cor-letra">Vin Diesel</h2>
        </div>
        <div class="row">
          <img src="img/vin-diesel.jpg" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Vin diesel fala sobre o filme Reativado que estreiou no dia 19 de janeiro.</p>
        </div>
        <div class="row text-end">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="row">
          <h2 class="cor-letra">Audrey Tautou</h2>
        </div>
        <div class="row">
          <img src="img/audrey-tautou.jpg" alt="Foto Autor">
        </div>
        <div class="row">
          <p>Audrey Justine Tautou é uma atriz francesa. Reconhecida na França por sua atuação em Vénus beauté que lhe rendeu o prêmio César de Atriz Revelação</p>
        </div>
        <div class="row text-end">
        <a href="entrevista-com-autores.php">Ler Mais</a>
        </div>
      </div>
    </div>
</section>
</div>
<?php include "../rodape.php"?>
</body>
</html>