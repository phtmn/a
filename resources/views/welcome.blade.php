<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Aurora</title>
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
              <a class="nav-link" href="/">Home <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products/create">Criar</a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Pesquisar" aria-label="Pesquisar">
          </form>
        </div>
      </nav>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif
            </div>
        </div>
    </main>
    <br>

    <div id="lista-container" class="col-md-12">
        <h3>Segue os Dados Salvos</h3>
        <p>Esses dados estão salvos em sequencia</p>

        <div id="cards-container" class="row">
            @foreach ($products as $product )
                <div class="card-col-md-3">
                    <img width="100px" height="100px" src="/img/imagem.jpg" alt="{{$product->name}}">
                    <div class="card-body">
                        <h4 class="card-name">{{$product->user_id}}</h4>
                        <h5 class="card-description">{{$product->title}}</h5>
                        <a href="/products/{{$product->id}}" class="btn btn-primary">Saber Mais</a>

                    </div>
                </div>

            @endforeach
        </div>
    </div>
</body>
</html>
