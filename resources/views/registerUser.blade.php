@extends('layouts.app')
@section('title', 'Los krunkers - Registrarse')

@section('content')
        <h2 class="mt-3 text-center font-weight-bold">Krunkers</h2>
        <h3 class="text-center mb-4 font-weight-light">Conviertete en un professional</h3>


        <!-- Form start -->
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12 shadow py-3 px-4 bg-light text-dark m-0 m-auto">
            @if(app('request')->has('success'))
                @if(app('request')->input('success'))
                <div class="alert alert-success">
                    Usuario registrado correctamente
                </div>
                @endif
            @endif 
            @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
                <!--Validation errors -->
                <form class="m-0 m-auto pt-3" method="post" action={{route('users.addUser')}} enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    <!-- Error name -->
                    @error('name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <label for="lastName">Apellidos:</label>
                    <input type="text" class="form-control  @error('lastName') is-invalid @enderror" id="lastName" name="lastName" value="{{ old('lastName') }}">
                    <!-- Error lastname -->
                    @error('lastName')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <label for="email">Correo electrónico:</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    <!-- Error email -->
                    @error('email')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <label for="group">Grupo:</label>
                    <input type="text" class="form-control  @error('group') is-invalid @enderror" id="group" name="group" value="{{ old('group') }}">
                    <!-- Error group -->
                    @error('group')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <label for="phone">Número de teléfono:</label>
                    <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                    <!-- Error phone -->
                    @error('phone')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" value="">
                    <!-- Error password -->
                    @error('password')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <label for="passwordConfirm">Vuelve a introducir la contraseña:</label>
                    <input type="password" class="form-control  @error('passwordConfirm') is-invalid @enderror" id="passwordConfirm" name="passwordConfirm" value="">
                    <br>
                    <label for="userImg">Foto perfil: </label><br>
                    <input type="file" name="userImage" value="">
                    <br>
                    <button type="submit" class="btn btn-block btn-primary">Registrarse</button>
                </form>
                <br>
                <p>¿Ya estas registrado? <a href="#" class="text-primary">Inicia sesión</a></p>
            </div>
            <!-- Form end -->
        </div>


@endsection




