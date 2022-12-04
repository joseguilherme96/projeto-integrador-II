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
            <div class="col-12">
                <a href="../index.php">Home</a> / <a href="index.php">Cinema</a> / <a href="literatura.php">Literatura</a> / <a href="artigo-literatura.php">Artigo</a> 
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
            <?php if(isset($_GET['cod'])){
                    if($_GET['cod']==1){
            ?>
            <section>  
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12 text-start text-lg-end">
                    <figure>    
                    <img src="img/artigos/banner-jogador-numero-1.jpg" class="img-fluid" >
                    <figcaption><b>Fonte imagem em </b> https://www.hbomax.com/br/pt/feature/urn:hbo:feature:GX9q5dgf0LMILwgEAAAF0</figcaption>
                    </figure>
                    </div>
                </div>
                <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <h4 class="cor-letra">Jogador Nº 1 | Crítica </h4>
                            <h5 class="cor-letra">A volta do Steven Spielberg moleque</h5>
                            <h6>Por <a href="">ÉRICO BORGO</a>  19/03/2018</h6>
                        </div>
                        <div class="col-lg-3">
                            <div class="row ">
                            <div class="cor-botao col-5 col-sm-10 col-lg-8 text-center   mt-2">
                                <a href="" class="text-decoration-none text-light">FICÇÃO CIENTIFICA</a>
                            </div>
                            </div>
                        </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <p>Ninguém melhor que Steven Spielberg para levar às telas a adaptação de Jogador Nº 1 de Ernest Cline. O cineasta, afinal, é a maior influência (o maior responsável, na verdade) por tudo aquilo que inspirou o autor do livro a criar sua distópica obra devota aos anos 1980. Mas não é o Spielberg "adulto", o histórico e dramático, que vemos aqui no comando de Jogador Nº 1, mas o cineasta moleque, aquele de Tubarão, E.T., Contatos Imediatos e Indiana Jones... o que torna a experiência ainda melhor.</p>
                        <p>Spielberg não apenas entende o milhar de referências do livro, mas ajudou a criá-las direta ou indiretamente - assim como a linguagem em que Cline se apoia em seu romance. O cineasta era sinônimo de aventura infanto-juvenil (juntamente com George Lucas, Robert Zemeckis, Richard Donner e tantos outros que transformaram o mundo e a cultura pop quatro décadas atrás) e aqui ele se recorda disso. O mestre retorna a sua melhor forma, homenageando essa época tão importante, em que os recém-empoderados diretores - que nos anos 70 passaram de coadjuvantes dos produtores a verdadeiros chefes criativos -, ganharam o direito de sonhar mais alto, com a indústria abrindo seus cofres para a fantasia e ficção científica, dando vida a imagens até então apenas registradas nas páginas das histórias em quadrinhos.</p>
                        <p>Com tal pedigree, Jogador Nº 1 é muito mais do que a habitual e cansada colagem de referências pop que temos aos montes hoje. A nostalgia é uma desculpa, não um objetivo. É no mundo criado (ou seria cocriado?) por Cline que Spielberg encontra a oportunidade para revisitar a inocência do passado. Até em estrutura o filme é um grande retorno aos clássicos oitentistas - e o final igualmente simples e genial é prova mais que perfeita disso.</p>
                        <p>Mas Jogador Nº 1 também é a forma que o cineasta encontrou para se atualizar. Ao ampliar as referências do filme ele mostra que não apenas entende as preferências de uma nova geração como também seu comportamento. O roteiro de Zak Penn e do próprio Ernest Cline é repleto de momentos sutis sobre quem somos hoje - sobre a sociedade online, conectada e ao mesmo tempo desligada da realidade.</p>
                        <p>No filme, como no livro, o ano é 2045. Nele, sobreviventes do período mais sombrio da humanidade precisam sobreviver em meio ao desemprego e a fome. Nessa realidade vive Wade Watts, um garoto pobre e órfão de 17 anos que, como escapismo, faz o mesmo que tantos outros milhões como ele: passa horas e horas conectado ao OASIS: um mundo online em que a realidade virtual turva os sentidos e coloca na busca por itens e moedas a satisfação que o corpo costumava encontrar de outras maneiras décadas atrás.</p>
                        <p>Ty Sheridan faz um bom Wade Watts em sua jornada para encontrar as três pistas que o falecido criador do sistema, James Halliday (um caricato Mark Rylance), deixou para o mundo. Ao vencedor, o controle sobre o OASIS - algo que move o industrialista Nolan Sorrento (Ben Mendelsohn, em papel que já virou recorrente para ele).</p>
                        <p>Há um maior equilíbrio na adaptação entre os mundos real e virtual, aproveitando os atores - que no OASIS encarnam avatares digitais. Há menos desafios e subtramas também, como esperado, mas o resultado, sob o comando de Spielberg, é muito bem amarrado. Cada referência tem um sentido e a qualidade do mundo virtual é estarrecedora, algo surpreendente em tempos em que basicamente todos os blockbusters do cinema contêm cenas quase que totalmente digitais. O OASIS é tão perfeito que em determinado momento, quando surge um ator em cena, há uma inversão no chamado "vale da estranheza". O humano parece irreal perante o digital. Spielberg mergulha tão fundo no mundo de Jogador Nº 1 que os limites se tornam borrados. Passado, presente, nostalgia, realidade, digital e orgânico fundem-se em um espetáculo visual digno de seus marcos passados. O ciclo ganha um reboot e - felizmente - o mestre está com o dedo no botão.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Disponíveis em</h3>
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
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Referências Bibliograficas</h3>
                        <a href="https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica">https://www.omelete.com.br/filmes/criticas/jogador-no-1-critica</a>
                    </div>
                </div>
                </section>
                <?php }?>
                <?php
                if($_GET['cod']==2){
            ?>
            <section>  
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12">
                       <figure>
                        <img src="img/artigos/banner-harry-potter.png" class="img-fluid" >
                        <figcaption><b>Fonte da imagem em</b> https://pt.wikipedia.org/wiki/Harry_Potter_%28s%C3%A9rie_de_filmes%29</figcaption>
                        </figure>  
                             
                    </div>
                </div>
                <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <h4 class="cor-letra">Harry Potter</h4>
                            <h5 class="cor-letra">Harry Potter é a a saga do órfão bruxo criada por J.K. Rowling e iniciada em 1997.</h5>
                            <h6>Por <a href="">Omelete</a>  19/03/2018</h6>
                        </div>
                        <div class="col-lg-3">
                            <div class="row ">
                            <div class="cor-botao col-5 col-sm-10 col-lg-8 text-center   mt-2">
                                <a href="" class="text-decoration-none text-light">FICÇÃO CIENTIFICA</a>
                            </div>
                            </div>
                        </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <p>Depois dos oito filmes baseados nos livros, a franquia agora se prepara para lançar Animais Fantásticos e Onde Habitam, que adapta o livro didático no mundo de Harry Potter que cataloga 75 espécies de criaturas mágicas pelos cinco continentes. Os filmes contarão as viagens do autor do livro, Scamander, 70 anos antes do início da jornada de Harry Potter. </p>
                        <ul>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e as Relíquias da Morte - Parte 2 (2011)</li>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e as Relíquias da Morte - Parte 1 (2010)</li>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Enigma do Príncipe (2008)</li>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Ordem da Fênix (2007)</li>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Cálice de Fogo (2005)</li>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Prisioneiro de Azkaban (2004)</li>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Câmara Secreta (2002)</li>
                            <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Pedra Filosofal (2001)</li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Disponíveis em</h3>
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
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Referências Bibliograficas</h3>
                        <a href="https://www.omelete.com.br/harry-potter?gclid=EAIaIQobChMI3Kaew5_g-wIVFWSRCh0sSAh2EAAYASAAEgLR_vD_BwE"  target="blank">https://www.omelete.com.br/harry-potter?gclid=EAIaIQobChMI3Kaew5_g-wIVFWSRCh0sSAh2EAAYASAAEgLR_vD_BwE</a>
                    </div>
                </div>
                </section>
                <?php }?>

                <?php
                if($_GET['cod']==3){
            ?>
            <section>  
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12">
                       <figure>
                        <img src="img/artigos/banner-jennifer-lawrence.jpg" class="img-fluid" >
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
                                <a href="" class="text-decoration-none text-light">FICÇÃO CIENTIFICA</a>
                            </div>
                            <div class="cor-botao col-5 col-sm-2 col-lg-2 text-center  mx-1 mt-2">
                                <a href="" class="text-decoration-none text-light">AÇÃO</a>
                            </div>
                            <div class="cor-botao col-5 col-sm-3 col-lg-2 text-center  mx-1 mt-2">
                                <a href="" class="text-decoration-none text-light">AVENTURA</a>
                            </div>
                            </div>
                        <div class="col-lg-8">
                           
                            <h5 class="cor-letra">Jennifer Lawrence descarta papéis em grandes franquias: "Velha demais"</h5>
                            <h5 class="cor-letra-D2D2D2">Estrela de X-Men e Jogos Vorazes deve se concentrar em títulos independentes</h5>
                            <h6>Por <a href="../autores.php?#caio-colletti">Caio Coletti</a>  08/10/2022</h6>
                        </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                    <p>Não espere ver Jennifer Lawrence de volta às grandes franquias hollywoodianas. Participando do BFI London Film Festival [via Deadline], ela explicou por que deve se concentrar em projetos independentes daqui em diante.</p>

                    <p>"Franquias são muito divertidas, mas eu não conseguiria fazer uma agora. Estou muito velha e frágil", brincou a estrela de 32 anos, que já protagonizou sagas como Jogos Vorazes e X-Men.</p>

                    <p>Falando mais sério, Lawrence caracterizou o seu retorno às telas com Não Olhe Para Cima e Causeway como uma "retomada de controle" após os superestrelato trazido pelos blockbusters e pelo Oscar (vencido por O Lado Bom da Vida).</p>

                    <p>"Naquela época, senti que havia me tornado um produto. Cada decisão que eu tomava era na verdade uma decisão em grupo. Eu não fazia ideia do que era esperado uma estrela de cinema gigante, ou do que Katniss Everdeen deveria fazer a seguir... Quando penso naqueles anos hoje em dia, sinto uma perda de controle", comentou.</p>

                    <p>Jennifer Lawrence fala de disparidade salarial em Não Olhe Para Cima
                    Os próximos projetos de Lawrence incluem a comédia No Hard Feelings, coestrelada por Matthew Broderick; e uma reunião com Adam McKay, diretor de Não Olhe Para Cima, no thriller inspirado em história real Bad Blood.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Disponíveis em</h3>
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
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Referências Bibliograficas</h3>
                        <a href="https://www.omelete.com.br/filmes/jennifer-lawrence-franquias-velha"  target="blank">https://www.omelete.com.br/filmes/jennifer-lawrence-franquias-velha</a>
                    </div>
                </div>
                </section>
                <?php }?>
                <?php
                if($_GET['cod']==4){
            ?>
            <section>  
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12">
                    
                    <figure>
                    <img src="img/artigos/banner-senhor-dos-aneis.jpg" class="img-fluid" >
                    <figcaption><b>Fonte da imagem em </b>https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio</figcaption>
                    </figure>     
                    </div>
                </div>
                <div class="row justify-content-center">
                            <div class="row  justify-content-center">
                                <div class="col-3">
                            <h4 class="cor-letra d-inline">Senhor dos Anéis</h4>
                                </div>
                            <div class="cor-botao col-5 col-sm-3 col-lg-2 text-center mt-2">
                                <a href="" class="text-decoration-none text-light">AVENTURA</a>
                            </div>
                            <div class="cor-botao col-5 col-sm-2 col-lg-2 text-center  mx-1 mt-2">
                                <a href="" class="text-decoration-none text-light">ÉPICO</a>
                            </div>
                            <div class="cor-botao col-5 col-sm-3 col-lg-2 text-center  mx-1 mt-2">
                                <a href="" class="text-decoration-none text-light">FANTASIA</a>
                            </div>
                            </div>
                        <div class="col-lg-8">
                           
                            <h5 class="cor-letra">Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja</h5>
                            <h5 class="cor-letra-D2D2D2">Personagens dos atores não foram revelados</h5>
                            <h6>Por <a href="../autores.php?#flavio-pinto">Flávio Pinto</a>  01/12/2022</h6>
                        </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                    <p>O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada.</p>

                    <p>A primeira divulgação foi a do ator Gabriel Akuwudike (Game of Thrones); veja: </p>


                    <p>Alguns instantes depois, o perfil na rede social também confirmou as escalações de Yasen ‘Zates’ Atour (The Witcher), Ben Daniels (The Exorcist), Amelia Kenworthy, Nia Towle (Persuasão) e Nicholas Woodeson (Roma). Até o momento, os atores seguem sem personagens divulgados. </p>


                    <p>Além disso, a plataforma também divulgou que o papel de Adar, líder dos Orcs, agora, será interpretado por Sam Hazeldine (Slow Horses), que substitui Joseph Mawle.</p>

                    <p>O Senhor dos Anéis: Os Anéis de Poder inicia filmagens da segunda temporada</p>
                    <p>Elenco se pronuncia contra ataques racistas
                    [Crítica] Os Anéis de Poder é TV à moda antiga na era das séries “memeáveis”
                    O Senhor dos Anéis: Os Anéis de Poder aborda a Segunda Era, se concentrando em Galadriel (Morfydd Clark) e sua busca por vingança contra o terrível (e desaparecido) Sauron, responsável pela morte do irmão. A criação do Um Anel e a queda de Númenor são alguns dos eventos dessa mesma época na mitologia de Tolkien.

                    A primeira temporada completa está no Prime Video.</p>
                </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Disponíveis em</h3>
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
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="cor-letra">Referências Bibliograficas</h3>
                        <a href="https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio"  target="blank">https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio</a>
                    </div>
                </div>
                </section>
                <?php }?>
                <?php
                }
                ?>
        </article>
        <section>
            <div class="row justify-content-center">
                <h2 class="col-8 cor-letra">Ver mais</h2>
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