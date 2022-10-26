<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <a href="{{route('producto.create')}}" class="btn btn-success"> 
        Crear Producto
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>
                        <a href="{{route('producto.edit', $producto->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>