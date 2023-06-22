<!--Validado na w3-->
<?php $title = "Artigo Literatura";?>
<?php include "../header.php"?>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="../index.php" class=" nav-link cor-letra">Home / </a></li>
                <li class="nav-item"><a href="index.php" class=" nav-link  cor-letra">Cinema / </a></li>
                <li class="nav-item"><a href="literatura.php" class=" nav-link cor-letra">Literatura / </a></li>
                <li class="nav-item"><a href="artigo-literatura.php" class="nav-link  cor-letra">Artigo</a> </li>
            </ul>
        </nav>

        <?php include "../barra-de-pesquisa.php"; ?>

        <?php 
            if (isset($_GET['cod'])) {
        ?>

        <section class="row">
            <h2 class="cor-letra">Filmes inspirados em livros</h2>

            <?php   
                if ($_GET['cod'] == 1) {
            ?>

            <article class="row justify-content-center">
                <figure class="col-12 col-sm-12 col-lg-12 text-start text-lg-end">
                    <img src="img/artigos/banner-jogador-numero-1.jpg" class="img-fluid">
                    <figcaption class="text-center"><b>Fonte imagem em </b> https://www.hbomax.com/br/pt/feature/urn:hbo:feature:GX9q5dgf0LMILwgEAAAF0</figcaption>
                </figure>
                <hgroup class="col-lg-5">
                    <h4 class="cor-letra">Jogador Nº 1 | Crítica </h4>
                    <p class="cor-letra">A volta do Steven Spielberg moleque</p>
                </hgroup>
                <div class=" col-lg-3  text-center  mt-2">
                    <a href="" class="text-decoration-none text-light cor-botao p-1">FICÇÃO CIENTIFICA</a>
                </div>
                <p class="col-8">Por <a href="../autores.php?#omelete">Omelete</a> <time datetime="2018-03-19">19/03/2018</time></p>
                <p class="col-8">Ninguém melhor que Steven Spielberg para levar às telas a adaptação de Jogador Nº 1 de Ernest Cline. O cineasta, afinal, é a maior influência (o maior responsável, na verdade) por tudo aquilo que inspirou o autor do livro a criar sua distópica obra devota aos anos 1980. Mas não é o Spielberg "adulto", o histórico e dramático, que vemos aqui no comando de Jogador Nº 1, mas o cineasta moleque, aquele de Tubarão, E.T., Contatos Imediatos e Indiana Jones... o que torna a experiência ainda melhor.</p>
                <p class="col-8">Spielberg não apenas entende o milhar de referências do livro, mas ajudou a criá-las direta ou indiretamente - assim como a linguagem em que Cline se apoia em seu romance. O cineasta era sinônimo de aventura infanto-juvenil (juntamente com George Lucas, Robert Zemeckis, Richard Donner e tantos outros que transformaram o mundo e a cultura pop quatro décadas atrás) e aqui ele se recorda disso. O mestre retorna a sua melhor forma, homenageando essa época tão importante, em que os recém-empoderados diretores - que nos anos 70 passaram de coadjuvantes dos produtores a verdadeiros chefes criativos -, ganharam o direito de sonhar mais alto, com a indústria abrindo seus cofres para a fantasia e ficção científica, dando vida a imagens até então apenas registradas nas páginas das histórias em quadrinhos.</p>
                <p class="col-8">Com tal pedigree, Jogador Nº 1 é muito mais do que a habitual e cansada colagem de referências pop que temos aos montes hoje. A nostalgia é uma desculpa, não um objetivo. É no mundo criado (ou seria cocriado?) por Cline que Spielberg encontra a oportunidade para revisitar a inocência do passado. Até em estrutura o filme é um grande retorno aos clássicos oitentistas - e o final igualmente simples e genial é prova mais que perfeita disso.</p>
                <p class="col-8">Mas Jogador Nº 1 também é a forma que o cineasta encontrou para se atualizar. Ao ampliar as referências do filme ele mostra que não apenas entende as preferências de uma nova geração como também seu comportamento. O roteiro de Zak Penn e do próprio Ernest Cline é repleto de momentos sutis sobre quem somos hoje - sobre a sociedade online, conectada e ao mesmo tempo desligada da realidade.</p>
                <p class="col-8">No filme, como no livro, o ano é 2045. Nele, sobreviventes do período mais sombrio da humanidade precisam sobreviver em meio ao desemprego e a fome. Nessa realidade vive Wade Watts, um garoto pobre e órfão de 17 anos que, como escapismo, faz o mesmo que tantos outros milhões como ele: passa horas e horas conectado ao OASIS: um mundo online em que a realidade virtual turva os sentidos e coloca na busca por itens e moedas a satisfação que o corpo costumava encontrar de outras maneiras décadas atrás.</p>
                <p class="col-8">Ty Sheridan faz um bom Wade Watts em sua jornada para encontrar as três pistas que o falecido criador do sistema, James Halliday (um caricato Mark Rylance), deixou para o mundo. Ao vencedor, o controle sobre o OASIS - algo que move o industrialista Nolan Sorrento (Ben Mendelsohn, em papel que já virou recorrente para ele).</p>
                <p class="col-8">Há um maior equilíbrio na adaptação entre os mundos real e virtual, aproveitando os atores - que no OASIS encarnam avatares digitais. Há menos desafios e subtramas também, como esperado, mas o resultado, sob o comando de Spielberg, é muito bem amarrado. Cada referência tem um sentido e a qualidade do mundo virtual é estarrecedora, algo surpreendente em tempos em que basicamente todos os blockbusters do cinema contêm cenas quase que totalmente digitais. O OASIS é tão perfeito que em determinado momento, quando surge um ator em cena, há uma inversão no chamado "vale da estranheza". O humano parece irreal perante o digital. Spielberg mergulha tão fundo no mundo de Jogador Nº 1 que os limites se tornam borrados. Passado, presente, nostalgia, realidade, digital e orgânico fundem-se em um espetáculo visual digno de seus marcos passados. O ciclo ganha um reboot e - felizmente - o mestre está com o dedo no botão.</p>
                <h3 class="cor-letra col-8">Disponíveis em</h3>
                <a class="col-12"></a>
                <a href="https://www.primevideo.com/dp/amzn1.dv.gti.78b680ff-76d5-f11d-300c-65263d116eaa?autoplay=0&ref_=atv_cf_strg_wb" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video">
                    </figure>
                </a>
                <a href="http://www.youtube.com/watch?v=dGurgPE-wb8" class="col-1" target="blank">
                    <figure >
                            <img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube">
                    </figure>
                </a>
                <a href="https://tv.apple.com/br/movie/ready-player-one/umc.cmc.295lpojxtonf6dqc4za2i97lr?action=play" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/apple-tv.png" class="img-fluid" alt="Logo Apple Tv">
                    </figure>
                </a>
                <a href="https://play.hbomax.com/page/urn:hbo:page:GX9q5dgf0LMILwgEAAAF0:type:feature?source=googleHBOMAX&action=open" class="col-1" target="blank"> 
                    <figure>
                            <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO">
                    </figure>
                </a>
                <figure class="col-4 text-end">
                    <i class="bi bi-share fs-1 cor-letra"></i>
                </figure>
            </article>

            <?php } ?>
            <?php
                if ($_GET['cod'] == 2) {
            ?>

            <article class="row justify-content-center">
                <figure class="col-12 col-sm-12 col-lg-12 text-center">
                    <img src="img/artigos/banner-harry-potter.png" class="img-fluid">
                    <figcaption><b>Fonte da imagem em</b> https://pt.wikipedia.org/wiki/Harry_Potter_%28s%C3%A9rie_de_filmes%29</figcaption>
                </figure>
                <hgroup class="col-lg-5">
                    <h4 class="cor-letra">Harry Potter</h4>
                    <p class="cor-letra">Harry Potter é a a saga do órfão bruxo criada por J.K. Rowling e iniciada em 1997.</p>
                </hgroup>
                <div class="col-lg-3">
                    <div class="cor-botao col-5 col-sm-10 col-lg-8 text-center   mt-2">
                        <a href="" class="text-decoration-none text-light">FICÇÃO CIENTIFICA</a>
                    </div>
                </div>
                <p>Por <a href="../autores.php?#omelete">Omelete</a><time datetime="2018-03-19">19/03/2018</time></p>
                <p class="col-8">Depois dos oito filmes baseados nos livros, a franquia agora se prepara para lançar Animais Fantásticos e Onde Habitam, que adapta o livro didático no mundo de Harry Potter que cataloga 75 espécies de criaturas mágicas pelos cinco continentes. Os filmes contarão as viagens do autor do livro, Scamander, 70 anos antes do início da jornada de Harry Potter. </p>
                <ul class="col-8">
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e as Relíquias da Morte - Parte 2 (2011)</li>
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e as Relíquias da Morte - Parte 1 (2010)</li>
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Enigma do Príncipe (2008)</li>
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Ordem da Fênix (2007)</li>
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Cálice de Fogo (2005)</li>
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e o Prisioneiro de Azkaban (2004)</li>
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Câmara Secreta (2002)</li>
                    <li><i class="bi bi-square-fill fs-6 d-inline cor-letra"></i> Harry Potter e a Pedra Filosofal (2001)</li>
                </ul>
                <h3 class="cor-letra col-8">Disponíveis em</h3>
                <a class="col-12"></a>
                <a href="https://www.primevideo.com/dp/amzn1.dv.gti.78b680ff-76d5-f11d-300c-65263d116eaa?autoplay=0&ref_=atv_cf_strg_wb" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video">
                    </figure>
                </a>
                <a href="http://www.youtube.com/watch?v=dGurgPE-wb8" class="col-1" target="blank">
                    <figure >
                            <img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube">
                    </figure>
                </a>
                <a href="https://tv.apple.com/br/movie/ready-player-one/umc.cmc.295lpojxtonf6dqc4za2i97lr?action=play" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/apple-tv.png" class="img-fluid" alt="Logo Apple Tv">
                    </figure>
                </a>
                <a href="https://play.hbomax.com/page/urn:hbo:page:GX9q5dgf0LMILwgEAAAF0:type:feature?source=googleHBOMAX&action=open" class="col-1" target="blank"> 
                    <figure>
                            <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO">
                    </figure>
                </a>
                <figure class="col-4 text-end">
                    <i class="bi bi-share fs-1 cor-letra"></i>
                </figure>
            </article>

            <?php 
                } 
            ?>
            <?php
                if ($_GET['cod'] == 3) {
            ?>

            <article class="row  justify-content-center text-center">
                <figure class="col-12 col-sm-12 col-lg-12">
                    <img src="img/artigos/banner-jennifer-lawrence.jpg" class="img-fluid">
                    <figcaption class="text-center"><b>Fonte imagem em </b>https://www.omelete.com.br/filmes/jennifer-lawrence-franquias-velha</figcaption>
                </figure>
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
                <hgroup class="col-lg-8">
                    <h5 class="cor-letra">Jennifer Lawrence descarta papéis em grandes franquias: "Velha demais"</h5>
                    <p class="cor-letra-D2D2D2">Estrela de X-Men e Jogos Vorazes deve se concentrar em títulos independentes</p>
                </hgroup>
                <p>Por <a href="../autores.php?#caiocolleti">Caio Coletti</a> <time datetime="2022-10-08">08/10/2022</time></p>
                <p class="col-8 text-start">Não espere ver Jennifer Lawrence de volta às grandes franquias hollywoodianas. Participando do BFI London Film Festival [via Deadline], ela explicou por que deve se concentrar em projetos independentes daqui em diante.</p>
                <p class="col-8 text-start">"Franquias são muito divertidas, mas eu não conseguiria fazer uma agora. Estou muito velha e frágil", brincou a estrela de 32 anos, que já protagonizou sagas como Jogos Vorazes e X-Men.</p>
                <p class="col-8 text-start">Falando mais sério, Lawrence caracterizou o seu retorno às telas com Não Olhe Para Cima e Causeway como uma "retomada de controle" após os superestrelato trazido pelos blockbusters e pelo Oscar (vencido por O Lado Bom da Vida).</p>
                <p class="col-8 text-start">"Naquela época, senti que havia me tornado um produto. Cada decisão que eu tomava era na verdade uma decisão em grupo. Eu não fazia ideia do que era esperado uma estrela de cinema gigante, ou do que Katniss Everdeen deveria fazer a seguir... Quando penso naqueles anos hoje em dia, sinto uma perda de controle", comentou.</p>
                <p class="col-8 text-start">Jennifer Lawrence fala de disparidade salarial em Não Olhe Para Cima Os próximos projetos de Lawrence incluem a comédia No Hard Feelings, coestrelada por Matthew Broderick; e uma reunião com Adam McKay, diretor de Não Olhe Para Cima, no thriller inspirado em história real Bad Blood.</p>
                <h3 class="cor-letra col-8">Disponíveis em</h3>
                <a class="col-12"></a>
                <a href="https://www.primevideo.com/dp/amzn1.dv.gti.78b680ff-76d5-f11d-300c-65263d116eaa?autoplay=0&ref_=atv_cf_strg_wb" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video">
                    </figure>
                </a>
                <a href="http://www.youtube.com/watch?v=dGurgPE-wb8" class="col-1" target="blank">
                    <figure >
                            <img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube">
                    </figure>
                </a>
                <a href="https://tv.apple.com/br/movie/ready-player-one/umc.cmc.295lpojxtonf6dqc4za2i97lr?action=play" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/apple-tv.png" class="img-fluid" alt="Logo Apple Tv">
                    </figure>
                </a>
                <a href="https://play.hbomax.com/page/urn:hbo:page:GX9q5dgf0LMILwgEAAAF0:type:feature?source=googleHBOMAX&action=open" class="col-1" target="blank"> 
                    <figure>
                            <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO">
                    </figure>
                </a>
                <figure class="col-4 text-end">
                    <i class="bi bi-share fs-1 cor-letra"></i>
                </figure>
            </article>

            <?php } ?>
            <?php
                if ($_GET['cod'] == 4) {
            ?>

            <article class="row">
                <figure class="col-12 col-sm-12 col-lg-12 text-center">
                    <img src="img/artigos/banner-senhor-dos-aneis.jpg" class="img-fluid">
                    <figcaption class="text-center"><b>Fonte da imagem em </b>https://www.omelete.com.br/o-senhor-dos-aneis/aneis-do-poder-novas-escalacoes-fio</figcaption>
                </figure>
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
                <hgroup class="col-lg-8">
                    <h5 class="cor-letra">Os Anéis de Poder | Prime Video anuncia novas escalações do elenco; veja</h5>
                    <p class="cor-letra-D2D2D2">Personagens dos atores não foram revelados</p>
                </hgroup>
                <p>Por <a href="../autores.php?#omelete">Omelete</a> <time datetime="2022-12-01"></time>01/12/2022</p>
                <p class="col-8">O Prime Video aproveitou a manhã de hoje (1) para anunciar as novas adições do elenco de O Senhor dos Anéis: Os Anéis de Poder. Em formato de fio, a plataforma, aos poucos, revelou o nome dos 7 atores que se juntarão à produção na a próxima temporada.</p>
                <p class="col-8">A primeira divulgação foi a do ator Gabriel Akuwudike (Game of Thrones); veja: </p>
                <p class="col-8">Alguns instantes depois, o perfil na rede social também confirmou as escalações de Yasen ‘Zates’ Atour (The Witcher), Ben Daniels (The Exorcist), Amelia Kenworthy, Nia Towle (Persuasão) e Nicholas Woodeson (Roma). Até o momento, os atores seguem sem personagens divulgados. </p>
                <p class="col-8">Além disso, a plataforma também divulgou que o papel de Adar, líder dos Orcs, agora, será interpretado por Sam Hazeldine (Slow Horses), que substitui Joseph Mawle.</p>
                <p class="col-8">O Senhor dos Anéis: Os Anéis de Poder inicia filmagens da segunda temporada</p>
                <p class="col-8">Elenco se pronuncia contra ataques racistas
                    [Crítica] Os Anéis de Poder é TV à moda antiga na era das séries “memeáveis”
                    O Senhor dos Anéis: Os Anéis de Poder aborda a Segunda Era, se concentrando em Galadriel (Morfydd Clark) e sua busca por vingança contra o terrível (e desaparecido) Sauron, responsável pela morte do irmão. A criação do Um Anel e a queda de Númenor são alguns dos eventos dessa mesma época na mitologia de Tolkien.
                    A primeira temporada completa está no Prime Video.</p>
                <h3 class="cor-letra col-8">Disponíveis em</h3>
                <a class="col-12"></a>
                <a href="https://www.primevideo.com/dp/amzn1.dv.gti.78b680ff-76d5-f11d-300c-65263d116eaa?autoplay=0&ref_=atv_cf_strg_wb" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/prime-video.png" class="img-fluid" alt="Logo Prime Video">
                    </figure>
                </a>
                <a href="http://www.youtube.com/watch?v=dGurgPE-wb8" class="col-1" target="blank">
                    <figure >
                            <img src="img/icones-streaming/youtube.png" class="img-fluid" alt="Logo Youtube">
                    </figure>
                </a>
                <a href="https://tv.apple.com/br/movie/ready-player-one/umc.cmc.295lpojxtonf6dqc4za2i97lr?action=play" class="col-1" target="blank">
                    <figure>
                            <img src="img/icones-streaming/apple-tv.png" class="img-fluid" alt="Logo Apple Tv">
                    </figure>
                </a>
                <a href="https://play.hbomax.com/page/urn:hbo:page:GX9q5dgf0LMILwgEAAAF0:type:feature?source=googleHBOMAX&action=open" class="col-1" target="blank"> 
                    <figure>
                            <img src="img/icones-streaming/hbo-max-icon.jpg" class="img-fluid" alt="Logo HBO">
                    </figure>
                </a>
                <figure class="col-4 text-end">
                    <i class="bi bi-share fs-1 cor-letra"></i>
                </figure>
            </article>

                <?php } ?>
            <?php
            }
            ?>

        </section>
        
        <?php include "mais-noticias.php"; ?>

    </div>

<?php include "../footer.php"?>