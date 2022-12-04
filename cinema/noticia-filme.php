<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia Cinema</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/tema.css">
</head>
<body>
<?php include "../nav.php"?>
    <div class="container ">
        
        <div class="row">
            <div class="col-12 cor-letra">
                <a href="../index.php" class="cor-letra">Home</a> / <a href="index.php" class="cor-letra">Cinema</a> / <a href="filmes.php" class="cor-letra">Filmes</a> / <a href="noticia-filme.php" class="cor-letra">Noticia</a> 
            </div>
        </div>
        <?php include "../barra-de-pesquisa.php";?>
        <article>
            <div class="row justify-content-center text-center">
                <h1 class="cor-letra">Noticia Filme</h1>
            </div>
            <?php if(isset($_GET['cod'])){
                    if($_GET['cod']==1){
            ?>
        <div class="row text-center">
            <div class="col-12 col-sm-12 col-lg-12">
            <img src="img/banner-cinema.jpg" class="img-fluid" alt="Capa Filme">
            </div>
        </div>
        <section>
        <div class="row justify-content-center">
                <div class="col-lg-5 py-3">
                    <h5>Indiana Jones e o Chamado do Destino ganha título e trailer na CCXP22</h5>
                    <h6>Por <a href="../autores.php">NICO GARÓFALO</a>  01/12/2022</h6>
                    <!--https://www.omelete.com.br/autores/nico-garofalo -->
                </div>
                <div class="col-lg-3 py-4">
                    <div class="row ">
                        <div class="col-6 border">LANÇAMENTO</div>
                        <div class="col-3 border">AÇAO</div>
                    </div>
                </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <p>
                    Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino. Assista acima:
                </p>
                <p>
                O quinto Indiana Jones contará com o retorno de Harrison Ford ao lado de um elenco repleto de estrelas formado por Antonio Banderas, Phoebe Waller-Bridge, Mads Mikkelsen, Boyd Holbrook e Thomas Kretschmann.
                </p>
                <p>
                A direção ficou com James Mangold, de Logan e Ford vs. Ferrari. Esta será a primeira vez que um filme da franquia Indiana Jones não é dirigido por Steven Spielberg. John Williams, que criou o tema para Os Caçadores da Arca Perdida em 1981, também está encarregado da trilha sonora do novo longa.
                </p>
                <p>
                Indiana Jones e o Chamado do Destino deve chegar aos cinemas em 30 de junho de 2023.
                </p>
                <p>
                Nomes que confirmados para a CCXP22 incluem os atores Keanu Reeves, Zoë Saldana, Pedro Pascal, Paul Rudd, Evangeline Lilly, Jonathan Majors, Jenna Ortega, Gwendoline Christie, Noah Centineo, Kirby Howell-Baptiste e Bella Ramsey, o elenco do Porta dos Fundos, os cineastas Dave Filoni e Jon Favreau, os produtores Kevin Feige e Jon Landau, o streamer Gaulês, os quadrinistas Jim Starlin, Mark Waid, Aimée de Jongh, Laerte, FabienToulmé, Marcello Quintanilha, Jim Cheung e muitos outros.
                </p>
                <p>
                A CCXP22 acontece de 1 a 4 de dezembro e os ingressos podem ser adquiridos no site Mundo Ticket.
                </p>    
            </div>
        </div>
        <!--<div class="row justify-content-center">
            <div class="col-8">
                <p>Disponíveis</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row justify-content-start">
                    <div class="col-8 border">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Prime Video">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Prime Netflix">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Disney Plus">
                    </div>
                    <div class="col-4 text-end">
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row justify-content-center">
            <div class="col-8">
                <h3>Referências Bibliograficas</h3>
                <p>
                <a href="https://www.omelete.com.br/ccxp/indiana-jones-5-e-o-chamado-do-destino-trailer-ccxp22">
                    https://www.omelete.com.br/ccxp/indiana-jones-5-e-o-chamado-do-destino-trailer-ccxp22
                </a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <p>  </p>
            </div>
        </div>  
        </section>
        <?php } ?>

        <?php  if($_GET['cod']==2){?>
            <div class="row text-center">
            <div class="col-12 col-sm-12 col-lg-12">
            <img src="img/filmes/banner-marvel.jpg" class="img-fluid" alt="Capa Filme">
            </div>
        </div>
            <section>
        <div class="row justify-content-center">
                <div class="col-lg-8 py-3">
                    <h4 class="cor-letra">CCXP22: painel do Marvel Studios promete um 2023 cheio de despedidas</h4>
                    <h5 class="cor-letra">Apresentação do estúdio no Palco Thunder mostrou prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3</h5>
                    <h6>Por <a href="../autores.php">NICO GARÓFALO</a>  01/12/2022</h6>
                    <!--https://www.omelete.com.br/autores/nico-garofalo -->
                </div>
               
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
            <p>Como não podia deixar de ser, o painel do Marvel Studios no Palco Thunder by Cinemark Club na CCXP22 contou com muita alegria e energia do público, que conseguiu assistir às novidades trazidas por Kevin Feige para os fãs brasileiros. Mas, pelo que as novas prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3 deram a entender, 2023 não vai ser nem um pouco alegre para os heróis do MCU. Os conteúdos lançados nesta quinta-feira (1º) no São Paulo Expo pintam um futuro para lá de trágico para Scott Lang (Paul Rudd), Peter Quill (Chris Pratt) e suas respectivas famílias.</p>

            <p>   Ao contrário da aura despretensiosa e cômica dos filmes anteriores, as cenas reveladas de Homem-Formiga e a Vespa: Quantumania parecem preparar os heróis titulares para uma jornada de sacrifícios. As prévias do terceiro longa da franquia parecem colocar um alvo nas costas de, pelo menos, três de seus principais personagens: Scott, Hank Pym (Michael Douglas) e Janet Van Dyne (Michelle Pfeiffer). Os três, aliás, já morreram nos gibis e, considerando suas jornadas no MCU até agora, não é difícil de ver um deles deixando a série cinematográfica de forma trágica – e brutal – ao fim desta trilogia.</p>

            <p>    Por outro lado, essa prévia também deixou claro que nenhuma morte de Quantumania é necessariamente permanente. Quando Scott avisa Kang (Jonathan Majors) que é um Vingador, o vilão, inabalado, pergunta se já o matou alguma vez, para total confusão do atual Homem-Formiga. A pergunta d’O Conquistador deixa no ar a possibilidade de que qualquer que seja o personagem a partir desta para uma melhor no novo filme, não fica descartada a possibilidade de ele retornar ao MCU através de uma de suas variantes.</p>

            <p>   O próximo ano também não será nada bom para os membros dos Guardiões da Galáxia. O novo trailer do volume 3 tem um clima muito mais soturno que o dos primeiros dois filmes, focando muito mais em momentos de melancolia de seus protagonistas do que no humor escrachado típico das produções de James Gunn. Só nessa prévia, Drax (Dave Bautista) aparece sendo carregado com um buraco em seu peito, Rocket (Bradley Cooper) é visto ferido e ofegante em uma maca dizendo que quer viajar uma última vez com seu grupo, o Senhor das Estrelas aparece desacordado nos braços da Nebulosa (Karen Gillan) e Mantis (Pom Klementieff) parece gritar de luto e horror. Essa sequência de cenas preocupantes dão a certeza de que nenhum dos Guardiões está a salvo.</p>

            <p>  Diferentemente de Quantumania, Guardiões da Galáxia vol. 3 tem sido divulgado como o fim da história do grupo liderado por Quill. Por isso, mesmo que Gunn subverta toda e qualquer expectativa mórbida criada pelo trailer e mantenha toda a equipe atual viva, o longa manterá seu clima de despedida e até mesmo um final feliz se tornará agridoce para quem se apaixonou por estes personagens em 2014.</p>

            <p>  A Saga do Multiverso não tem, até agora, fugido de questões mais sérias como o luto, sentimento que foi central em Pantera Negra: Wakanda Para Sempre, WandaVision, Doutor Estranho no Multiverso da Loucura, Homem-Aranha: Sem Volta Para Casa e até a cômica Gavião Arqueiro. O começo da Fase 5, no entanto, promete elevar os níveis de tragédia e trazer perdas que podem moldar o futuro do MCU.</p>

            <p>   No primeiro dia de CCXP22, a Paramount revelou o primeiro trailer de Transformers: O Despertar das Feras, a data da 3ª temporada de Mandalorian e o primeiro trailer do recém intitulado Indiana Jones e o Chamado do Destino.</p>

            <p>   Nomes que confirmados para a CCXP22 incluem os atores Keanu Reeves, Zoë Saldana, Pedro Pascal, Paul Rudd, Evangeline Lilly, Jonathan Majors, Jenna Ortega, Gwendoline Christie, Noah Centineo, Kirby Howell-Baptiste e Bella Ramsey, o elenco do Porta dos Fundos, os cineastas Dave Filoni e Jon Favreau, os produtores Kevin Feige e Jon Landau, o streamer Gaulês, os quadrinistas Jim Starlin, Mark Waid, Aimée de Jongh, FabienToulmé, Marcello Quintanilha, Jim Cheung e muitos outros.</p>  
                    </div>
        </div>
        <!--<div class="row justify-content-center">
            <div class="col-8">
                <p>Disponíveis</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row justify-content-start">
                    <div class="col-8 border">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Prime Video">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Prime Netflix">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Disney Plus">
                    </div>
                    <div class="col-4 text-end">
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row justify-content-center">
            <div class="col-8">
                <h3>Referências Bibliograficas</h3>
                <p>
                <a href="https://www.omelete.com.br/ccxp/ccxp22-marvel-studios-2023-luto">
                https://www.omelete.com.br/ccxp/ccxp22-marvel-studios-2023-luto
                </a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <p>  </p>
            </div>
        </div>  
        </section>
        <?php }?>
        <?php  if($_GET['cod']==3){?>
            <div class="row text-center">
            <div class="col-12 col-sm-12 col-lg-12">
            <img src="img/filmes/filme-the-last-of-us .jpg" class="img-fluid" alt="Capa Filme">
            </div>
        </div>
            <section>
        <div class="row justify-content-center">
                <div class="col-lg-8 py-3">
                    <h4 class="cor-letra">The Last of Us ganha trailer inédito e emocionante na CCXP22</h4>
                    <h5 class="cor-letra">Série estreia na HBO Max em 15 de janeiro</h5>
                    <h6>Por <a href="../autores.php">GIOVANNA BREVE E NICOLAOS GARÓFALO</a>  03/12/2022</h6>
                    <!--https://www.omelete.com.br/autores/nico-garofalo -->
                </div>
               
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
            <p>The Last of Us, série da HBO Max que adapta o game, ganhou um novo trailer na CCXP22 no Palco Thunder by Cinemark Club. A novidade veio com a presença do elenco de estrelas Pedro Pascal, Bella Ramsey, Gabriel Luna, Merle Dandrigge e os produtores execultivos Craig Mazin e Neil Druckmann. Confira acima.</p>

            <p>A prévia mostra um compilado de imagens de Joel, Ellie e Marlene em cenários bastante conhecidos para os familiarizados com o jogo. As cenas variam entre a cidade de Boston, a floresta, o shopping e, pela primeira vez, vemos de perto um clicker. A trailer foca também nos vínculos e conflitos que Joel enfrenta ao aceitar a missão de levar a Ellie.</p>


            <p>Nos primeiros dias de CCXP22, a Paramount revelou o primeiro trailer de Transformers: O Despertar das Feras, enquanto a Disney trouxe a data da 3ª temporada de Mandalorian e os primeiros trailers de Indiana Jones e o Chamado do Destino e Guardiões da Galáxia Vol. 3. A Maurício de Sousa Produções também anunciou uma série de novidades, e o ator Tenoch Huerta, o Namor de Pantera Negra: Wakanda Para Sempre, deu um show de simpatia.</p>
             </div>
        </div>
        <!--<div class="row justify-content-center">
            <div class="col-8">
                <p>Disponíveis</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row justify-content-start">
                    <div class="col-8 border">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Prime Video">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Prime Netflix">
                        <img src="https://via.placeholder.com/50x50" class="img-fluid" alt="Logo Disney Plus">
                    </div>
                    <div class="col-4 text-end">
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row justify-content-center">
            <div class="col-8">
                <h3>Referências Bibliograficas</h3>
                <p>
                <a href="https://www.omelete.com.br/ccxp/ccxp22-the-last-of-us-trailer-2">
                https://www.omelete.com.br/ccxp/ccxp22-the-last-of-us-trailer-2
                </a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <p>  </p>
            </div>
        </div>  
        </section>

        <?php }?>
        <?php  if($_GET['cod']==4){?>

        <?php }?>
        <?php  if($_GET['cod']==5){?>

        <?php }?>
        <?php } ?>

        </article>
        <section class="row justify-content-center">
        
            <div class="col-8">
                <h2>Ver Mais</h2>
            </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                <h6>Por <a href="">Yasmin</a>  28/10/2022</h6>
            </div>
        </div>
        </section>
    </div>
    <?php include "../rodape.php";?>
</body>
</html>