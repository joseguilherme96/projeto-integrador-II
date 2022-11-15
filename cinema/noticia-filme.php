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
</head>
<body>
    <div class="container">
        <?php include "../nav.php"?>
        <div class="row">
            <div class="col-12">
                <a href="../index.php">Home</a> / <a href="index.php">Cinema</a> / <a href="filmes.php">Filmes</a> / <a href="noticia-filme.php">Noticia</a> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 ">
                <input type="text" class="form-control " placeholder="Pesquise sobre filmes,noticias.." />
            </div>
            <div class="col-2 p-2">
                <i class="bi-search "></i>
            </div>
        </div>
</body>
</html>