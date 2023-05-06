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
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição do Produto</th>
                <th scope="col">Intenção</th>

            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }} </td>
                <td>{{ $product->intention }}</td>
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
