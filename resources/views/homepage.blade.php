<x-layout :scripts="$scripts">
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="font-weight-light text-light">Dove la birra incontra i piccoli intenditori</h1>
            </div>
          </div>
        </div>
      </header>
      <div class="container" id="no-nav">
          <div class="row">
              <div class="col-12 text-center my-5">
                  <h1>Il blog adatto per chi ama la birra</h1>
              </div>
          </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 bg-nav2 p-5 text-center"> 
            <a class=" text-light font-weight-bold lead" href="{{route('cartina')}}">Vorresti vedere le Birre della tua regione? Scopri la cartina interattiva dell'Italia <i class="fas fa-map-marked-alt fa-3x"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
        @foreach ($articles as $article)
        <div class="row">
          <div class="col-12 col-md-4 img-beer my-5" style="background-image: url('{{Storage::url($article->img)}}')">

          </div>
          <div class="col-12 col-md-8 my-5 pl-5 pt-5">
            <h2>{{$article->title}}</h2>
            {{-- <p>{{$article->description}}</p> --}}
            <h5>Regione di provenienza {{$article->regions}}</h5>
            <h6>{{$article->created_at->format('d-m-Y')}}</h6>
            <a href="{{route('detail', $article)}}" class="btn bg-nav2">Scopri di più</a>
          </div>
        </div>
            
        @endforeach
      </div>
      <div style="height: 800px"></div>
</x-layout>