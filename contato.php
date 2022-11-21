<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <?php include "nav.php"?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                    <h1>Formulario</h1>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row">
            <div class="col-6">
            <label>Nome</label>
            <input type="text" class="form-control" placeholder="Nome">
            </div>
            <div class="col-6">
            <label>E-mail</label>
            <input type="text" class="form-control" placeholder="example@hotmail.com">
            </div>
            <div class="col-12 pb-5">
            <label>E-mail</label>
            <textarea type="text" class="form-control" placeholder="Mensagem" width="700"></textarea>
            </div>
            </div>
        </form>
    </div>
    <?php include "rodape.php"?>
</body>
</html>