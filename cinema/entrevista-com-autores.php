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
        <div class="row">
            <div class="col-12">
                <a href="../index.php">Home</a> / <a href="index.php">Cinema</a> / <a href="entrevistas.php">Entrevistas</a> / <a href="entrevista-com-autores.php">Entrevista</a>
            </div>
        </div>
        <?php include "../barra-de-pesquisa.php"; ?>
        <article>
            <h1 class="row d-block text-center cor-letra">Entrevistas</h1>
            <section id="vindiesel">
                <h2 class="cor-letra">Vin Diesel</h2>
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <iframe class="col-12" src="https://www.youtube.com/embed/yQ9QkFxC0sc" title="VIN DIESEL | Entrevista Exclusiva com Carol Moreira" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-lg-12">
                        <p>Vin diesel fala sobre o filme Reativado que estreiou no dia 19 de janeiro. </p>
                    </div>
                </div>
            </section>
            <section id="camillerowe">
                <h2 class="cor-letra">Camile Rowe</h2>
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <iframe class="col-12" src="https://www.youtube.com/embed/BO80Rdh_PbE" title="Mango: entrevista a Camille Rowe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <p>Camille Rowe a protagonista do primeiro fashion film Journeys by Mango a apresentar a coleção feminina mais em</p>
                    </div>
                </div>
            </section>
            <section id="jasonsthan">
                <h2 class="cor-letra">Jason Statham</h2>
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <iframe class="col-12" src="https://www.youtube.com/embed/Q7pTtHIcZuU" title="Entrevista a Jason Statham - El Especialista: Resurrección" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <p>Conhecido como o cara durão de Carga Explosiva, Os Mercenários e Velozes & Furiosos 7, Jason Statham fez poucas comédias em sua carreira.</p>
                    </div>
                </div>
            </section>
            <section id="audreytautou">
                <h2 class="cor-letra">Audrey Tautou</h2>
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <iframe class="col-12" src="https://www.youtube.com/embed/GwqbAE6ir1w" title="Audrey Tautou live at the " Jonathan Ross Show" (2013) - TV excerpt" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <p>Audrey Justine Tautou é uma atriz francesa. Reconhecida na França por sua atuação em Vénus beauté que lhe rendeu o prêmio César de Atriz Revelação</p>
                    </div>
                </div>
            </section>
        </article>
    </div>
    <?php include "../rodape.php"; ?>
</body>
</html>