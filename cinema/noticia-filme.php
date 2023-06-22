<!--Validado na w3-->
<?php $title = "Noticia Filme";?>
<?php include "../header.php"?>

    <div class="container ">
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="../index.php" class="cor-letra">Home / </a></li>
                <li class="nav-item"><a href="index.php" class="cor-letra">Cinema / </a></li>
                <li class="nav-item"><a href="filmes.php" class="cor-letra">Filmes / </a></li>
                <li class="nav-item"><a href="noticia-filme.php" class="cor-letra">Noticia</a></li>
            </ul>
        </nav>

        <?php include "../barra-de-pesquisa.php";?>
        <?php if(isset($_GET['cod'])){?>

        <h2 class="row justify-content-center text-center cor-letra">Noticia Filme</h2>
        <section class="row">

            <?php        
                if($_GET['cod']==1){
            ?>

            <h2 class="cor-letra">Indiana Jones</h2>
            <article class=" row justify-content-center">
                <figure class="col-12 col-sm-12 col-lg-12">
                    <img src="img/banner-cinema.jpg" class="img-fluid" alt="Capa Filme">
                    <figcaption class="text-center">Fonte imagem em https://www.nerdview.com.br/2022/12/asista-ao-trailer-oficial-de-indiana.html</figcaption>
                </figure>   
                <h5 class=" col-10 col-lg-5 my-lg-1 cor-letra">Indiana Jones e o Chamado do Destino ganha título e trailer na CCXP22</h5>
                <div class="col-4 col-lg-2 my-lg-3 border cor-botao text-light">LANÇAMENTO</div>
                <div class="col-2 col-lg-1 my-lg-3 border cor-botao text-light">AÇAO</div>
                <p class="col-8">Por <a href="../autores.php?#nicogarofalo">NICO GARÓFALO</a><time datetime="2022-12-01">01/12/2022</time></p><!--https://www.omelete.com.br/autores/nico-garofalo -->
                <p class="col-8">Indiana Jones está de volta! Durante a CCXP22, o quinto filme do arqueólogo mais amado da cultura pop teve seu primeiro trailer revelado. Além de trazer o retorno de Harrison Ford a um dos papéis mais icônicos de sua carreira depois de 14 anos, a prévia revelou também o título oficial da nova sequência: Indiana Jones e o Chamado do Destino. Assista acima:</p>
                <p class="col-8">O quinto Indiana Jones contará com o retorno de Harrison Ford ao lado de um elenco repleto de estrelas formado por Antonio Banderas, Phoebe Waller-Bridge, Mads Mikkelsen, Boyd Holbrook e Thomas Kretschmann.</p>
                <p class="col-8">A direção ficou com James Mangold, de Logan e Ford vs. Ferrari. Esta será a primeira vez que um filme da franquia Indiana Jones não é dirigido por Steven Spielberg. John Williams, que criou o tema para Os Caçadores da Arca Perdida em 1981, também está encarregado da trilha sonora do novo longa.</p>
                <p class="col-8">Indiana Jones e o Chamado do Destino deve chegar aos cinemas em 30 de junho de 2023.</p>
                <p class="col-8">Nomes que confirmados para a CCXP22 incluem os atores Keanu Reeves, Zoë Saldana, Pedro Pascal, Paul Rudd, Evangeline Lilly, Jonathan Majors, Jenna Ortega, Gwendoline Christie, Noah Centineo, Kirby Howell-Baptiste e Bella Ramsey, o elenco do Porta dos Fundos, os cineastas Dave Filoni e Jon Favreau, os produtores Kevin Feige e Jon Landau, o streamer Gaulês, os quadrinistas Jim Starlin, Mark Waid, Aimée de Jongh, Laerte, FabienToulmé, Marcello Quintanilha, Jim Cheung e muitos outros.</p>
                <p class="col-8">A CCXP22 acontece de 1 a 4 de dezembro e os ingressos podem ser adquiridos no site Mundo Ticket.</p>  
            </article>

            <?php } ?>
            <?php  
                if($_GET['cod']==2){
            ?>


            <article class="row justify-content-center">
                <figure class="text-center col-12 col-sm-12 col-lg-12">
                    <img src="img/filmes/banner-marvel.jpg" class="img-fluid" alt="Capa Filme">
                    <figcaption>Fonte imagem em : https://www.omelete.com.br/ccxp/ccxp22-marvel-studios-2023-luto</figcaption>
                </figure>
                <hgroup class="col-8 col-lg-8 py-3">
                    <h4 class="cor-letra">CCXP22: painel do Marvel Studios promete um 2023 cheio de despedidas</h4>
                    <p class="cor-letra">Apresentação do estúdio no Palco Thunder mostrou prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3</p>
                </hgroup>
                <p class="col-8">Por <a href="../autores.php?#nicogarofalo">NICO GARÓFALO</a><time datetime="2022-12-01">01/12/2022</time></p><!--https://www.omelete.com.br/autores/nico-garofalo -->
                <p class="col-8">Como não podia deixar de ser, o painel do Marvel Studios no Palco Thunder by Cinemark Club na CCXP22 contou com muita alegria e energia do público, que conseguiu assistir às novidades trazidas por Kevin Feige para os fãs brasileiros. Mas, pelo que as novas prévias de Homem-Formiga e a Vespa: Quantumania e Guardiões da Galáxia vol. 3 deram a entender, 2023 não vai ser nem um pouco alegre para os heróis do MCU. Os conteúdos lançados nesta quinta-feira (1º) no São Paulo Expo pintam um futuro para lá de trágico para Scott Lang (Paul Rudd), Peter Quill (Chris Pratt) e suas respectivas famílias.</p>
                <p class="col-8"> Ao contrário da aura despretensiosa e cômica dos filmes anteriores, as cenas reveladas de Homem-Formiga e a Vespa: Quantumania parecem preparar os heróis titulares para uma jornada de sacrifícios. As prévias do terceiro longa da franquia parecem colocar um alvo nas costas de, pelo menos, três de seus principais personagens: Scott, Hank Pym (Michael Douglas) e Janet Van Dyne (Michelle Pfeiffer). Os três, aliás, já morreram nos gibis e, considerando suas jornadas no MCU até agora, não é difícil de ver um deles deixando a série cinematográfica de forma trágica – e brutal – ao fim desta trilogia.</p>
                <p class="col-8"> Por outro lado, essa prévia também deixou claro que nenhuma morte de Quantumania é necessariamente permanente. Quando Scott avisa Kang (Jonathan Majors) que é um Vingador, o vilão, inabalado, pergunta se já o matou alguma vez, para total confusão do atual Homem-Formiga. A pergunta d’O Conquistador deixa no ar a possibilidade de que qualquer que seja o personagem a partir desta para uma melhor no novo filme, não fica descartada a possibilidade de ele retornar ao MCU através de uma de suas variantes.</p>
                <p class="col-8"> O próximo ano também não será nada bom para os membros dos Guardiões da Galáxia. O novo trailer do volume 3 tem um clima muito mais soturno que o dos primeiros dois filmes, focando muito mais em momentos de melancolia de seus protagonistas do que no humor escrachado típico das produções de James Gunn. Só nessa prévia, Drax (Dave Bautista) aparece sendo carregado com um buraco em seu peito, Rocket (Bradley Cooper) é visto ferido e ofegante em uma maca dizendo que quer viajar uma última vez com seu grupo, o Senhor das Estrelas aparece desacordado nos braços da Nebulosa (Karen Gillan) e Mantis (Pom Klementieff) parece gritar de luto e horror. Essa sequência de cenas preocupantes dão a certeza de que nenhum dos Guardiões está a salvo.</p>
                <p class="col-8"> Diferentemente de Quantumania, Guardiões da Galáxia vol. 3 tem sido divulgado como o fim da história do grupo liderado por Quill. Por isso, mesmo que Gunn subverta toda e qualquer expectativa mórbida criada pelo trailer e mantenha toda a equipe atual viva, o longa manterá seu clima de despedida e até mesmo um final feliz se tornará agridoce para quem se apaixonou por estes personagens em 2014.</p>
                <p class="col-8"> A Saga do Multiverso não tem, até agora, fugido de questões mais sérias como o luto, sentimento que foi central em Pantera Negra: Wakanda Para Sempre, WandaVision, Doutor Estranho no Multiverso da Loucura, Homem-Aranha: Sem Volta Para Casa e até a cômica Gavião Arqueiro. O começo da Fase 5, no entanto, promete elevar os níveis de tragédia e trazer perdas que podem moldar o futuro do MCU.</p>
                <p class="col-8"> No primeiro dia de CCXP22, a Paramount revelou o primeiro trailer de Transformers: O Despertar das Feras, a data da 3ª temporada de Mandalorian e o primeiro trailer do recém intitulado Indiana Jones e o Chamado do Destino.</p>
                <p class="col-8"> Nomes que confirmados para a CCXP22 incluem os atores Keanu Reeves, Zoë Saldana, Pedro Pascal, Paul Rudd, Evangeline Lilly, Jonathan Majors, Jenna Ortega, Gwendoline Christie, Noah Centineo, Kirby Howell-Baptiste e Bella Ramsey, o elenco do Porta dos Fundos, os cineastas Dave Filoni e Jon Favreau, os produtores Kevin Feige e Jon Landau, o streamer Gaulês, os quadrinistas Jim Starlin, Mark Waid, Aimée de Jongh, FabienToulmé, Marcello Quintanilha, Jim Cheung e muitos outros.</p>  
            </article>

            <?php 
                }
            ?>
            <?php  
                if($_GET['cod']==3){
            ?>

            <article class="row justify-content-center">
                <figure class="text-center col-12 col-sm-12 col-lg-12">
                    <img src="img/filmes/filme-the-last-of-us.jpg" class="img-fluid" alt="Capa Filme">
                    <figcaption> Fonte imagem em :https://thelastofus.com.br/noticias/novo-filme-de-schwarzenegger-inspirado-em-the-last-of-us/</figcaption>    
                </figure>
                <hgroup class="col-8 py-3">
                    <h4 class="cor-letra">The Last of Us ganha trailer inédito e emocionante na CCXP22</h4>
                    <p class="cor-letra">Série estreia na HBO Max em 15 de janeiro</p>
                </hgroup>
                <p class="col-8">Por <a href="../autores.php?#giovannabreve">GIOVANNA BREVE E NICOLAOS GARÓFALO</a><time datetime="2022-03-03">03/12/2022</time></p><!--https://www.omelete.com.br/autores/nico-garofalo -->
                <p class="col-8">The Last of Us, série da HBO Max que adapta o game, ganhou um novo trailer na CCXP22 no Palco Thunder by Cinemark Club. A novidade veio com a presença do elenco de estrelas Pedro Pascal, Bella Ramsey, Gabriel Luna, Merle Dandrigge e os produtores execultivos Craig Mazin e Neil Druckmann. Confira acima.</p>
                <p class="col-8">A prévia mostra um compilado de imagens de Joel, Ellie e Marlene em cenários bastante conhecidos para os familiarizados com o jogo. As cenas variam entre a cidade de Boston, a floresta, o shopping e, pela primeira vez, vemos de perto um clicker. A trailer foca também nos vínculos e conflitos que Joel enfrenta ao aceitar a missão de levar a Ellie.</p>
                <p class="col-8">Nos primeiros dias de CCXP22, a Paramount revelou o primeiro trailer de Transformers: O Despertar das Feras, enquanto a Disney trouxe a data da 3ª temporada de Mandalorian e os primeiros trailers de Indiana Jones e o Chamado do Destino e Guardiões da Galáxia Vol. 3. A Maurício de Sousa Produções também anunciou uma série de novidades, e o ator Tenoch Huerta, o Namor de Pantera Negra: Wakanda Para Sempre, deu um show de simpatia.</p>
            </article>

            <?php 
                }
            ?>
            <?php  
                if($_GET['cod']==4){
            ?>

            <article  class="row justify-content-center">
                <figure class=" text-center col-12 col-sm-12 col-lg-12">
                    <img src="img/streaming/deep.png" class="img-fluid" alt="Capa Filme">
                    <figcaption>https://www.omelete.com.br/filmes/criticas/aguas-profundas-amazon-prime-video</figcaption>
                </figure>
                <hgroup class="col-8 py-3">
                    <h4 class="cor-letra">Como thriller erótico, Águas Profundas é uma ótima comédia de costumes</h4>
                    <p class="cor-letra">Adrian Lyne está menos interessado em cenas de sexo do que está em tirar sarro dos ricos</p>
                </hgroup>
                <p class="col-8">Por <a href="../autores.php?#caiocolleti">CAIO COLETTI</a><time datetime="2022-03-18">18/03/2022</time></p><!--https://www.omelete.com.br/autores/nico-garofalo -->
                <p class="col-8">Águas Profundas era uma proposição bizarra desde o começo: um thriller erótico inspirado por um livro da autora de Carol (Patricia Highsmith), escrito pelos roteiristas de Mais Estranho que a Ficção (Zach Helm) e Euphoria (Sam Levinson), dirigido pelo responsável por Proposta Indecente e Atração Fatal (Adrian Lyne) e protagonizado pelo (já ex-)casal da vida real Ben Affleck e Ana de Armas. Como diria Natasha Lyonne naquela cena de Boneca Russa eternizada em memes no Twitter: “Que conceito”.</p>
                <p class="col-8">A surpresa, portanto, é constatar, agora que o filme chegou ao Amazon Prime Video brasileiro, que Águas Profundas é ainda mais estranho do que parecia no papel. A trama acompanha o casal Vic (Affleck) e Melinda (Armas), que vive uma espécie de casamento aberto: ele deixa ela se envolver com outros homens, ao menos em um primeiro momento, mas também tem uma tendência a botá-los para correr com ameaças de assassinato disparadas casualmente durante as reuniões sociais do círculo de amigos ricos do casal.</p>
                <p class="col-8">Dizer mais do que isso seria estragar os caminhos deliciosamente estúpidos que Águas Profundas toma a partir do seu segundo ato. Os furos de lógica são muitos e imensos, e as vacilantes regras internas do relacionamento de Vic e Melinda, ora cúmplices ora adversários mortais, são tão dramaticamente mal resolvidas que o espectador precisa rir das decisões cada vez mais incompreensíveis que eles tomam. Em suma, Helm e Levinson não parecem se importar muito com seus personagens, enquanto Lyne, bom… ele abertamente os despreza.</p>
                <p class="col-8">Nunca isso transparece mais do que na forma como o cineasta estrutura e filma as “festinhas” do grupo de amigos de Vic e Melinda. Nas mãos de Lyne, elas são a tentativa meio patética de um grupo de ricaços de meia-idade de se agarrarem à sua juventude - não é à toa que ele escala, para o elenco coadjuvante, nomes fortes da comédia, como Lil Rel Howery (Free Guy) e Rachel Blanchard (Peep Show). A forma como eles berram, conversam, se movem e dançam, a decoração meio decadente e até as atrações musicais que parecem saídas de uma rádio easy listening qualquer, tudo é calculado por Lyne e seus colaboradores para parecer um luxo vazio, descerebrado, e acima de tudo terrivelmente entediante (para eles, é claro - a gente se diverte pacas rindo da situação).</p>
                <p class="col-8">Adicionando uma camada a mais de sátira, proposital ou não, ao procedimento todo, Affleck e Armas não parecem entender exatamente o tipo de filme em que estão. Ele até ensaia um sorriso cínico ou outro, espremidos entre momentos profundamente sérios em que tenta balancear imponência física e perturbação mental para nos fazer duvidar o tempo todo do seu Vic. Já ela se mostra plenamente entregue a uma personagem tão inconstante que mal se sustenta como material sólido em tela, escapando pelos dedos sempre que o roteiro exige que ela mude de ideia - é um testamento ao comprometimento de Armas que cada emoção de Melinda pareça genuína, ainda que não passemos nem perto de entendê-la de verdade.</p>
                <p class="col-8">É curioso, inclusive, que esse escárnio de Águas Profundas pelos costumes e perturbações de toda uma classe social acabe consumindo até mesmo a sexualidade que ele propõe. As cenas de sexo do filme são poucas, rápidas e espaçadas, mas elas estão aqui muito mais para realçar a insipidez da vida desses adultos desocupados e desmoralizados do que para instigar ou excitar o espectador. Ninguém em Águas Profundas transa bem, ou mesmo transa por prazer. Se há tesão aqui, é tesão causado pelo tédio e sublimado em violência, e não na cama.</p>
                <p class="col-8">É verdade que, nos 20 anos que Adrian Lyne passou afastado das telas desde Infidelidade (2002), o thriller erótico como gênero se esvaziou em uma Hollywood cada vez mais estéril. Também é verdade, no entanto, que o diretor sempre foi muito mais interessado em dinâmicas de classe do que em dinâmicas de gênero ou em jogos psicossexuais - é sobre isso que Proposta Indecente, Atração Fatal e até Lolita versam, por baixo da superfície. Não deveria ser surpresa que Águas Profundas seja o que é, mas o marketing e o discurso cultural deixaram o público preparado para outra coisa (e posicionado para a decepção).</p>
                <p class="col-8">Se visto com o coração aberto e a disposição venenosa de rir de e com ele, o filme oferece 2h de entretenimento de qualidade.</p>
            </article>

            <?php 
                }
            ?>
            <?php  
                if($_GET['cod']==5){
            ?>

            <article class="row justify-content-center">
                <figure class="text-center col-12 col-sm-12 col-lg-12">
                    <img src="img/streaming/agente-oculto.jpg" class="img-fluid" alt="Capa Filme">
                    <figcaption>Fonte imagem em : https://www.omelete.com.br/filmes/netflix-divulga-imagens-e-data-de-estreia-de-agente-ocult</figcaption>
                </figure>    
                <hgroup class="col-8 py-3">
                    <h4 class="cor-letra">The Last of Us ganha trailer inédito e emocionante na CCXP22</h4>
                    <p class="cor-letra">Série estreia na HBO Max em 15 de janeiro</p>
                </hgroup>
                <p class="col-8">Por <a href="../autores.php?#omelete">Omelete.</a><time datetime="2022-04-26" >26/04/2022</time></p><!--https://www.omelete.com.br/autores/nico-garofalo -->
                <p class="col-8">A Netflix liberou nesta terça-feira (26) novas imagens de seu mais novo filme original, Agente Oculto, mostrando os personagens de Chris Evans, Ryan Gosling, Ana de Armas e Regé-Jean Page</p>
                <p class="col-8">Na trama, Ryan Gosling é o agente da CIA Court Gentry, também conhecido como Agente Oculto e Sierra Six, enquanto Chris Evans é seu adversário psicopata Lloyd Hansen. O longa é baseado no livro The Gray Man, de Mark Greaney.</p>
                <p class="col-8">Leia a sinopse do título: "Arrancado de uma penitenciária federal e recrutado por Donald Fitzroy (Billy Bob Thornton), Gentry já foi um mercenário altamente qualificado e sancionado pela Agência. Mas agora a situação virou e ele é o alvo, caçado em todo o mundo por Hansen, um ex-membro da CIA que não vai parar por nada até derrubá-lo. A seu favor, Six conta com a ajuda da agente Dani Miranda (Ana de Armas). Ele vai precisar."</p>
                <p class="col-8">Dirigido pelos irmãos Anthony e Joe Russo, o filme ainda conta com Billy Bob Thornton, Jessica Henwick, Dhanush, Alfred Woodard e o brasileiro Wagner Moura no elenco. 
            </article>

            <?php 
                }
            ?>

        </section>
        <?php 
            }
        ?>

        <?php include "mais-noticias.php"; ?>

    </div>

<?php include '../footer.php';?>
    