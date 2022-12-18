<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/tema.css">
    <title>Home</title>
</head>
<body>
<?php include "nav.php"?>
    <div class="container">
    
    <div class="row">
      <div class="col-12 cor-letra">
        <a href="index.php" class="text-decoration-none cor-letra">Home</a> / 
      </div>
    </div>
    <?php include "barra-de-pesquisa.php";?>
    <section class="cinemamt-5">
        <div class="row  mt-5">
            <div class="col-12 col-sm-12 col-lg-12">
                <h2 class="cor-letra text-start py-3">CINEMA</h2>
            </div>
            <div class="col-12 col-sm-12 col-lg-12 ">
                <p class="align-items-center">
                Aqui vamos trazer noticias, materias e entrevistas exclusivas sobre o mundo do cimema. As noticias sobre filmes incluem lançamentos, noticias de streaming focado nos principais filmes exclusivos da plataforma streamming, entrevistas.
                </p>
            </div>
        </div>
        <div class="row cor-fundo">
            <div class="col-12 col-sm-12 col-lg-6 py-lg-5 ">
                <figure>
                <img src="cinema/img/artigos/banner-senhor-dos-aneis.jpg" class="img-fluid ">
                <figcaption class="fs-6"><b>Fonte imagem</b> : https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio</figcaption>    
            </figure>
            </div>
            <div class="cor-fundo col-12 col-sm-12 col-lg-6 " >
                <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="cor-letra d-inline">Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja</h2>
                            <h5 class="cor-letra-D2D2D2">Personagens dos atores não foram revelados</h5>
                            <h6>Por <a href="autores.php?#omelete">omelete</a>  01/12/2022</h6>
                <p class="">
                O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada.
                </p>
                <div class="text-end pb-3">
                <a class="btn text-decoration-none text-light" style="background-color:#E03616" href="cinema/artigo-literatura.php?cod=4" role="button">Ver mais</a>
            </div>
            </div>
        </div>
    </section>
    <section>
    <h2 class="py-3 cor-letra" >HQS</h2>
        <div class="row text-center cor-fundo mt-5">
            
            <div class="col-12 col-sm-12 col-lg-6 p-1">
                <img src="img/hqs.jpg" class="img-fluid ">
            </div>
            <div class="col-12 col-sm-12 col-lg-6 p-1 text-start">
                <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="d-inline cor-letra text-start">Guia dos lançamentos de quadrinhos na CCXP22</h2>
                <p>
                Após três anos, a CCXP volta a ser presencial e é aguardada com ansiedade por fãs e profissionais. 
                O evento ocorre entre 1º e 4 de dezembro e, como sempre, um dos destaques será o Artists' Valley (antigo Artists' Alley), que receberá mais de 482 autores de todo o Brasil e do exterior, divididos em 356 mesas vendendo seus trabalhos. 

                </p>
                <div class="text-end pb-3">
                    <a class="btn text-light" style="background-color:#E03616" href="HQS/materia.php" role="button">Ver mais</a>
                </div>
            </div>
        </div>
        <div class="row my-3 cor-fundo">
            <div class=" text-start col-12 col-sm-12 col-lg-12">
            <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="d-inline cor-letra text-start">Desenhão: batalha de desenhos ao vivo premiará artista com um iPad Pro</h2>
                <p>
                No próximo sábado, 26 de novembro, a partir das 19h, acontece o Desenhão, uma festa que vai reunir artistas, fãs dos quadrinhos nacionais e amantes da cultura geek no geral numa oportunidade de juntar as pessoas para celebrar, debater assuntos e fazer arte.
                <h6>Por <a href="autores.php?#samirnaliato">Samir Naliato</a>  01/12/2022</h6> 
            </p>
                
            </div>  
            <div class=" col-sm-12 col-lg-12 text-center p-1">
                <picture >
                    <source srcset="  HQS/img/u1.jpg" class="img-fluid" media="(min-width:992px)">
                    <source srcset="  HQS/img/u1.jpg"  class="img-fluid" media="(min-width:576px)">
                    <img src="  HQS/img/u1.jpg"  class="img-fluid">
                </picture>
            </div>
            <div class="text-end pb-3">
                <a class="btn text-light"  style="background-color:#E03616" href="HQS/ultimasnoticias.php" role="button">Ver mais</a>
            </div>
             
        </div>
    </section>
    <section class="cosplay cor-fundo">
    <h2 class=" py-1 cor-letra">COSPLAY</h2>
    <section class="row pt-1 "> 

      <div class="col-12 col-sm-6 col-lg-3 text-center pt-2 "> 
      <img src="cosplay/imgcosplay/kodia.jpg " alt="Ahsoka Tano - Star Wars
Incrivel Cosplay do personagem Ahsoka Tano feita por uma fã da grande série Star Wars surpreendeu nas redes sociais, a fã descreve *Esse cosplay foi um verdadeiro desafio pra mim, principalmente a maquiagem, e aprendi muito fazendo.Mal posso esperar para usá-la na Star Wars Celebration em Londres no ano que vem." >
      </div>  

      <div class="col-12 col-sm-6 col-lg-3 pt-2 pb-5 text-start "> 
        <p> <h6 class="cor-letra"> Ahsoka Tano - Star Wars </h6> Incrivel Cosplay do personagem "Ahsoka Tano" feita por uma fã da grande série Star Wars surpreendeu nas redes sociais, a fã descreve "Esse cosplay foi um verdadeiro desafio pra mim, principalmente a maquiagem, e aprendi muito fazendo.Mal posso esperar para usá-la na Star Wars Celebration em Londres no ano que vem. 
        </p>
      </div>
   
      <div class="col-12 col-sm-6 col-lg-3 pt-2 text-center"> <img src="cosplay/imgcosplay/arlequina.jpg" alt="Deadpool e Arlequina
Deadpool e Arlequina juntos em incrivel cosplay feito por fã, quem conhece sabe que os dois personagem são de casas de super-herois diferentes, então essa amizade é bem improvavel acontecer um dia, em algum filme, mas os fãs quebram barreiras. ">
      </div>  

      <div class="col-12 col-sm-6 col-lg-3  pt-2 pb-5 text-start " > 
        <p> <h6 class="cor-letra">Deadpool e Arlequina </h6> Deadpool e Arlequina juntos em incrivel cosplay feito por fã, quem conhece sabe que os dois personagem são de casas de super-herois diferentes, então essa amizade é bem improvavel acontecer um dia, em algum filme, mas os fãs quebram barreiras. </p>
      </div>
      <div class="col-12">
      <div class="text-end pb-3">
                <a class="btn text-decoration-none text-light" style="background-color:#E03616" href="cosplay/cosplay.php" role="button">Ver mais</a>
            </div>
        </div>

    </section>
    
        <!--<div class="row cor-fundo mt-5">
            <div class="col-12 col-sm-12 col-lg-12">
                <p>
                    Lorem ipsum dolor sit amet, consecteturLorem ipsum
                    dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
                    consecteturLorem ipsum dolor sit amet, consectetur
                </p>
            </div>
            <div class=" col-sm-12 col-lg-12 text-center p-1">
                <picture >
                    <source srcset="https://via.placeholder.com/1700x320" class="img-fluid" media="(min-width:992px)">
                    <source srcset="https://via.placeholder.com/821x229" class="img-fluid" media="(min-width:576px)">
                    <img src="https://via.placeholder.com/299x119" class="img-fluid">
                </picture>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 p-1">
                <img src="https://via.placeholder.com/600x350" class="img-fluid ">
            </div>
            <div class="col-12 col-sm-12 col-lg-6 p-1 text-start">
            <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="d-inline cor-letra text-start">Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consecteturLorem ipsum
                    dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
                    consecteturLorem ipsum dolor sit amet, consectetur
                    Lorem ipsum dolor sit amet, consecteturLorem ipsum
                    dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
                    consecteturLorem ipsum dolor sit amet, consectetur
                </p>
                <div class="text-end pb-3">
                <a class="btn" style="background-color:#E03616" href="  cinema/index.php" role="button">Ver mais</a>
            </div>
            </div>-->
        
    </section>
    <section>
        <h2 class="cor-letra py-3">SERIES & TV</h2>
        <div class="row cor-fundo my-5">
            <div class="col-12 col-sm-12 col-lg-6  p-1">
                <img src="img/casaescuro.png" class="img-fluid mt-4">
            </div>
            <div class="col-12 col-sm-12 col-lg-6 p-1">
            <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="d-inline cor-letra text-start">A Casa do Dragão: fãs reclamam de episódio escuro...</h2>
                <p>Os fãs de Game of Thrones tiveram um déjà vu nada agradável ao assistirem o sétimo episódio de A Casa do Dragão, 
                isso porque muitos comentaram que as cenas estavam pouco iluminadas, causando dificuldade de enxergar...
                </p>
                <a class="text-decoration-none cor-letra" href="autores.php?#giovannabreve"><p>Giovanna Breve,03/10/2022.</p></a>
            </div> 
            <div class="text-end pb-3">
                <a class="btn text-decoration-none text-light" style="background-color:#E03616" href="seriesetv.php/criticas.php" role="button">Ver mais</a>
            </div>
            <div class="col-12 col-sm-12 col-lg-12">
                <i class="bi bi-square-fill fs-1 d-inline cor-letra"></i>
                <h2 class="d-inline cor-letra text-start">Katherine McNamara revela paixão pela comunidade e fãs brasileiros na CCXP22...</h2>
            </div>
            <div class=" col-sm-12 col-lg-12 text-center p-1">
                <picture >
                    <source srcset="img/katherine.png" class="img-fluid" media="(min-width:992px)">
                    <source srcset="img/katherine.png" class="img-fluid" media="(min-width:576px)">
                    <img src="img/katherine.png" class="img-fluid">
                </picture>
            </div>
            <div class="col-12 col-sm-12 col-lg-12">
                <p>
                Katherine McNamara trouxe simpatia e encantou o público do Palco Thunder by Cinemark Club durante a CCXP22. 
                Em uma conversa com Maria Bopp, a artista contou sobre a carreira, a paixão pelo Brasil...
                </p>
                <a class="text-decoration-none cor-letra" href="autores.php?#giovannabreve"><p>Giovanna Breve,03/12/2022.</p></a>
            </div>
        
            <div class="text-end pb-3">
                <a class="btn text-decoration-none text-light" style="background-color:#E03616" href="seriesetv.php/atores.php" role="button">Ver mais</a>
            </div>
        </div>
    </section>
    </div>
<?php include "rodape.php"?>
</body>
</html>