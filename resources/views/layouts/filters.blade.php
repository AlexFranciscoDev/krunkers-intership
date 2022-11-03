<!-- Filters start -->





<!--<button data-toggle="collapse" data-target="#filtros" class="d-lg-none d-md-none d-sm-block">Mostrar
    filtros</button>
-->
<div id="filtros" class="collapse border p-2 d-sm-block d-lg-block">

    <form id="filterKeyword" method="post" action="/resultKeyword">
        {{ csrf_field() }}
        <!-- Palabras clave-->
        <h5>Palabra clave</h5>
        <input type="text" placeholder="Buscar oferta" name="keyword" value="{{ old('keyword')}}" id="form-keyword">
        <input type="submit" value="Buscar">
        <!--
        <input type="submit" value="Buscar">
        -->
    </form>
    <form method="post" action="/resultFilter" id="filterMultiple">
        {{ csrf_field() }}
        <!-- Orden ofertas -->
        <h5>Ordenar ofertas: </h5>
        <input class="order" type="radio" name="order" value="desc" id="orderDesc">
        <label for="order">Más recientes</label><br>
        <input class="order" type="radio" name="order" value="asc" id="orderAsc">
        <label for="order">Más antiguos</label><br>

        <!-- Fecha-->
        <h5 class="mt-2">Fecha</h5>
        <input type="radio"  name="datePublication" value="anyDate" checked>
        <label for="date">Cualquier fecha</label><br>
        <input type="radio" name="datePublication" value="24hours">
        <label for="date">Últimas 24 horas</label><br>
        <input type="radio" name="datePublication" value="lastWeek">
        <label for="date">Última semana</label><br>
        <input type="radio" name="datePublication" value="lastMonth">
        <label for="date">Último mes</label><br>

        <!-- Tipo jornada laboral -->
        <h5>Jornada laboral</h5>
        <input type="radio" id="total" name="typeWorkday" value="total">
        <label for="typeWorkday">Total</label><br>
        <input type="radio" id="parcial" name="typeWorkday" value="parcial">
        <label for="typeWorkday">Parcial</label><br>

        <!-- Ámbito -->
        <h5>Ámbito</h5>
        @foreach($filters["areas"] as $area)
            <input type="checkbox" class="area" name="area[]" value="{{ $area[1] }}">
            <label for="area">{{ $area[0] }}</label><br>
        @endforeach

        <!-- Ciudad -->
        <h5>Ciudad</h5>
        @foreach($filters["cities"] as $city)
            <input type="checkbox" name="city[]" value="{{ $city[1] }}">
            <label for="city">{{ $city[0] }}</label><br>
        @endforeach
        <!--
        <input type="button"  onclick="processFilter()" value="Buscar">
        -->
        <input type="submit" value="Buscar">
        
    </form>
</div>
<!-- Filters end -->
<!-- Script to connect the filters with axios -->
<script>
    // Filter keyword
    /*
    MADE WITH VAINILLA JS
    function processKeyword() {
        axios.post('/resultKeyword', {
            keyword: document.getElementById('form-keyword').value
        })
        .then(function(response) {
            console.log(response);
            $('#offersList').html('').append(response.data);

        })
        .catch(function(error) {
            console.log(error);
        });
    }*/
    // MADE WITH JQUERY
    $('#filterKeyword').submit(function(e) {
        e.preventDefault();
        var data = $('#filterKeyword').serialize();
        axios.post('/resultKeyword', data) 
            .then(response => {
                console.log(response);
                $('#offersList').replaceWith(response.data)
            })
        }
    )
    // Multiple filter
    /*
    MADE WITH VAINILLA JS
    function processFilter() {
        var data = $('#formFilters').serialize();
        axios.post('/resultFilter', data) 
        .then(function(response) {
            console.log(this.order);
            $('#offersList').html('').append(response.data);
        })
    }*/
    // MADE WITH JQUERY
    $('#filterMultiple').submit(function(e) {
        e.preventDefault();
        var data = $('#filterMultiple').serialize();
        axios.post('/resultFilter', data) 
            .then(response => {
                console.log(response);
                $('#offersList').replaceWith(response.data)
            })
        }
    )
</script>