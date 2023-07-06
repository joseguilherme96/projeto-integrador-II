<!--Validado na w3-->
<?php $title = "Filmes Inspirados em Livros";?>
<?php include "../header.php"?>

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="../index.php" class="nav-link cor-letra" tabindex="10">Home /</a></li>
        <li class="nav-item"><a href="indexcinema.php" class="nav-link cor-letra" tabindex="11">Cinema /</a></li>
        <li class="nav-item"><a href="literatura.php" class=" nav-link cor-letra" tabindex="12">Literatura</a> </li>
      </ul>
    </nav>

    <?php include "../barra-de-pesquisa.php";?>
    
    <section class="row">
      <h2 class="d-inline cor-letra" tabindex="15" id="literatura">FILMES INSPIRADO EM LIVROS</h2>
      <article class="col-12 col-sm-6 col-lg-4 p-1">
        <figure class="text-center" tabindex="16">
          <img src="img/jogador-n1.jpg" alt="Capa Livro">
          <figcaption>Jogador Nº 1</figcaption>
        </figure>
        <hgroup tabindex="17">
          <h4 class="cor-letra">Jogador Nº 1 | Crítica</h4>
          <p class="cor-letra-D2D2D2">A volta do Steven Spielberg moleque</p>
        </hgroup>
        <p>Por <a href="../autores.php?#omelete" tabindex="18">Omelete</a><time datetime="2018-03-19">19/03/2018</time></p><!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica-->
        <p tabindex="19">Ninguém melhor que Steven Spielberg para levar às telas a adaptação de Jogador Nº 1 de Ernest Cline. O cineasta, afinal, é a maior influência (o maior responsável, na verdade) por tudo aquilo que inspirou o autor.</p>
        <a href="artigo-literatura.php?cod=1" class="text-end d-block" tabindex="20">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-4 p-1">
          <figure class="text-center" tabindex="21">
            <img src="img/jogos-vorazes.jpg" alt="Capa Livro">
            <figcaption>Jogos Vorazes</figcaption>
          </figure>
          <hgroup tabindex="22">
            <h4 class="cor-letra">Jennifer Lawrence descarta papéis em grandes franquias: "Velha demais"</h4>
            <p class="cor-letra-D2D2D2">Estrela de X-Men e Jogos Vorazes deve se concentrar em títulos independentes</p>
          </hgroup>
          <p>Por <a href="../autores.php?#caiocolleti" tabindex="23">Caio Coletti</a> <time datetime="2022-10-08">08/10/2022</time></p><!-- https://www.omelete.com.br/autores/caio-coletti-->
          <p tabindex="24">Não espere ver Jennifer Lawrence de volta às grandes franquias hollywoodianas. Participando do BFI London Film Festival [via Deadline], ela explicou por que deve se concentrar em projetos independentes daqui em diante.</p>
          <a href="artigo-literatura.php?cod=3" class="text-end d-block" tabindex="25">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-4 p-1">
        <figure class="text-center" tabindex="26">
          <img src="img/harry-potter.jpg" alt="Capa Livro">
          <figcaption>Harry Potter</figcaption>
        </figure>
        <h5 class="cor-letra" tabindex="27">Harry Potter é a a saga do órfão bruxo criada por J.K. Rowling e iniciada em 1997.</h5>
        <p>Por <a href="../autores.php?#omelete" tabindex="28">Omelete</a><time datetime="2022-12-04">04/12/2022</time></p>
        <!-- https://www.omelete.com.br/harry-potter?gclid=EAIaIQobChMI3Kaew5_g-wIVFWSRCh0sSAh2EAAYASAAEgLR_vD_BwE -->
        <p tabindex="29">
          Depois dos oito filmes baseados nos livros, a franquia agora se prepara para 
          lançar Animais Fantásticos e Onde Habitam, que adapta o livro didático 
          no mundo de Harry Potter que cataloga 75 espécies de criaturas 
          mágicas pelos cinco continentes.
        </p>
        <a href="artigo-literatura.php?cod=2" class="d-block text-end" tabindex="30">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-12 col-lg-12 p-1">
        <figure class="text-center" tabindex="31">
            <img src="img/artigos/banner-senhor-dos-aneis.jpg" class="img-fluid" alt="Capa Livro">
            <figcaption>Senhor dos Anéis</figcaption>
        </figure> 
        <hgroup tabindex="32">
          <h4 class="text-start cor-letra">Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja</h4>
          <p class=" text-start cor-letra-D2D2D2">Personagens dos atores não foram revelados</p>
        </hgroup>
        <p class="text-start"> Por <a href="../autores.php?#omelete" tabindex="33">Omelete</a>  <time datetime="2022-10-28"></time>28/10/2022</p><!-- https://www.omelete.com.br/autores/flavio-pinto-->
        <p class="text-start" tabindex="34">O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada. </p>
        <a href="artigo-literatura.php?cod=4" class="d-block text-end" tabindex="35">Ler Mais</a>
      </article>
    </section>
  </div>
  <?php include '../footer.php';?>