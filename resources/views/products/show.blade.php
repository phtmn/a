<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Saber Mais</title>
</head>
<body>

    <div class="justify-content-center " style="height: 100vh; color:white ;background-color: #2c3e50;">


    <header>
        <a href="/" class="btn btn-secondary me-3 me-sm-4 ">HOME</a>
    </header>

                <h1>{{$product->user_id}}</h1><br>
                <h4>#{{$product->id}}</h4><br>
                <p>{{$product->title}}</p><br>
                <p>{{$product->description}}</p><br>
                <p>{{$product->comission}}</p><br>
                <p>{{$product->regulation}}</p><br>

      </div>

</body>
</html>
