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
                                    <th>Name</th>
                                    <th>Description</th>
                                     <th>Crée le</th>
                                    <th>crée par</th>
                                    <th>Banque affiliée</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                   @php
          $i=0;
          @endphp
                                     @foreach($grp as $g)
                                <tr>
                                    <td>{{$g->name}}</td>
                                    <td>{{$g->description}}</td>
                                     <td>{{$g->created_at}}</td>
                                      <td>{{$noms[$i]}}</td>
                                      <td>{{$nombank[$i]}}</td>
                                  
                                   
                                   
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

    </section>
@endsection