<x-layout>
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-12 mt-5 d-flex justify-content-center">
                <img src="{{Storage::url($article->img)}}" class="img-fluid" alt="beer">
            </div>
        </div>
    </div>
    <div class="container-fluid bg-nav2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 my-5 pl-5 pt-5 text-center text-light">
              <h2>{{$article->title}}</h2>
              <p class="lead">{{$article->description}}</p>
              <h6>{{$article->created_at->format('d-m-Y')}}</h6>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center mb-3">
                <p class="lead">Regione di provenienza {{$article->regions}}</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img src="/img/{{$article->regions}}.png" alt="{{$article->regions}}">
            </div>
        </div>
    </div>
         
</x-layout>