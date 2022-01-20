@extends('layouts.backend')
@section('content')
<section class="section">
        
                   

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
              <div>     
<a href="{{route('directeur.Compte.create')}}" class="btn btn-warning">Ajouter un comptes</a>
</div>  
                <div class="card">
                  <div class="card-header">
                    <h4>Responsables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                       
                                <thead>
                                <tr>
                                <th>Formation sanitaire</th>
                                    <th>Nom</th>
                                    
                                     <th>Email</th>
                                     <th>Telephone</th>
                                     <th>date d'ajout</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                     @php
                                      $i=0;
                                      @endphp
                                     @foreach($banks as $b)
                                <tr>
                                <td> {{$b->fosas_name}}</td>
                                    <td>{{$respo[$i]->id}}</td>
                                    
                                    <td>{{$respo[$i]->email}}</td>
                                    <td>{{$respo[$i]->telephone}}</td>
                                         <td>{{$respo[$i]->created_at}}-</td>
                                    <td>
                                    <a href="{{route('directeur.Compte.edit',  $respo[$i]->id)}}" class="btn btn-sm btn-success">Modifier</a>
                                    <a class="btn btn-outline-danger" href="" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" title=" {{ __('messages.delete') }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form id="delete-form" action="{{ route('directeur.Compte.destroy', $respo[$i]->id) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form></td>
                                </tr>
                                 @php
          $i++;
          @endphp
          @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
@endsection