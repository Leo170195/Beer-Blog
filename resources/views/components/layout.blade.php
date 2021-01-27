@props(['scripts',])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{$head}}
<body>
    <div id="app">
       <x-navbar/>
       <main>
           {{$slot}}
        </main>
        <x-footer/>
    </div>
    @stack('scripts')
</body>
</html>
