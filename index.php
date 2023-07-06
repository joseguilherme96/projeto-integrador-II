<!--Validado na w3-->
<?php $title = "Home";?>
<?php include "header.php";?>

    <main class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link  cor-letra" tabindex="10">Home / </a></li>
            </ul>
        </nav>

        <?php include "barra-de-pesquisa.php";?>

        <section class="row cinemamt-5">
            <hgroup class="row  mt-5" tabindex="13">
                <h2 class="cor-letra text-start py-3">CINEMA</h2>
                <p class="align-items-center">Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos principais filmes exclusivos da plataforma streamming, entrevistas.</p>
            </hgroup>
            <figure class="col-12 col-sm-12 col-lg-6 cor-fundo" tabindex="14">
                <img src="cinema/img/artigos/banner-senhor-dos-aneis.jpg" class="img-fluid " tabindex="14" alt="Nesta foto a três atores do senhor dos aneis">
                <figcaption class="fs-6"><b>Fonte imagem</b> : <a href="https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio"  tabindex="15" aria-describedby="desc-link1">https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio</a></figcaption>
            </figure>
            <article class="col-12 col-sm-12 col-lg-6 text-end cor-fundo">
                <h2 class="text-start cor-letra" tabindex="15" id="cinema-topico">
                    <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja
                </h2>
                <h5 class="text-start" tabindex="16">Personagens dos atores não foram revelados</h5>
                <p class="text-start">Por <a href="autores.php?#omelete" tabindex="18" aria-describedby="desc-artigo autor-1 data-1">omelete</a> <time datetime="2022-12-01">01/12/2022</time></p>
                <p class="text-start" tabindex="19">O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada.</p>
                <a class="btn text-decoration-none text-light col-2" style="background-color:#E03616" href="cinema/artigo-literatura.php?cod=4" role="button" tabindex="20" aria-describedby="desc-ver-mais-topico cinema-topico">Ler mais</a>
            </article>  
        </section>
        <section class="row cor-fundo mt-5 mb-5">
            <h2 class="py-3 cor-letra" tabindex="21">HQS</h2>
            <figure class="col-12 col-sm-12 col-lg-6 " tabindex="22">
                <img src="img/hqs.jpg" class="img-fluid " alt="Aqui temos fotos de capa revistas de historia em quadrinhos">
            </figure>
            <article class="col-12 col-sm-12 col-lg-6 text-end">
                <h2 class="cor-letra text-start" tabindex="23" id="hqs-topico-1">
                    <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>Guia dos lançamentos de quadrinhos na CCXP22
                </h2>
                <p class="text-start" tabindex="24">Após três anos, a CCXP volta a ser presencial e é aguardada com ansiedade por fãs e profissionais.O evento ocorre entre 1º e 4 de dezembro e, como sempre, um dos destaques será o Artists' Valley (antigo Artists' Alley), que receberá mais de 482 autores de todo o Brasil e do exterior, divididos em 356 mesas vendendo seus trabalhos.</p>
                <a class="btn text-light d-inline col-lg-1 m-5" style="background-color:#E03616" href="HQS/indexhqs.php" role="button" tabindex="25" aria-describedby="desc-ver-mais-topico hqs-topico-1">Ver mais</a>
            </article>
            <article class="row my-3 cor-fundo justify-content-end">
                <h2 class="d-inline cor-letra text-start" tabindex="26" id="hq-topico-2">
                    <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>Desenhão: batalha de desenhos ao vivo premiará artista com um iPad Pro
                </h2>
                <p tabindex="27">No próximo sábado, 26 de novembro, a partir das 19h, acontece o Desenhão, uma festa que vai reunir artistas, fãs dos quadrinhos nacionais e amantes da cultura geek no geral numa oportunidade de juntar as pessoas para celebrar, debater assuntos e fazer arte.</p>
                <p>Por <a href="autores.php?#samirnaliato" tabindex="29" aria-describedby="desc-artigo autor-2 data-2">Samir Naliato</a><time datetime="2022-12-01">01/12/2022</time></p>
                <figure class=" col-sm-12 col-lg-12 text-center p-1">
                    <img src="  HQS/img/u1.jpg" class="img-fluid" alt="Primeiro desenhão arte mais Rolê" tabindex="32">
                    <figcaption>Revista Primeiro Desenhão</figcaption>
                </figure>
                <a class="btn text-light d-inline col-3 col-lg-1 m-5" style="background-color:#E03616" href="HQS/ultimasnoticias.php" role="button" tabindex="33" aria-describedby="desc-ver-mais-topico hq-topico-2">Ver mais</a>
            </article>
        </section>
        <section class="row cosplay cor-fundo justify-content-end mt-5">
            <h2 class=" py-1 cor-letra" tabindex="34" id="cosplay-topico">
                <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>COSPLAY
            </h2>
            <figure class="col-12 col-sm-6 col-lg-3 text-center pt-2 " tabindex="35">
                <img src="cosplay/imgcosplay/kodia.jpg " alt="Temos uma mulher segurando uma espada">
            </figure>
            <article class="col-12 col-sm-6 col-lg-3 pt-2 pb-5 text-start ">
                <h6 class="cor-letra" tabindex="36"> Ahsoka Tano - Star Wars </h6> 
                <p tabindex="37">Incrivel Cosplay do personagem "Ahsoka Tano" feita por uma fã da grande série Star Wars surpreendeu nas redes sociais, a fã descreve "Esse cosplay foi um verdadeiro desafio pra mim, principalmente a maquiagem, e aprendi muito fazendo.Mal posso esperar para usá-la na Star Wars Celebration em Londres no ano que vem.</p>
            </article>
            <figure class="col-12 col-sm-6 col-lg-3 pt-2 text-center" tabindex="38"> 
                <img src="cosplay/imgcosplay/arlequina.jpg" alt="Temos Deadpool segurando carregando Arlequina nas costas">
            </figure>
            <article class="col-12 col-sm-6 col-lg-3  pt-2 pb-5 text-start ">
                <h6 class="cor-letra" tabindex="39">Deadpool e Arlequina </h6>    
                <p tabindex="40">Deadpool e Arlequina juntos em incrivel cosplay feito por fã, quem conhece sabe que os dois personagem são de casas de super-herois diferentes, então essa amizade é bem improvavel acontecer um dia, em algum filme, mas os fãs quebram barreiras. </p>
            </article>
            <a class="btn text-decoration-none text-light col-3 col-lg-1 m-5" style="background-color:#E03616" href="cosplay/cosplay.php" role="button" tabindex="41" aria-describedby="desc-ver-mais-topico cosplay-topico">Ver mais</a>
        </section>
        <section class="row cor-fundo my-5 justify-content-end">
            <h2 class="cor-letra py-3" tabindex="42">SERIES & TV</h2>
            <figure class="col-12 col-sm-12 col-lg-6  p-1" tabindex="43">
                <img src="img/casaescuro.png" class="img-fluid mt-4" alt="Cena de Game of Thrones, criticada por fãs por ser escura demais.">
                <figcaption>Game of Thrones: episódio escuro</figcaption>
            </figure>
            <article class="col-12 col-sm-12 col-lg-6 p-1">
                <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="d-inline cor-letra text-start" tabindex="44" id="series-tv-topico-1">A Casa do Dragão: fãs reclamam de episódio escuro...</h2>
                <p tabindex="45">Os fãs de Game of Thrones tiveram um déjà vu nada agradável ao assistirem o sétimo episódio de A Casa do Dragão, isso porque muitos comentaram que as cenas estavam pouco iluminadas, causando dificuldade de enxergar...</p>
                <p>Por <a class="text-decoration-none cor-letra " href="autores.php?#giovannabreve" tabindex="46" aria-describedby="desc-artigo autor-3 data-3">Giovanna Breve </a><time datetime="2022-10-03">03/10/2022.</time></p>
            </article>
            <a class="btn text-decoration-none text-light col-3 col-lg-2 mx-5" style="background-color:#E03616" href="seriesetv/criticas.php" role="button" tabindex="47" aria-describedby="desc-ver-mais-topico series-tv-topico-1">Ver mais</a>
            <article class="col-12 col-sm-12 col-lg-12 text-center">
                <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="d-inline cor-letra text-start" tabindex="48" id="series-tv-topico-2">Katherine McNamara revela paixão pela comunidade e fãs brasileiros na CCXP22...</h2>
                <figure class=" col-sm-12 col-lg-12 text-center p-1">
                    <img src="img/katherine.png" class="img-fluid" alt="Imagem de katherine McNamara na CCXP22,usando uma jaqueta vermelha,segurando o microfone, sorrindo e acessenando." tabindex="51">
                    <figcaption>Katherine McNamara revela paixão pela comunidade e fãs brasileiros na CCXP22</figcaption>
                </figure>
                <p class="text-start" tabindex="52">Katherine McNamara trouxe simpatia e encantou o público do Palco Thunder by Cinemark Club durante a CCXP22. Em uma conversa com Maria Bopp, a artista contou sobre a carreira, a paixão pelo Brasil...</p>
                <p>Por <a class="text-decoration-none cor-letra" href="autores.php?#giovannabreve" tabindex="54" aria-describedby="desc-artigo autor-3 data-4">Giovanna Breve</a><time datetime="2022-12-03">03/12/2022</time>.</p>
            </article>
            <a class="btn text-decoration-none text-light col-3 col-lg-2" style="background-color:#E03616" href="seriesetv/atores.php" role="button" tabindex="55" aria-describedby="desc-ver-mais-topico series-tv-topico-2">Ver mais</a>
        </section>

<?php include "desc-detalhada-para-deficiente-visual.php" ?>

    </main>

<?php include "footer.php" ?>