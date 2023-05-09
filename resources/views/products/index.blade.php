<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Vizualização Aurora</title>
</head>
<body>
    <header>
        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="/"><i class="ai-undo me-2 ms-n1"></i>Home</a></h2>
            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="/products/create"><i class="ai-undo me-2 ms-n1"></i>Criar listas</a></h2>
    </header>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Imagem</th>
                <th scope="col">Regulamento</th>
                <th scope="col">Comissão</th>

            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->user_id }}</td>
                <td>{{ $product->title }} </td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->image }}</td>
                <td>{{ $product->regulation }}</td>
                <td>{{ $product->comission }}</td>
                <td><a href="/product/edit/{{ $product->id }}"><input class="btn btn-primary" type="reset" value="Editar"></a></td>
                <td>
                    <form action="/product/destroy/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
