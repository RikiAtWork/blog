<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
            <a class="nav-link" href="{{route('posts.index')}}">Listado de posts</a>
            <a class="nav-link" href="{{route('posts.create')}}">Crear posts</a>
            <a class="nav-link" href="{{route('posts.edit',  ['post' => 1])}}">Editar posts</a>
        </div>
        </div>
    </div>
</nav>