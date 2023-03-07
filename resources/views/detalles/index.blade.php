<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
<h1>lISTAR FACTURAS</h1>

<a href="{{route('productos.create')}}">Crear un nuevo producto</a> <br>

<a href="{{route('facturas.create')}}">Crear una factura</a>


<div class="container">
    <table>
        <thead>
        <tr>
            <td>ID_FACTURA</td>
            <td>ID_PRODUCTO</td>
            <td>CANTIDAD</td>
        </tr>
        </thead>
        <tbody>
        @foreach($detalles as $detalle)
            <tr>
                <td>{{$detalle -> Factura -> id }}</td>
                <td>{{$detalle ->Producto -> id}}</td>
                <td>{{$detalle -> cantidad}}</td>

            </tr>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <form action="{{ route('facturas.destroy', $detalle->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn  pink lighten-4" type="submit">Delete</button>
                    </form>
                    <a href="{{route('facturas.edit',$detalle->id)}}"
                       class="btn lime accent-2 ">Editar</a>
                    <a href="{{route('facturas.show',$detalle->id)}}" class="btn btn-success">Ver</a>
                </div>
            </td>
        @endforeach
        </tbody>.
    </table>
</div>
</body>
</html>

</body>
</html>
