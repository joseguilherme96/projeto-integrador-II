<!--Validado na w3-->
<?php $title = "Cinema"; ?>
<?php include "../header.php" ?>

    <div class="container">
      <nav class="navbar navbar-expand-lg bg-light">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="../index.php" class="nav-link cor-letra">Home / </a></li>
          <li class="nav-item"><a href="index.php" class=" nav-link cor-letra">Cinema</a></li>
        </ul>
      </nav>

      <?php include "../barra-de-pesquisa.php"; ?>

      <section class="row">
        <h2 class="col-12 cor-letra text-center">CINEMA</h2>
        <article>
          <h2 class="cor-letra">Noticias</h2>
          <p class="text-center">
            Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema.
            As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos
            principais filmes exclusivos da plataforma streamming, entrevistas com os autores mais
            famosos dos filmes e filmes que foram inspirados na literatura.
          </p>
        </article>
      </section>
      <section class="row justify-content-center">
        <h2 class="cor-letra">Opções de Straming</h2>
        <figure class="col-6 col-sm-3 col-lg-3 p-1 ">
          <img src="img/filmes.jpg" class="img-fluid" alt="Capa Filmes">
          <figcaption class="row justify-content-center">
            <a href="filmes.php" class="text-decoration-none text-light cor-botao col-5 col-sm-10 col-lg-3 text-center   mt-2 p-2">FILMES</a>
          </figcaption>
        </figure>
        <figure class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/streaming.png" class="img-fluid" alt="Capa Streaming">
          <figcaption class="row justify-content-center">
            <a href="streaming.php" class="text-decoration-none text-light cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2 p-2">STREAMING</a>
          </figcaption>
        </figure>
        <figure class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/entrevistas.png" class="img-fluid" alt="Capa Entrevistas">
          <figcaption class="row justify-content-center">
            <a href="entrevistas.php" class="text-decoration-none text-light cor-botao col-6 col-lg-5 text-center col-sm-10 mt-2 p-2">ENTREVISTAS</a>
          </figcaption>
        </figure>
        <figure class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/literatura.png" class="img-fluid" alt=" Capa Literatura">
          <figcaption class="row justify-content-center">
            <a href="literatura.php" class="text-decoration-none text-light cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2 p-2">LITERATURA</a>
          </figcaption>
        </figure>
      </section>
      <section class="row" id="cinema">
        <h2 class="cor-letra text-center">CINEMA</h2>
        <article class="row justify-content-center">
          <h2 class="cor-letra">Indiana Jones</h2>
          <a href="noticia-filme.php?cod=1" class="text-center">
            <picture class="col-12">
              <source srcset="img/banner-cinema.jpg" class="img-fluid" media="(min-width:992px)">
              <img src="img/indiana-jones.jpg" class="img-fluid" alt="Banner Cinema">
            </picture>
          </a>
          <p>Fonte imagem em https://www.nerdview.com.br/2022/12/asista-ao-trailer-oficial-de-indiana.html</p>
          <p>Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino</p>
          <a href="noticia-filme.php?cod=1" class="cor-botao col-12 col-lg-2 text-center col-sm-7 m-1 text-decoration-none text-light">LANÇAMENTO</a>
          <a href="noticia-filme.php?cod=1" class="cor-botao col-12 col-lg-2 text-center col-sm-3 m-1 text-decoration-none text-light">AÇÃO</a>
          <a class="col-12 text-end" href="noticia-filme.php?cod=1">Ler Mais</a>
          <i class="bi bi-circle cor-letra col-1"></i>
          <i class="bi bi-circle cor-letra col-1"></i>
          <i class="bi bi-circle cor-letra col-1"></i>
        </article>
      </section>
      <section class="row" id="streamming">
        <h2 class="cor-letra">STREAMING</h2>
        <figure class="col-12 col-sm-4 col-lg-4 text-center"><!--col <= 576px; col-sm >=576px col-lg >=992px -->
          <img src="img/prime-video.png " class="img-fluid border" alt="Capa Prime Video">
          <figcaption class="row justify-content-center">
            <a href="streaming.php" class="text-decoration-none text-light cor-botao col-5 text-center">PRIME VIDEO</a>
          </figcaption>
        </figure>
        <figure class="col-12 col-sm-4 col-lg-4 text-center">
          <img src="img/netflix.png" class="img-fluid border" alt="Capa Netflix">
          <figcaption class="row justify-content-center">
            <a href="streaming.php" class=" cor-botao col-5 col-lg-5 text-center col-sm-10 m-1 text-decoration-none text-light">NETFLIX</a>
          </figcaption>
        </figure>
        <figure class="col-12 col-sm-4 col-lg-4 border text-center">
          <img src="img/disney-plus.png" class="img-fluid border " alt="Capa Disney Plus">
          <figcaption class="row justify-content-center">
            <a href="streaming.php" class=" cor-botao col-5 col-lg-5 text-center col-sm-10 m-1 text-decoration-none text-light">DISNEY PLUS</a>
          </figcaption>
        </figure>
      </section>
      <section class="row" id="literatura">
        <h2 class="cor-letra">LITERATURA - FILMES INSPIRADOS EM LIVROS</h2>
        <article class="col-12 col-sm-6 col-lg-3 p-1 text-center">
          <figure>
            <img src="img/jogador-n1.jpg" alt="Capa Livro">
            <figcaption>Jogador Nº 1</figcaption>
          </figure>
          <hgroup>
            <h4 class="cor-letra text-start">Jogador Nº 1 | Crítica</h4>
            <p class="cor-letra-D2D2D2 text-start">A volta do Steven Spielberg moleque</p>
          </hgroup>
          <p class="text-start">Por <a href="../autores.php?#omelete">Omelete</a><time datetime="2018-03-19">19/03/2018</time><!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica--></p>
          <p class="text-start">Ninguém melhor que Steven Spielberg para levar às telas a adaptação de Jogador Nº 1 de Ernest Cline.
            O cineasta, afinal, é a maior influência (o maior responsável, na verdade)
            por tudo aquilo que inspirou o autor.
          </p>
          <a href="artigo-literatura.php?cod=1" class="d-block text-end">Ler Mais</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 p-1 text-center">
          <figure>
            <img src="img/harry-potter.jpg" alt="Capa Livro">
            <figcaption class="text-center">Harry Potter</figcaption>
          </figure>
          <h5 class="cor-letra text-start">Harry Potter é a a saga do órfão bruxo criada por J.K. Rowling e iniciada em 1997.</h5>
          <p class="text-start">Por <a href="../autores.php?#omelete">Omelete.</a><time datetime="2022-12-04">04/12/2022</time></p><!-- https://www.omelete.com.br/harry-potter?gclid=EAIaIQobChMI3Kaew5_g-wIVFWSRCh0sSAh2EAAYASAAEgLR_vD_BwE -->
          <p class="text-start">
            Depois dos oito filmes baseados nos livros, a franquia agora se prepara para
            lançar Animais Fantásticos e Onde Habitam, que adapta o livro didático
            no mundo de Harry Potter que cataloga 75 espécies de criaturas
            mágicas pelos cinco continentes.
          </p>
          <a href="artigo-literatura.php?cod=2" class="text-end d-block">Ler Mais</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 p-1">
          <figure class="text-center">
            <img src="img/jogos-vorazes.jpg" alt="Capa Livro">
            <figcaption>Jogos Vorazes</figcaption>
          </figure>
          <hgroup>
            <h4 class="cor-letra">Jennifer Lawrence descarta papéis em grandes franquias: "Velha demais"</h4>
            <p class="cor-letra-D2D2D2">Estrela de X-Men e Jogos Vorazes deve se concentrar em títulos independentes</p>
          </hgroup>
          <p>Por <a href="../autores.php?#caiocolleti">Caio Coletti</a><time datetime="2022-10-08">08/10/2022</time></p><!-- https://www.omelete.com.br/autores/caio-coletti-->
          <p>
            Não espere ver Jennifer Lawrence de volta às grandes franquias hollywoodianas. Participando do BFI London Film Festival [via Deadline], ela explicou por que deve se concentrar em projetos independentes daqui em diante.
          </p>
          <a href="artigo-literatura.php?cod=3" class="d-block text-end">Ler Mais</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 p-1 text-center">
          <figure>
            <img src="img/senhor-dos-aneis.jpg" alt="Capa Livro">
            <figcaption>Senhor dos Anéis</figcaption>
          </figure>
          <hgroup>
            <h4 class="cor-letra text-start">Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja</h4>
            <p class="cor-letra-D2D2D2 text-start">Personagens dos atores não foram revelados</p>
          </hgroup>
          <p class="text-start">Por <a href="../autores.php?#omelete">Omelete.</a><time datetime="2022-10-28">28/10/2022</time></p>
          <p class="text-start">O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada. </p>
          <a href="artigo-literatura.php?cod=4" class="d-block text-end">Ler Mais</a>
        </article>
      </section>
      <section class="row" id="entrevistas">
        <h2 class="cor-letra">ENTREVISTAS</h2>
        <article class="col-12 col-sm-6 col-lg-3 text-center">
          <h2 class="cor-letra">Jason Stham</h2>
          <img src="img/jason-statham.jpg" class="img-fluid" alt="Foto Autor">
          <p class="text-start">Conhecido como o cara durão de Carga Explosiva, Os Mercenários e Velozes & Furiosos 7, Jason Statham fez poucas comédias em sua carreira. </p>
          <a href="entrevista-com-autores.php" class="text-end d-block">Ler Mais</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 text-center">
          <h2 class="row cor-letra">Camille Rowe</h2>
          <figure>
            <img src="img/camille-rowe.jpg" class="img-fluid" alt="Foto Autor">
            <figcaption class="d-none">Foto da atriz Camille Rowe</figcaption>
          </figure>
          <p class="text-start">Camille Rowe a protagonista do primeiro fashion film Journeys by Mango a apresentar a coleção feminina mais em</p>
          <a href="entrevista-com-autores.php" class="d-block text-end">Ler Mais</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 text-center">
          <h2 class="row cor-letra">Vin Diesel</h2>
          <figure class="row">
            <img src="img/vin-diesel.jpg" class="img-fluid" alt="Foto Autor">
            <figcaption class="d-none">Foto do ator Vin Diesel</figcaption>
          </figure>
          <p class="text-start">Vin diesel fala sobre o filme Reativado que estreiou no dia 19 de janeiro.</p>
          <a href="entrevista-com-autores.php" class="d-block text-end">Ler Mais</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 text-center">
          <h2 class="row cor-letra">Audrey Tautou</h2>
          <figure>
            <img src="img/audrey-tautou.jpg" class="img-fluid" alt="Foto Autor">
            <figcaption class="d-none">Foto da atriz Audrey Tautou</figcaption>
          </figure>
          <p class="text-start">Audrey Justine Tautou é uma atriz francesa. Reconhecida na França por sua atuação em Vénus beauté que lhe rendeu o prêmio César de Atriz Revelação</p>
          <a href="entrevista-com-autores.php" class="d-block text-end">Ler Mais</a>
        </article>
      </section>
    </div>

<?php include "../footer.php" ?>