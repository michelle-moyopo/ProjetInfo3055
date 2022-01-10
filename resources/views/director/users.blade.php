@extends('layouts.backend')
@section('content')
<section class="section">
        
     
      

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Donneurs/receveurs</h4>
                        <a href="{{route('addUserForm')}}" class="btn btn-warning">Ajouter un utilisateur</a>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                     <th>Telephone</th>
                                    <th>Ajouté le</th>
                                   
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  
                                     @foreach($users as $u)
                                <tr>
                                    <td>{{$u->name}}</td>
                                   
                                    <td>{{$u->email}} </td>
                                    <td>{{$u->telephone}} </td>
                                    <td>{{$u->created_at}}</td>
                                   
                                    <td><a href="{{route('voirPlusUser', ['id'=>$u->id])}}"  class="btn btn-primary">Voir plus</a><a href="{{route('editUserForm', ['id'=>$u->id])}}" class="btn btn-warning">Modifier</a><a href="/delUser?id={{$u->id}}" class="btn btn-danger">Supprimer</a></td>
                                </tr>
                                
          @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection