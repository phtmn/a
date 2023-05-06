<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- Page wrapper-->
<main class="page-wrapper mt-4">
    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->


    <!-- Page content-->
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">



            <!-- Page content-->
            <div class="col-lg-12 pt-4 pb-2 pb-sm-4">


                <!-- Basic info-->
                <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href=""><i class="ai-undo me-2 ms-n1"></i>Bens</a></h2>
                        </div>
                        <div class="d-flex align-items-center">

                        </div>
                        <form action="/products/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 container">
                                <label class="form-label" for="titulo">Título</label>
                                <input class="form-control" type="text" name="title" id="title" required>

                                <label class="form-label" for="titulo">Descrição</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" required></textarea>

                                <br>
                                <label class="form-label" for="titulo">Intenção</label>
                                <select class="form-control" name="intention" id="intention" required>
                                    <option value="Coletar">Coletar</option>
                                    <option value="Descartar">Descartar</option>
                                </select>
                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit">Save</button>
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
