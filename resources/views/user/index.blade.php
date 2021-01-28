<x-layout >
    <x-head title="Pannello User" />
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col"> Admin</th>
                            <th scope="col">Cancella Utente</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    
                    
                    <tbody>
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td nowrap>
                                @if ($user->is_admin)
                                <form action="{{route('user.index.remove', compact('user'))}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rimuovi Admin</button>
                                </form>
                                @else
                                <form action="{{route('user.index.add', compact('user'))}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-success">Promuovi Admin</button>
                                </form>
                                @endif
                            </td>
                            <td nowrap> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Cancella Utente
                            </button></td>
                        </tr>
         
                    </tbody>
                    @endforeach
                </table>
                
            </div>
        </div>
    </div>
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
            <form action="{{route('user.delete', compact('user'))}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Cancella Definitivamente</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div style="height: 1000px"></div>
            </x-layout>