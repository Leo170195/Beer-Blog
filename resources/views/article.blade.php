<x-layout>
    <div class="container pt-5 bg-article">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        @if (session('status'))
                            <div id="thankyou" class="alert alert-success">
                                {{ session('status') }}
                            </div>
                         @endif
                    </div>
                </div>
                <form method="POST" action="{{route('article.submit')}}" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row py-4">
                        <div class="col-12 col-md-6 offset-md-3 ">
                            <label for="formGroupExampleInput" class="bg-text">Nome birra</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="beer name" value="{{old('title')}}" name="title">
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-12 col-md-6 offset-md-3">
                            <label for="formGroupExampleInput" class="bg-text">Descrizione Birra</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="description beer" value="{{old('description')}}" name="description">
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-12 col-md-6 offset-md-3">
                            <select class="custom-select" name="regions">
                                <option selected value="{{old('regions')}}">Seleziona la regione della tua Birra</option>
                                <option value="Abruzzo">Abruzzo</option>
                                <option value="Basilicata">Basilicata</option>
                                <option value="Calabria">Calabria</option>
                                <option value="Campania">Campania</option>
                                <option value="Emilia Romagna">Emilia Romagna</option>
                                <option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
                                <option value="Lazio">Lazio</option>
                                <option value="Liguria">Liguria</option>
                                <option value="Lombardia">Lombardia</option>
                                <option value="Marche">Marche</option>
                                <option value="Molise">Molise</option>
                                <option value="Piemonte">Piemonte</option>
                                <option value="Puglia">Puglia</option>
                                <option value="Sardegna">Sardegna</option>
                                <option value="Sicilia">Sicilia</option>
                                <option value="Toscana">Toscana</option>
                                <option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
                                <option value="Umbria">Umbria</option>
                                <option value="Valle d'Aosta">Valle d'Aosta</option>
                                <option value="Veneto">Veneto</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-12 col-md-6 offset-md-3">
                            <div class="form-group">
                              <label for="exampleFormControlFile1" class="bg-text">Carica le foto della tua birra</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                            </div>
                        </div>
                    </div>
                    <div class="row py-4 ">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn bg-nav2">Invia</button>
                        </div>
                    </div>
                  </form> 
            </div>
        </div>
    </div>
</x-layout>