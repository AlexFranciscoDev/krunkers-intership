@extends((Request::wantsJson()) ? 'layouts.ajax' : 'layouts.app')
@section('title', 'Los krunkers - Ofertas')

@section('content')
@if(!Request::wantsJson())
<h2 class="mt-3">Ofertas</h2>

<!-- Button display filters end -->
<div class="row">
    <div class="col-lg-8 col-sm-12 order-lg-1 order-sm-2">
        @endif
        <div id="offersList">
            @include('layouts.offersList')
        </div>
        @if(!Request::wantsJson())
    </div>

    <!-- Display offers end -->
    <div class="col-lg-4 mt-3 col-sm-12 order-lg-2 order-sm-1">
        @include('layouts.filters')
    </div>
    @endif
</div>
@endsection

<!--Juego con el condicional para que no me muestre todo el contenido de la vista,
sino solo la div de ofertas-->