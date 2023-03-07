<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>crear factuera</title>
</head>
<body>
<form action="{{route('facturas.store')}}" method="post">
    @csrf
    @method('POST')
    <h1> Crear una nueva factura </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <dic class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label>Numero</label>
                                <input type="text" name="numero" id="numero" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fechas" class="form-label">Fechas</label>
                                <input type="date" name="fecha" class="form-control" id="fecha">
                            </div>
                            <div class="form-group">
                                <label>total de productos</label>
                                <input type="number" name="total_de_productos" id="total_de_productos"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Precio total</label>
                                <input type="number" name="precio_total" id="precio_total" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" style="float:right">Crear</button>
                                <a href="{{route('facturas.index')}}" class="list-group-item list-group-item-action">volver</a>
                            </div>
                        </form>
                    </dic>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
