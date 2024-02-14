@extends('plantilla')

@section('titulo', 'ficha')

@section('contenido')
    <div class="content">
    <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="col-auto">Titulo</th>
                    <th scope="col" class="col">Contenido</th>
                    <th scope="col" class="col">Fecha</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                    <tr>
                        <td class="col">{{$post["titulo"]}}</td>
                        <td class="col">{{$post["contenido"]}}</td>
                        <td class="col">{{$post["created_at"]}}</td>
                    </tr>
            </tbody>
        </table>
        <a href="{{route('posts.index')}}">Volver</a>
    </div>
@endsection