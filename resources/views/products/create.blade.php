<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Criação Aurora</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Aurora</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home </a>
            </li>
      </nav>
<main class="page-wrapper mt-4">

    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

            <div class="col-lg-12 pt-4 pb-2 pb-sm-4">


                <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">

                        <div class="d-flex align-items-center">

                        </div>
                        <form action="/products/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 container">
                                <label class="form-label" for="user_id">Nome de Usuário:</label>
                                <input class="form-control" type="text" name="user_id" id="user_id" required>

                                <label class="form-label" for="titulo">Título:</label>
                                <input class="form-control" name="title" id="title" cols="15" rows="10" required>

                                <br>
                                <label class="form-label" for="description">Descrição:</label>
                                <input class="form-control" type="text" name="description" id="decription">

                                <br>
                                <label class="form-label" for="image">Imagem:</label>
                                <input class="form-control-file" type="file" name="image" id="image">
                                <br>
                                <br>
                                <label class="form-label" for="regulation">Regulamento:</label>
                                <input class="form-control" type="text" name="regulation" id="regulation">

                                <br>
                                <label class="form-label" for="comission">Comissão:</label>
                                <input class="form-control" type="text" name="comission" id="comission">

                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
</body>
</html>
