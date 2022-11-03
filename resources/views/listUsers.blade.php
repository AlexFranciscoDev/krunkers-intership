@extends((Request::wantsJson()) ? 'layouts.ajax' : 'layouts.app')
@section('title', 'Los krunkers - Usuarios')

@section('content')

<!-- Display favourite offers start -->

<!-- Display favourite offers end -->
<h2 class="mt-3">Usuarios</h2>

<!-- Button display filters end -->
<div class="row">
    <div>
        @foreach ($users as $user) 
            <p>Nombre: {{ $user->name }}</p>
            <p>Imagen:</p>
            <img src="{{ $user->userImg }}" alt="{{ $user->userImg }}"/>
        @endforeach
    </div>
</div>
@endsection

<!--Juego con el condicional para que no me muestre todo el contenido de la vista,
sino solo la div de ofertas-->