@extends('layouts.backend')
@section('content')
<section class="section">
        
                   

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
              <div>     
<a href="{{route('directeur.BloodBank.create')}}" class="btn btn-warning">Ajouter une banque de sang</a>
</div>  
                <div class="card">
                  <div class="card-header">
                    <h4>Banques de sang</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                       
                                <thead>
                                <tr>
                                    <th>Formation sanitaire</th>
                                    <th>Responsable</th>
                                     <th>Gestionnaire</th>
                                     <th>Region</th>
                                    <th>District</th>
                                    <th>quartier</th>
                                    <th>Telephone</th>
                                    <th>Date creation</th>
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
                                    <td>{{$respo[$i]}}</td>
                                     <td>{{$gest[$i]}}</td>
                                     <td>{{$regions[$i]->name}}</td>
                                    <td>{{$districts[$i]->name}}</td>
                                    <td>{{$b->location}}</td>
                                    <td>{{$b->contact}}</td>
                                         <td>{{$b->created_at}}-</td>
                                    <td><a href="{{route('directeur.BloodBank.show', $b->id)}}"  class="btn btn-sm btn-success">Voir plus</a>
                                    <a href="{{route('directeur.BloodBank.edit', $b->id)}}" class="btn btn-sm btn-success">Modifier</a>
                                    <a class="btn btn-outline-danger" href="" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" title=" {{ __('messages.delete') }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form id="delete-form" action="{{ route('directeur.BloodBank.destroy', $b->id) }}" method="POST" class="d-none">
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