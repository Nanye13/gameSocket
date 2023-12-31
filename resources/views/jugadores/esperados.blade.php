<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
</head>

<body>
    <form action="{{ route('espera') }}" method="post">
        @csrf
        <label for="">{{ $nombre_equipo }}</label>

        {{-- <label for="" id="espera"> EN ESPERA</label> --}}
        <label for="">Gracias por participar!</label>
        <input type="text" value="{{ $equipo_id }}" id="equipo_id" name="equipo_id" hidden>
        <input type="text" value="{{ $nombre_equipo }}" id="nombre_equipo" name="nombre_equipo" hidden>
        <button  class="btn btn-primary" id="boton" type="submit">Ok</button>

    </form>


    
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script>
    
    </script>

</body>

</html>
