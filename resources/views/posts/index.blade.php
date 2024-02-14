@extends('plantilla')

@section('titulo', 'listado')

@section('contenido')
    <div class="content">
        <h1>Listado de posts</h1>
        <ul>
        @forelse($posts as $post)
            <li>
                <span>{{$post['id']}} - {{$post['titulo']}} - {{$post->usuario->login}}</span>
                <a href="{{ route('posts.show', $post['id'])}}" class="btn btn-primary">Mostrar</a> 
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
            </li>
        
        @empty
            <li>No se encontraron titulos</li>
        @endforelse
        {{ $posts->links() }}

        </ul>
    </div>
@endsection