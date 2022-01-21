@extends('layouts.backend')
@section('content')
<section class="section">
        
     
      

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Associations</h4>
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
                                    <th>Noms membres</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Date d'affiliation</th>
                                    {{-- <th>Adresse</th> --}}
                                    <th>Titre</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                               @foreach ($users as $user)
                                   
                              
                                 <td>{{$user -> name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->telephone}}</td>
                                    <td>{{$user->create_at}}</td>
                                    {{-- <td>Essos</td> --}}
                                    @if($user->role_id)==1)
                                    <td>DONNEUR</td>
                                    @endif
                                   <td><a href="" class="btn btn-outline-primary">Chater</a></td>
                                 @endforeach
                                </tr>
                              
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection