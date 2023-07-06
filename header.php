<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Default'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/projeto-integrador-II/css/tema.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg  sticky-top border">
            <div class="container" >
                <a class="navbar-brand" href="/projeto-integrador-II/index.php" tabindex="0"><span class="cor-letra-home">PM</span>A&M</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/projeto-integrador-II/index.php" accesskey="h" tabindex="1" id="home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="c" tabindex="2">
                                Cinema
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cinema/indexcinema.php">Cinema</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cinema/filmes.php">Filmes</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cinema/streaming.php">Streaming</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cinema/literatura.php">Literatura</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cinema/entrevistas.php">Entrevista</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="q" tabindex="3">
                                HQS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-II/hqs/indexhqs.php">HQS</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/hqs/livros.php">Top Five</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/hqs/melhorescriticas.php">Melhores criticas</a></li>
                                 <li><a class="dropdown-item" href="/projeto-integrador-II/hqs/ultimasnoticias.php">Noticias</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/hqs/noticias.php">Materia</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/hqs/melhoresautores.php">Melhores autores</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="o" tabindex="4">
                                Cosplay
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cosplay/cosplay.php">Cosplay</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cosplay/animes.php">Animes</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cosplay/noticias.php">Noticias</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cosplay/eventos.php">Eventos</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/cosplay/games.php">Games</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="s" tabindex="5">
                                Series e TV
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-II/seriesetv/home.php">Series e Tv</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/seriesetv/resenhas.php">Resenhas</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/seriesetv/lancamentos.php">Lançamentos</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/seriesetv/criticas.php">Criticas</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/seriesetv/noticias.php">Notícias</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-II/seriesetv/atores.php">Atores</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-II/quemsomos.php" accesskey="u" tabindex="6">Quem somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-II/contato.php" accesskey="t" tabindex="7">Contatos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-II/normasdeutilizacao.php" accesskey="r" tabindex="8">Normas de Utilização</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-II/autores.php" accesskey="a" tabindex="9">Referências</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
