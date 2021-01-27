<x-layout>
    <x-head title="Panel admin" />
     
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
              <a href="{{route('admin.edit', $article)}}" class="btn bg-nav2">Modifica articolo</a>
              {{-- modale --}}
              <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                Cancella Articolo
            </button>
  
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sei sicuro di volerlo cancellare?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Annulla</button>
                            <form action="{{route('admin.delete', compact('article'))}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Cancella Definitivamente</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>


            </div>
          </div>
              
          @endforeach
        </div>
        {{-- @push('scripts')
            <script>
              
            let navbar = document.querySelector("#nav")
            console.log(navbar.offsetHeight);
            window.addEventListener('scroll' , () => {
                if(window.pageYOffset + navbar.offsetHeight >= window.innerHeight) {
                    navbar.classList.remove("bg-nav")
                    navbar.classList.add("bg-nav2")
                    navbar.classList.add("shadow")
  
                } else{
                    navbar.classList.add("bg-nav")
                    navbar.classList.remove("bg-nav2")
                    navbar.classList.remove("shadow")
                }
            })
            </script>
        @endpush --}}
  </x-layout>