<!--Validado na w3-->
<?php $title = "Cinema";?>

<?php include "../header.php"?>

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="../index.php" class="nav-link cor-letra" aria-describedby="desc-home" tabindex="10">Home / </a></li>
        <li class="nav-item"><a href="indexcinema.php" class=" nav-link cor-letra"   aria-describedby="desc-cinema" tabindex="11">Cinema</a></li>
      </ul>
    </nav>

    <?php include "../barra-de-pesquisa.php";?>
    
    <section class="row">
      <h2 class="col-12 cor-letra text-center" tabindex="13">CINEMA</h2>
      <article role="article">
          <h2 class="cor-letra" tabindex="14">Noticias</h2>
          <p class="text-center" tabindex="15">
            Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. 
            As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos 
            principais filmes exclusivos da plataforma streamming, entrevistas com os autores mais 
            famosos dos filmes e filmes que foram inspirados na literatura.
          </p>
      </article>
    </section>
    <section class="row justify-content-center">
        <h2 class="cor-letra" tabindex="16">Opções de Conteúdo</h2>
        <figure class="col-6 col-sm-3 col-lg-3 p-1 ">
          <img src="img/filmes.jpg" class="img-fluid" alt="Capa Filmes">
          <figcaption class="row justify-content-center">
            <a href="filmes.php?#filmes" class="text-decoration-none text-light cor-botao col-5 col-sm-10 col-lg-3 text-center   mt-2 p-2" tabindex="17" id="opcoes-conteudo-filmes" aria-describedby="desc-opcoes-conteudo opcoes-conteudo-filmes">FILMES</a>
          </figcaption>
        </figure>
        <figure class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/streaming.png" class="img-fluid" alt="Capa Streaming">
          <figcaption class="row justify-content-center">
            <a href="streaming.php?#streaming" class="text-decoration-none text-light cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2 p-2" id="opcoes-conteudo-streaming"tabindex="18" aria-describedby="desc-opcoes-conteudo opcoes-conteudo-streaming ">STREAMING</a>
          </figcaption>
        </figure>
        <figure class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/entrevistas.png" class="img-fluid" alt="Capa Entrevistas">
          <figcaption class="row justify-content-center">
            <a href="entrevistas.php?#entrevistas" class="text-decoration-none text-light cor-botao col-6 col-lg-5 text-center col-sm-10 mt-2 p-2" tabindex="19" id="opcoes-conteudo-entrevistas" aria-describedby="desc-opcoes-conteudo opcoes-conteudo-entrevistas">ENTREVISTAS</a>
          </figcaption>
        </figure>
        <figure class="col-6 col-sm-3 col-lg-3 p-1">
          <img src="img/literatura.png" class="img-fluid" alt=" Capa Literatura">
          <figcaption class="row justify-content-center">
            <a href="literatura.php?#literatura" class="text-decoration-none text-light cor-botao col-5 col-lg-5 text-center col-sm-10 mt-2 p-2" tabindex="20" id="opcoes-conteudo-literatura" aria-describedby="desc-opcoes-conteudo opcoes-conteudo-literatura">LITERATURA</a>
          </figcaption>
        </figure>
    </section>
    <section class="row" id="cinema">
      <h2 class="cor-letra text-center" tabindex="21">CINEMA</h2>
      <article class="row justify-content-center">
        <h2 class="cor-letra" tabindex="22" id="titulo-artigo-1">Indiana Jones</h2>
        <a href="noticia-filme.php?cod=1" class="text-center" tabindex="23">
          <picture class="col-12" tabindex="24">
                <source srcset="img/banner-cinema.jpg" class="img-fluid" media="(min-width:992px)" alt="Temos uma foto de capa do filme Indiana Jones">
                <img src="img/indiana-jones.jpg" class="img-fluid" alt="Temos uma foto de capa do filme Indiana Jones">
          </picture>
        </a>
        <p tabindex="25">Fonte imagem em https://www.nerdview.com.br/2022/12/asista-ao-trailer-oficial-de-indiana.html</p>
        <p tabindex="26">Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino</p>
        <a href="noticia-filme.php?cod=1" class="cor-botao col-12 col-lg-2 text-center col-sm-7 m-1 text-decoration-none text-light" tabindex="27" id="categoria-lancamento-indiana-jones" aria-labelledby="desc-categoria-filme categoria-lancamento-indiana-jones">LANÇAMENTO</a>
        <a href="noticia-filme.php?cod=1" class="cor-botao col-12 col-lg-2 text-center col-sm-3 m-1 text-decoration-none text-light" tabindex="28" id="categoria-acao-indiana-jones" aria-labelledby="desc-categoria-filme categoria-acao-indiana-jones">AÇÃO</a> 
        <a class="col-12 text-end" href="noticia-filme.php?cod=1" tabindex="29" aria-labelledby="desc-ver-mais-topico titulo-artigo-1">Ler Mais</a>
        <i class="bi bi-circle cor-letra col-1"></i>
        <i class="bi bi-circle cor-letra col-1" ></i>
        <i class="bi bi-circle cor-letra col-1"></i>
      </article>
    </section>
    <section class="row" id="streamming">
      <h2 class="cor-letra" tabindex="30">STREAMING</h2> 
      <figure class="col-12 col-sm-4 col-lg-4 text-center" tabindex="31"><!--col <= 576px; col-sm >=576px col-lg >=992px -->
        <img src="img/prime-video.png " class="img-fluid border" alt="Aqui temos um logo da plataforma streaming Prime Video">
        <figcaption class="row justify-content-center">
          <a href="streaming.php?#streaming" class="text-decoration-none text-light cor-botao col-5 text-center" tabindex="32" id="prime-video" aria-labelledby="desc-opcoes-conteudo prime-video">PRIME VIDEO</a>
        </figcaption>
      </figure>
      <figure class="col-12 col-sm-4 col-lg-4 text-center" tabindex="33">
        <img src="img/netflix.png" class="img-fluid border" alt="Aqui temos um logo da plataforma streaming Netflix">
        <figcaption class="row justify-content-center">
          <a href="streaming.php?#streaming" class=" cor-botao col-5 col-lg-5 text-center col-sm-10 m-1 text-decoration-none text-light" tabindex="34"id="netflix" aria-labelledby="desc-opcoes-conteudo netflix">NETFLIX</a>
        </figcaption>
      </figure>
      <figure class="col-12 col-sm-4 col-lg-4 border text-center" tabindex="35">
        <img src="img/disney-plus.png" class="img-fluid border " alt="Aqui temos um logo da plataforma streaming Disney Plus">
        <figcaption class="row justify-content-center">
          <a href="streaming.php?#streaming" class=" cor-botao col-5 col-lg-5 text-center col-sm-10 m-1 text-decoration-none text-light" tabindex="36" id="disneyplus" aria-labelledby="desc-opcoes-conteudo disneyplus">DISNEY PLUS</a>
        </figcaption>
      </figure>
    </section>
    <section class="row" id="literatura">
      <h2 class="cor-letra" tabindex="37">LITERATURA - FILMES INSPIRADOS EM LIVROS</h2>
      <article class="col-12 col-sm-6 col-lg-3 p-1 text-center">
        <figure tabindex="38">
          <img src="img/jogador-n1.jpg" alt="Aqui temos a capa do filme jogador numero um">
          <figcaption>Jogador Nº 1</figcaption>
        </figure>
        <hgroup tabindex="39">
          <h4 class="cor-letra text-start" id="titulo-artigo-2">Jogador Nº 1 | Crítica</h4>
          <p class="cor-letra-D2D2D2 text-start">A volta do Steven Spielberg moleque</p>
        </hgroup>
        <p class="text-start">Por <a href="../autores.php?#omelete" tabindex="41" aria-labelledby="desc-artigo autor-1 data-5">Omelete</a> <time datetime="2018-03-19">19/03/2018</time><!--https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica--></p>
        <p class="text-start" tabindex="42">Ninguém melhor que Steven Spielberg para levar às telas a adaptação de Jogador Nº 1 de Ernest Cline.
          O cineasta, afinal, é a maior influência (o maior responsável, na verdade) 
          por tudo aquilo que inspirou o autor.
        </p>
        <a href="artigo-literatura.php?cod=1#noticia-filme" class="d-block text-end" tabindex="43" aria-labelledby="desc-ver-mais-topico titulo-artigo-2">Ler Mais</a>
      </article>  
      <article class="col-12 col-sm-6 col-lg-3 p-1 text-center">
        <figure tabindex="44">
          <img src="img/harry-potter.jpg" alt="Aqui temos a capa do filme Harry Potter">
          <figcaption class="text-center">Harry Potter</figcaption>
        </figure>
        <h5 class="cor-letra text-start" id="titulo-artigo-3"tabindex="45">Harry Potter é a a saga do órfão bruxo criada por J.K. Rowling e iniciada em 1997.</h5>
        <p class="text-start">Por <a href="../autores.php?#omelete" tabindex="47" aria-labelledby="desc-artigo autor-1 data-6">Omelete.</a>  <date datetime="2022-12-04">04/12/2022</date></p><!-- https://www.omelete.com.br/harry-potter?gclid=EAIaIQobChMI3Kaew5_g-wIVFWSRCh0sSAh2EAAYASAAEgLR_vD_BwE -->
        <p class="text-start" tabindex="48">
          Depois dos oito filmes baseados nos livros, a franquia agora se prepara para 
          lançar Animais Fantásticos e Onde Habitam, que adapta o livro didático 
          no mundo de Harry Potter que cataloga 75 espécies de criaturas 
          mágicas pelos cinco continentes.
        </p>
        <a href="artigo-literatura.php?cod=2#noticia-filme" class="text-end d-block" tabindex="49" aria-labelledby="desc-ver-mais-topico titulo-artigo-3">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-3 p-1">
        <figure class="text-center" tabindex="50">
          <img src="img/jogos-vorazes.jpg" alt="Aqui temos a capa do filme Jogos Vorazes">
          <figcaption>Jogos Vorazes</figcaption>
        </figure>
        <hgroup tabindex="51">
          <h4 class="cor-letra" id="titulo-artigo-4">Jennifer Lawrence descarta papéis em grandes franquias: "Velha demais"</h4>
          <p class="cor-letra-D2D2D2">Estrela de X-Men e Jogos Vorazes deve se concentrar em títulos independentes</p>
        </hgroup>
        <p>Por <a href="../autores.php?#caiocolleti" tabindex="53" aria-labelledby="desc-artigo autor-4 data-7">Caio Coletti</a><date datetime="2022-10-08">08/10/2022</date></p><!-- https://www.omelete.com.br/autores/caio-coletti-->
        <p tabindex="54">
          Não espere ver Jennifer Lawrence de volta às grandes franquias hollywoodianas. Participando do BFI London Film Festival [via Deadline], ela explicou por que deve se concentrar em projetos independentes daqui em diante.
        </p>
        <a href="artigo-literatura.php?cod=3#noticia-filme" class="d-block text-end" tabindex="55" aria-labelledby="desc-ver-mais-topico titulo-artigo-4">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-3 p-1 text-center">
        <figure tabindex="56">
          <img src="img/senhor-dos-aneis.jpg" alt="Aqui temos a foto de capa do filme senhor dos aneis">
          <figcaption>Senhor dos Anéis</figcaption>
        </figure>
        <hgroup tabindex="57">
          <h4 class="cor-letra text-start" id="titulo-artigo-5">Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja</h4>
          <p class="cor-letra-D2D2D2 text-start">Personagens dos atores não foram revelados</p>
        </hgroup>
        <p class="text-start">Por <a href="../autores.php?#omelete" tabindex="59" aria-labelledby="desc-artigo autor-1 data-8">Omelete.</a><date datetime="2022-10-28">28/10/2022</date></p>
        <p class="text-start" tabindex="60">O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada. </p>
        <a href="artigo-literatura.php?cod=4#noticia-filme" class="d-block text-end" tabindex="61" aria-labelledby="desc-ver-mais-topico titulo-artigo-5">Ler Mais</a>
      </article>
    </section>
    <section  class= "row" id="entrevistas">
      <h2 class="cor-letra" tabindex="62">ENTREVISTAS</h2>
      <article class="col-12 col-sm-6 col-lg-3 text-center">
          <h2 class="cor-letra" tabindex="63" id="titulo-artigo-6">Jason Stham</h2>
          <figure tabindex="64">
            <img src="img/jason-statham.jpg" class="img-fluid" alt="Foto Autor">
            <figcaption>Foto : Jason Stahan</figcaption>
          </figure>
          <p class="text-start" tabindex="65">Conhecido como o cara durão de Carga Explosiva, Os Mercenários e Velozes & Furiosos 7, Jason Statham fez poucas comédias em sua carreira. </p>
          <a href="entrevista-com-autores.php" class="text-end d-block" tabindex="66" aria-labelledby="desc-ver-mais-topico titulo-artigo-6">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-3 text-center">
        <h2 class="row cor-letra" tabindex="67" id="titulo-artigo-7">Camille Rowe</h2>
        <figure tabindex="68">
          <img src="img/camille-rowe.png" class="img-fluid" alt="Foto Autor">
          <figcaption class="d-none">Foto da atriz Camille Rowe</figcaption>
        </figure>
        <p class="text-start" tabindex="69">Camille Rowe a protagonista do primeiro fashion film Journeys by Mango a apresentar a coleção feminina mais em</p>
        <a href="entrevista-com-autores.php" class="d-block text-end" tabindex="70" aria-labelledby="desc-ver-mais-topico titulo-artigo-7">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-3 text-center">
        <h2 class="row cor-letra" tabindex="71" id="titulo-artigo-8">Vin Diesel</h2>
        <figure class="row" tabindex="72">
          <img src="img/vin-diesel.jpg" class="img-fluid" alt="Foto Autor">
          <figcaption class="d-none">Foto do ator Vin Diesel</figcaption>
        </figure>
        <p class="text-start" tabindex="73">Vin diesel fala sobre o filme Reativado que estreiou no dia 19 de janeiro.</p>
        <a href="entrevista-com-autores.php" class="d-block text-end" tabindex="74" aria-labelledby="desc-ver-mais-topico titulo-artigo-8">Ler Mais</a>
      </article>
      <article class="col-12 col-sm-6 col-lg-3 text-center">
        <h2 class="row cor-letra" tabindex="75" id="titulo-artigo-9">Audrey Tautou</h2>
        <figure tabindex="76">
          <img src="img/audrey-tautou.png" class="img-fluid" alt="Foto Autor">
          <figcaption class="d-none">Foto da atriz Audrey Tautou</figcaption>
        </figure>
        <p class="text-start" tabindex="77">Audrey Justine Tautou é uma atriz francesa. Reconhecida na França por sua atuação em Vénus beauté que lhe rendeu o prêmio César de Atriz Revelação</p>
        <a href="entrevista-com-autores.php" class="d-block text-end" tabindex="78" aria-labelledby="desc-ver-mais-topico titulo-artigo-9">Ler Mais</a>
      </article>
    </section>

    <?php include "../desc-detalhada-para-deficiente-visual.php" ?>
    
  </div>
<?php include "../footer.php"?>