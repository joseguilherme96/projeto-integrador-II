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
    <?php include "../nav.php" ?>
    <div class="container ">
        <div class="row cor-letra">
            <div class="col-12">
                <a href="../index.php" class="cor-letra">Home</a> / <a href="index.php" class="cor-letra">Cinema</a> / <a href="literatura.php" class="cor-letra">Literatura</a> / <a href="artigo-literatura.php" class="cor-letra">Artigo</a>
            </div>
        </div>
        <div class="row justify-content-center pt-1">
            <div class="col-5 ">
                <input type="text" class="form-control " placeholder="Pesquise sobre filmes,noticias..">
            </div>
            <div class="col-2 p-2">
                <i class="bi-search "></i>
            </div>
        </div>
        <article>
            <h1 class="row text-center d-block cor-letra">Filmes inspirados em livros</h1>
            <?php if (isset($_GET['cod'])) {
                if ($_GET['cod'] == 1) {
            ?>
                    <section>
                        <div class="row text-center">
                            <div class="col-12 col-sm-12 col-lg-12 text-start text-lg-end">
                                <figure>
                                    <img src="img/artigos/banner-jogador-numero-1.jpg" class="img-fluid">
                                    <figcaption><b>Fonte imagem em </b> https://www.hbomax.com/br/pt/feature/urn:hbo:feature:GX9q5dgf0LMILwgEAAAF0</figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <h4 class="cor-letra">Jogador N?? 1 | Cr??tica </h4>
                                <h5 class="cor-letra">A volta do Steven Spielberg moleque</h5>
                                <h6>Por <a href="../autores.php?#omelete">Omelete</a> 19/03/2018</h6>
                            </div>
                            <div class="col-lg-3">
                                <div class="row ">
                                    <div class="cor-botao col-5 col-sm-10 col-lg-8 text-center   mt-2">
                                        <a href="" class="text-decoration-none text-light">FIC????O CIENTIFICA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <p>Ningu??m melhor que Steven Spielberg para levar ??s telas a adapta????o de Jogador N?? 1 de Ernest Cline. O cineasta, afinal, ?? a maior influ??ncia (o maior respons??vel, na verdade) por tudo aquilo que inspirou o autor do livro a criar sua dist??pica obra devota aos anos 1980. Mas n??o ?? o Spielberg "adulto", o hist??rico e dram??tico, que vemos aqui no comando de Jogador N?? 1, mas o cineasta moleque, aquele de Tubar??o, E.T., Contatos Imediatos e Indiana Jones... o que torna a experi??ncia ainda melhor.</p>
                                <p>Spielberg n??o apenas entende o milhar de refer??ncias do livro, mas ajudou a cri??-las direta ou indiretamente - assim como a linguagem em que Cline se apoia em seu romance. O cineasta era sin??nimo de aventura infanto-juvenil (juntamente com George Lucas, Robert Zemeckis, Richard Donner e tantos outros que transformaram o mundo e a cultura pop quatro d??cadas atr??s) e aqui ele se recorda disso. O mestre retorna a sua melhor forma, homenageando essa ??poca t??o importante, em que os rec??m-empoderados diretores - que nos anos 70 passaram de coadjuvantes dos produtores a verdadeiros chefes criativos -, ganharam o direito de sonhar mais alto, com a ind??stria abrindo seus cofres para a fantasia e fic????o cient??fica, dando vida a imagens at?? ent??o apenas registradas nas p??ginas das hist??rias em quadrinhos.</p>
                                <p>Com tal pedigree, Jogador N?? 1 ?? muito mais do que a habitual e cansada colagem de refer??ncias pop que temos aos montes hoje. A nostalgia ?? uma desculpa, n??o um objetivo. ?? no mundo criado (ou seria cocriado?) por Cline que Spielberg encontra a oportunidade para revisitar a inoc??ncia do passado. At?? em estrutura o filme ?? um grande retorno aos cl??ssicos oitentistas - e o final igualmente simples e genial ?? prova mais que perfeita disso.</p>
                                <p>Mas Jogador N?? 1 tamb??m ?? a forma que o cineasta encontrou para se atualizar. Ao ampliar as refer??ncias do filme ele mostra que n??o apenas entende as prefer??ncias de uma nova gera????o como tamb??m seu comportamento. O roteiro de Zak Penn e do pr??prio Ernest Cline ?? repleto de momentos sutis sobre quem somos hoje - sobre a sociedade online, conectada e ao mesmo tempo desligada da realidade.</p>
                                <p>No filme, como no livro, o ano ?? 2045. Nele, sobreviventes do per??odo mais sombrio da humanidade precisam sobreviver em meio ao desemprego e a fome. Nessa realidade vive Wade Watts, um garoto pobre e ??rf??o de 17 anos que, como escapismo, faz o mesmo que tantos outros milh??es como ele: passa horas e horas conectado ao OASIS: um mundo online em que a realidade virtual turva os sentidos e coloca na busca por itens e moedas a satisfa????o que o corpo costumava encontrar de outras maneiras d??cadas atr??s.</p>
                                <p>Ty Sheridan faz um bom Wade Watts em sua jornada para encontrar as tr??s pistas que o falecido criador do sistema, James Halliday (um caricato Mark Rylance), deixou para o mundo. Ao vencedor, o controle sobre o OASIS - algo que move o industrialista Nolan Sorrento (Ben Mendelsohn, em papel que j?? virou recorrente para ele).</p>
                                <p>H?? um maior equil??brio na adapta????o entre os mundos real e virtual, aproveitando os atores - que no OASIS encarnam avatares digitais. H?? menos desafios e subtramas tamb??m, como esperado, mas o resultado, sob o comando de Spielberg, ?? muito bem amarrado. Cada refer??ncia tem um sentido e a qualidade do mundo virtual ?? estarrecedora, algo surpreendente em tempos em que basicamente todos os blockbusters do cinema cont??m cenas quase que totalmente digitais. O OASIS ?? t??o perfeito que em determinado momento, quando surge um ator em cena, h?? uma invers??o no chamado "vale da estranheza". O humano parece irreal perante o digital. Spielberg mergulha t??o fundo no mundo de Jogador N?? 1 que os limites se tornam borrados. Passado, presente, nostalgia, realidade, digital e org??nico fundem-se em um espet??culo visual digno de seus marcos passados. O ciclo ganha um reboot e - felizmente - o mestre est?? com o dedo no bot??o.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <h3 class="cor-letra">Dispon??veis em</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="row justify-content-start">
                                    <div class="col-2">
                                        <a href="https://www.primevideo.com/dp/amzn1.dv.gti.78b680ff-76d5-f11d-300c-65263d116eaa?autoplay=0&ref_=atv_cf_strg_wb" target="blank"><img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="http://www.youtube.com/watch?v=dGurgPE-wb8" target="blank"><img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="https://tv.apple.com/br/movie/ready-player-one/umc.cmc.295lpojxtonf6dqc4za2i97lr?action=play" target="blank"><img src="img/icones-streaming/apple-tv.png" class="img-fluid" alt="Logo Apple Tv"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="https://play.hbomax.com/page/urn:hbo:page:GX9q5dgf0LMILwgEAAAF0:type:feature?source=googleHBOMAX&action=open" target="blank"> <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO"></a>
                                    </div>
                                    <div class="col-4 text-end">
                                        <i class="bi bi-share fs-1 cor-letra"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                if ($_GET['cod'] == 2) {
                ?>
                    <section>
                        <div class="row text-center">
                            <div class="col-12 col-sm-12 col-lg-12">
                                <figure>
                                    <img src="img/artigos/banner-harry-potter.png" class="img-fluid">
                                    <figcaption><b>Fonte da imagem em</b> https://pt.wikipedia.org/wiki/Harry_Potter_%28s%C3%A9rie_de_filmes%29</figcaption>
                                </figure>

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <h4 class="cor-letra">Harry Potter</h4>
                                <h5 class="cor-letra">Harry Potter ?? a a saga do ??rf??o bruxo criada por J.K. Rowling e iniciada em 1997.</h5>
                                <h6>Por <a href="../autores.php?#omelete">Omelete</a> 19/03/2018</h6>
                            </div>
                            <div class="col-lg-3">
                                <div class="row ">
                                    <div class="cor-botao col-5 col-sm-10 col-lg-8 text-center   mt-2">
                                        <a href="" class="text-decoration-none text-light">FIC????O CIENTIFICA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <p>Depois dos oito filmes baseados nos livros, a franquia agora se prepara para lan??ar Animais Fant??sticos e Onde Habitam, que adapta o livro did??tico no mundo de Harry Potter que cataloga 75 esp??cies de criaturas m??gicas pelos cinco continentes. Os filmes contar??o as viagens do autor do livro, Scamander, 70 anos antes do in??cio da jornada de Harry Potter. </p>
                                <ul>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e as Rel??quias da Morte - Parte 2 (2011)</li>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e as Rel??quias da Morte - Parte 1 (2010)</li>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Enigma do Pr??ncipe (2008)</li>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Ordem da F??nix (2007)</li>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o C??lice de Fogo (2005)</li>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Prisioneiro de Azkaban (2004)</li>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a C??mara Secreta (2002)</li>
                                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Pedra Filosofal (2001)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <h3 class="cor-letra">Dispon??veis em</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="row justify-content-start">
                                    <div class="col-2">
                                        <a href="https://www.primevideo.com/dp/amzn1.dv.gti.78b680ff-76d5-f11d-300c-65263d116eaa?autoplay=0&ref_=atv_cf_strg_wb" target="blank"><img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="http://www.youtube.com/watch?v=dGurgPE-wb8" target="blank"><img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="https://tv.apple.com/br/movie/ready-player-one/umc.cmc.295lpojxtonf6dqc4za2i97lr?action=play" target="blank"><img src="img/icones-streaming/apple-tv.png" class="img-fluid" alt="Logo Apple Tv"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="https://play.hbomax.com/page/urn:hbo:page:GX9q5dgf0LMILwgEAAAF0:type:feature?source=googleHBOMAX&action=open" target="blank"> <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO"></a>
                                    </div>
                                    <div class="col-4 text-end">
                                        <i class="bi bi-share fs-1 cor-letra"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                if ($_GET['cod'] == 3) {
                ?>
                    <section>
                        <div class="row text-center">
                            <div class="col-12 col-sm-12 col-lg-12">
                                <figure>
                                    <img src="img/artigos/banner-jennifer-lawrence.jpg" class="img-fluid">
                                    <figcaption><b>Fonte imagem em </b>https://www.omelete.com.br/filmes/jennifer-lawrence-franquias-velha</figcaption>
                                </figure>

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="row  justify-content-center">
                                <div class="col-3">
                                    <h4 class="cor-letra d-inline">Jogos Vorazes</h4>
                                </div>
                                <div class="cor-botao col-5 col-sm-3 col-lg-2 text-center mt-2">
                                    <a href="" class="text-decoration-none text-light">FIC????O CIENTIFICA</a>
                                </div>
                                <div class="cor-botao col-5 col-sm-2 col-lg-2 text-center  mx-1 mt-2">
                                    <a href="" class="text-decoration-none text-light">A????O</a>
                                </div>
                                <div class="cor-botao col-5 col-sm-3 col-lg-2 text-center  mx-1 mt-2">
                                    <a href="" class="text-decoration-none text-light">AVENTURA</a>
                                </div>
                            </div>
                            <div class="col-lg-8">

                                <h5 class="cor-letra">Jennifer Lawrence descarta pap??is em grandes franquias: "Velha demais"</h5>
                                <h5 class="cor-letra-D2D2D2">Estrela de X-Men e Jogos Vorazes deve se concentrar em t??tulos independentes</h5>
                                <h6>Por <a href="../autores.php?#caiocolleti">Caio Coletti</a> 08/10/2022</h6>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <p>N??o espere ver Jennifer Lawrence de volta ??s grandes franquias hollywoodianas. Participando do BFI London Film Festival [via Deadline], ela explicou por que deve se concentrar em projetos independentes daqui em diante.</p>

                                <p>"Franquias s??o muito divertidas, mas eu n??o conseguiria fazer uma agora. Estou muito velha e fr??gil", brincou a estrela de 32 anos, que j?? protagonizou sagas como Jogos Vorazes e X-Men.</p>

                                <p>Falando mais s??rio, Lawrence caracterizou o seu retorno ??s telas com N??o Olhe Para Cima e Causeway como uma "retomada de controle" ap??s os superestrelato trazido pelos blockbusters e pelo Oscar (vencido por O Lado Bom da Vida).</p>

                                <p>"Naquela ??poca, senti que havia me tornado um produto. Cada decis??o que eu tomava era na verdade uma decis??o em grupo. Eu n??o fazia ideia do que era esperado uma estrela de cinema gigante, ou do que Katniss Everdeen deveria fazer a seguir... Quando penso naqueles anos hoje em dia, sinto uma perda de controle", comentou.</p>

                                <p>Jennifer Lawrence fala de disparidade salarial em N??o Olhe Para Cima
                                    Os pr??ximos projetos de Lawrence incluem a com??dia No Hard Feelings, coestrelada por Matthew Broderick; e uma reuni??o com Adam McKay, diretor de N??o Olhe Para Cima, no thriller inspirado em hist??ria real Bad Blood.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <h3 class="cor-letra">Dispon??veis em</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="row justify-content-start">
                                    <div class="col-2">
                                        <a href="https://www.primevideo.com/dp/amzn1.dv.gti.c8b3c59f-d12a-6501-3b11-dc521e4ce5ea?autoplay=0&ref_=atv_cf_strg_wb" target="blank"><img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="http://www.youtube.com/watch?v=NmfcFROdvGE" target="blank"><img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="https://tv.apple.com/br/movie/the-hunger-games-versao-em-portugues/umc.cmc.2p1170vnfy62s4bgkeul0ls7c?action=play" target="blank"><img src="img/icones-streaming/apple-tv.png" class="img-fluid" alt="Logo Apple Tv"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="https://play.hbomax.com/feature/urn:hbo:feature:GYOVrkwGAqquiBgEAAAQd?source=googleHBOMAX&action=open" target="blank"> <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO"></a>
                                    </div>
                                    <div class="col-4 text-end">
                                        <i class="bi bi-share fs-1 cor-letra"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                if ($_GET['cod'] == 4) {
                ?>
                    <section>
                        <div class="row text-center">
                            <div class="col-12 col-sm-12 col-lg-12">

                                <figure>
                                    <img src="img/artigos/banner-senhor-dos-aneis.jpg" class="img-fluid">
                                    <figcaption><b>Fonte da imagem em </b>https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio</figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="row  justify-content-center">
                                <div class="col-3">
                                    <h4 class="cor-letra d-inline">Senhor dos An??is</h4>
                                </div>
                                <div class="cor-botao col-5 col-sm-3 col-lg-2 text-center mt-2">
                                    <a href="" class="text-decoration-none text-light">AVENTURA</a>
                                </div>
                                <div class="cor-botao col-5 col-sm-2 col-lg-2 text-center  mx-1 mt-2">
                                    <a href="" class="text-decoration-none text-light">??PICO</a>
                                </div>
                                <div class="cor-botao col-5 col-sm-3 col-lg-2 text-center  mx-1 mt-2">
                                    <a href="" class="text-decoration-none text-light">FANTASIA</a>
                                </div>
                            </div>
                            <div class="col-lg-8">

                                <h5 class="cor-letra">Os An??is de Poder | Prime Video anuncia novas escala????es do elenco; veja</h5>
                                <h5 class="cor-letra-D2D2D2">Personagens dos atores n??o foram revelados</h5>
                                <h6>Por <a href="../autores.php?#omelete">Omelete</a> 01/12/2022</h6>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <p>O Prime Video aproveitou a manh?? de hoje (1) para anunciar as novas adi????es do elenco de O Senhor dos An??is: Os An??is de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntar??o ?? produ????o na a pr??xima temporada.</p>

                                <p>A primeira divulga????o foi a do ator Gabriel Akuwudike (Game of Thrones); veja: </p>


                                <p>Alguns instantes depois, o perfil na rede social tamb??m confirmou as escala????es de Yasen ???Zates??? Atour (The Witcher), Ben Daniels (The Exorcist), Amelia Kenworthy, Nia Towle (Persuas??o) e Nicholas Woodeson (Roma). At?? o momento, os atores seguem sem personagens divulgados. </p>


                                <p>Al??m disso, a plataforma tamb??m divulgou que o papel de Adar, l??der dos Orcs, agora, ser?? interpretado por Sam Hazeldine (Slow Horses), que substitui Joseph Mawle.</p>

                                <p>O Senhor dos An??is: Os An??is de Poder inicia filmagens da segunda temporada</p>
                                <p>Elenco se pronuncia contra ataques racistas
                                    [Cr??tica] Os An??is de Poder ?? TV ?? moda antiga na era das s??ries ???meme??veis???
                                    O Senhor dos An??is: Os An??is de Poder aborda a Segunda Era, se concentrando em Galadriel (Morfydd Clark) e sua busca por vingan??a contra o terr??vel (e desaparecido) Sauron, respons??vel pela morte do irm??o. A cria????o do Um Anel e a queda de N??menor s??o alguns dos eventos dessa mesma ??poca na mitologia de Tolkien.

                                    A primeira temporada completa est?? no Prime Video.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <h3 class="cor-letra">Dispon??veis em</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="row justify-content-start">
                                    <div class="col-2">
                                        <a href="https://www.primevideo.com/dp/amzn1.dv.gti.91d91081-a2e1-4004-af7d-4efb31e99e27?autoplay=0&ref_=atv_cf_strg_wb" target="blank"><img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="http://www.youtube.com/watch?v=2Qta22pKi1w" target="blank"><img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube"></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="https://play.hbomax.com/feature/urn:hbo:feature:GXeF-mg4zu8PCwwEAADwj?source=googleHBOMAX&action=play" target="blank"> <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO"></a>
                                    </div>
                                    <div class="col-4 text-end">
                                        <i class="bi bi-share fs-1 cor-letra"></i>
                                    </div>
                                    <div class="col-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
            <?php
            }
            ?>
        </article>
        <?php include "mais-noticias.php"; ?>
    </div>
    <?php include "../rodape.php"; ?>
</body>
</html>