<x-layout>
    <x-head title="Modify article" />
     
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">regions</th>
                                <th scope="col">image</th>
                                <th scope="col">modify</th>
                                <th scope="col">delete</th>
                                <th scope="col">articolo completo</th>
                            </tr>
                        </thead>
                        @foreach ($articles as $article)
                    <tbody>
                      <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td nowrap>{{$article->title}}</td>
                        <td nowrap>{{$article->regions}}</td>
                        <td nowrap><div class="img-beer2" style="background-image: url('{{Storage::url($article->img)}}')"></td>
                            <td nowrap><a href="{{route('admin.edit', $article)}}" class="btn bg-nav2">Modifica articolo</a></td>
                            <td nowrap> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Cancella Articolo
                            </button></td>
                            <th scope="row"><a href="{{route('detail', $article)}}" class="btn btn-success">Show</a></th>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
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
            <div style="height: 500px"></div>
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
        </x-layout>


            {{-- </div>
            <div class="col-12 col-md-4 img-beer2 my-5" style="background-image: url('{{Storage::url($article->img)}}')">
  
            </div>
            <div class="col-12 col-md-8 my-5 pl-5 pt-5">
              <h2>{{$article->title}}</h2> --}}
              {{-- <p>{{$article->description}}</p> --}}
              {{-- <h5>Regione di provenienza {{$article->regions}}</h5>
              <h6>{{$article->created_at->format('d-m-Y')}}</h6> --}}
              {{-- <a href="{{route('admin.edit', $article)}}" class="btn bg-nav2">Modifica articolo</a> --}}
              {{-- modale --}}
              <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                Cancella Articolo
            </button> --}}
                    <!-- Modal -->