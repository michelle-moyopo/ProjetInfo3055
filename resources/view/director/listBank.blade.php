@extends('layouts.backend')
@section('content')
<section class="section">
        
     
      

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Banques de sang</h4>
                        <a href="{{route('addBankForm')}}" class="btn btn-warning">Ajouter une banque de sang</a>
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
                                    <th>Responsable</th>
                                     <th>Gestionnaire</th>
                                    <th>Adresse</th>
                                    <th>Nombre poches AB+</th>
                                   <th>Nombre poches AB-</th>
                                   <th>Nombre poches A+</th>
                                   <th>Nombre poches A-</th>
                                   <th>Nombre poches B+</th>
                                   <th>Nombre poches B-</th>
                                   <th>Nombre poches O+</th>
                                   <th>Nombre poches O-</th>
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
                                    <td>{{$b->name}}</td>
                                    <td>{{$respo[$i]}}</td>
                                     <td>{{$gest[$i]}}</td>
                                    <td>{{$b->address}} </td>
                                    <td>{{$b->num_ab_p}} </td>
                                    <td>{{$b->num_ab_m}}</td>
                                    <td>{{$b->num_a_p}}</td>
                                     <td>{{$b->num_a_m}}</td>
                                      <td>{{$b->num_b_p}}</td>
                                       <td>{{$b->num_b_m}}</td>
                                        <td>{{$b->num_o_p}}</td>
                                         <td>{{$b->num_o_m}}</td>
                                         <td>{{$b->created_at}}-</td>
                                    <td><a href="{{route('voirPlusBanque', ['id'=>$b->id])}}"  class="btn btn-primary">Voir plus</a><a href="/editBankForm?id={{$b->id}}" class="btn btn-warning">Modifier</a><a href="/delBank?id={{$b->id}}" class="btn btn-danger">Supprimer</a></td>
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