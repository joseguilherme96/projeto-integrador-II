<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Default'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/projeto-integrador-acessivel/css/tema.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg  sticky-top border">
            <div class="container" >
                <a class="navbar-brand" href="/projeto-integrador-acessivel/index.php" tabindex="0"><span class="cor-letra-home">PM</span>A&M</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/projeto-integrador-acessivel/index.php" accesskey="h" tabindex="1" id="home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="c" tabindex="2">
                                Cinema
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cinema/indexcinema.php">Cinema</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cinema/filmes.php">Filmes</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cinema/streaming.php">Streaming</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cinema/literatura.php">Literatura</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cinema/entrevistas.php">Entrevista</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="q" tabindex="3">
                                HQS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/hqs/indexhqs.php">HQS</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/hqs/livros.php">Top Five</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/hqs/melhorescriticas.php">Melhores criticas</a></li>
                                 <li><a class="dropdown-item" href="/projeto-integrador-acessivel/hqs/ultimasnoticias.php">Noticias</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/hqs/noticias.php">Materia</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/hqs/melhoresautores.php">Melhores autores</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="o" tabindex="4">
                                Cosplay
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cosplay/cosplay.php">Cosplay</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cosplay/animes.php">Animes</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cosplay/noticias.php">Noticias</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cosplay/eventos.php">Eventos</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/cosplay/games.php">Games</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" accesskey="s" tabindex="5">
                                Series e TV
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/seriesetv/home.php">Series e Tv</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/seriesetv/resenhas.php">Resenhas</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/seriesetv/lancamentos.php">Lançamentos</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/seriesetv/criticas.php">Criticas</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/seriesetv/noticias.php">Notícias</a></li>
                                <li><a class="dropdown-item" href="/projeto-integrador-acessivel/seriesetv/atores.php">Atores</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-acessivel/quemsomos.php" accesskey="u" tabindex="6">Quem somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-acessivel/contato.php" accesskey="t" tabindex="7">Contatos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-acessivel/normasdeutilizacao.php" accesskey="r" tabindex="8">Normas de Utilização</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projeto-integrador-acessivel/autores.php" accesskey="a" tabindex="9">Referências</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
