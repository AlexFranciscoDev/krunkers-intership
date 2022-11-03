@extends('layouts.app')
@section('title', 'Los krunkers - Login')

@section('content')
        <h2 class="mt-2 text-center font-weight-bold">Krunkers</h2>
        <h3 class="text-center mb-4 font-weight-light">Conviertete en un professional</h3>


        <!-- Form start -->
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12 shadow py-3 px-4 bg-light text-dark m-0 m-auto">
                @if(app('request')->has('success'))
                    @if(app('request')->input('success'))
                    <div class="alert alert-success">
                        Usuario logueado correctamente
                    </div>
                    @else
                    <div class="alert alert-danger">
                        El usuario introducido no existe
                    </div>
                    @endif
                @endif 
                <!--Validation errors -->
                <form class="m-0 m-auto pt-3" method="post" action="/loginUser">
                    {{ csrf_field() }}
                    <label for="email">Correo electrónico:</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                    <!-- Error email -->
                    @error('email')
                    <span class="error">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password">
                    <!-- Error password -->
                    @error('password')
                    <span class="error">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-block btn-primary mt-2">Iniciar sesión</button>
                </form>
                <br>
                <p>¿No estas registrado? <a href="#" class="text-primary">Únete</a></p>
            </div>
            <!-- Form end -->
        </div>
@endsection