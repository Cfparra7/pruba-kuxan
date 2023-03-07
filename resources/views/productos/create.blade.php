<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>crear producto</title>
</head>
<body>
<form action="{{route('productos.store')}}" method="post">
    @csrf
    @method('POST')
    <h1> Crear nuevo producto </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <dic class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" name="precio" class=" form-control" id="precio">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" style="float:right">Crear</button>
                                <a href="{{route('productos.index')}}" class="list-group-item list-group-item-action">volver</a>
                            </div>
                        </form>
                    </dic>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
</body>
</html>
