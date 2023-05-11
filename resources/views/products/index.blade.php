<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Vizualização Aurora</title>
</head>
<body>
    <header>
        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="/"><i class="ai-undo me-2 ms-n1"></i>Home</a></h2>
            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="/products/create"><i class="ai-undo me-2 ms-n1"></i>Criar listas</a></h2>
    </header>
    <div id="search-container" class="col-md-12">
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar....">
        </form>
    </div><br>



    <div id="lista-container" class="col-md-12">
        <h3>Segue os Dados Salvos</h3>
        <p>Esses dados estão salvos em sequencia</p>

        <div id="cards-container" class="row">
            @foreach ($products as $product )
                <div class="card-col-md-3">
                    <img width="100px" height="100px" src="/img/dados.png" alt="{{$product->name}}">
                    <div class="card-body">
                        <h4 class="card-name">{{$product->user_id}}</h4>
                        <h5 class="card-description">{{$product->title}}</h5>
                        <a href="/products/{{$product->id}}" class="btn btn-primary">Saber Mais</a>
                        <div><label for="">____________________________________________</label></div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

</body>
</html>
