@slot('head')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{$title}}</title>
    {{-- map --}}
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    @foreach ($scripts ?? [] as $script)
    
    <script src="{{ asset($script) }}" defer></script>

    
    @endforeach

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/b758555ce5.js" crossorigin="anonymous"></script>
    {{-- favicon --}}
    <link rel='shortcut icon' type='image/x-icon' href='/img/logo.ico' />
</head>
@endslot