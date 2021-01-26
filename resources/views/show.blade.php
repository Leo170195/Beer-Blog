<x-layout>
  @foreach ($beer as $article)
  <div class="row">
    <div class="col-12 text-center my-5">
            <h1>Benvenuti tra le birre dela regione {{$article->regions}}</h1>
          </div>
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
    <div class="container-fluid">
        <div class="row">
          <div class="col-12 bg-nav2 text-center fixed-bottom"> 
            <a class=" text-light font-weight-bold lead" href="{{route('cartina')}}">Torna alla cartina interattiva dell'Italia! <i class="fas fa-map-marked-alt fa-2x"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
</x-layout>