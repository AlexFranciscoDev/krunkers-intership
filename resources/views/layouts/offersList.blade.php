<!-- Display offers start -->

    @forelse ($offers as $offer)
    <div class="border mt-3 p-3 w-100">
            <img src="{{ $offer->companyPhoto }}" style="float: right; width: 75px; height: 75px;""> 
            <h3>{{ $offer->name }}</h3>
            <h4>{{ $offer->area }}</h4>
            <span class="mr-5">{{ $offer->city }}</span>
            <span>{{ $offer->typeWorkday }}</span>
            <br>
            Descripción:
            <p>{{ $offer->description }}</p>
            Requisitos:
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero dolor, impedit aliquid nemo consequatur incidunt delectus deleniti, alias natus dolorum quas corporis accusantium ut excepturi!</p>
            <p>{{ $offer->requirements }}</p>
            Fecha publicación:
            <span>{{ $offer->created_at }}</span>
            <a class="float-right text-primary" href="offerDescription?idOffer={{ $offer->idOffer }}">Leer más...</a>
            <!-- Button to add favourites -->
            <div class="form-group">
                <form method="post" action={{route('offers.addToFavourites')}}>
                    {{ csrf_field() }}
                    <input type="hidden" name="offername" value="{{ $offer->name }}">
                    <input type="submit" value="Añadir favoritos" class="btn btn-primary">
                </form>
            </div>
    </div>
    @empty
        <p>No hay ninguna oferta</p>
    @endforelse  

<!-- Display offers end -->