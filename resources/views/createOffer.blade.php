@extends((Request::wantsJson()) ? 'layouts.ajax' : 'layouts.app')

@section('title', 'Los krunkers - Create offer')
@section('content')
        <!-- Create offer start -->
        <div class="createOffer mt-5 mb-4" style="margin-top: 20px;">
            <div class="container" >
                <h1 class="text-center text-dark mb-3">CREAR OFERTA</h1>
                <!-- Form start -->
                <div class="col-lg-5 col-md-8 col-sm-12 shadow-lg py-3 px-4 bg-light text-dark m-0 m-auto">
                @if(app('request')->has('success'))
                    @if(app('request')->input('success'))
                    <div class="alert alert-success">
                        Oferta guardada con exito
                    </div>
                    @endif
                 @endif    
                <form class="m-0 m-auto pt-3" action={{route('offers.addOffer')}} method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="offerName">Nombre:</label>
                            <input type="text" class="form-control @error('offerName') is-invalid @enderror" id="offerName" name="offerName"
                                placeholder="Nombre oferta...">
                            @error('offerName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="typeWorkday">Tipo de jornada:</label>
                            <select class="form-control @error('typeWorkday') is-invalid @enderror" name="typeWorkday">
                                <option>Total</option>
                                <option>Parcial</option>
                            </select>
                            @error('typeWorkday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="area">Area:</label>
                            <select class="form-control @error('area') is-invalid @enderror" name="area">
                                <option>Informática</option>
                                <option>Marketing</option>
                                <option>Hosteleria</option>
                                <option>Sanidad</option>
                                <option>Diseño</option>
                            </select>
                            @error('area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"
                                placeholder="Se busca..."></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">Ciudad:</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" rows="3"
                                placeholder="Ciudad...">
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="requirements">Requerimientos:</label>
                            <textarea class="form-control @error('requirements') is-invalid @enderror" id="descCompany" name="requirements" rows="3"
                                placeholder="Conocimientos en..."></textarea>
                            @error('requirements')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Publicar</button>
                    </form>
                </div>
                <!-- Form end -->
            </div>
        </div>
        <!-- Create offer end -->
@endsection