@extends('layouts.backend')
@section('content')
<section class="section">
        
     
      

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Affiliations banques de sang</h4>
                        <div class="card-header-form">
                        <form method="post" action="/affBank?id={{$user}}">
                               @csrf
        {{csrf_field()}}
                                <div class="input-group">
                                    <label for="grp">Ajouter une affiliation dans une banque de sang</label>
                                    <select name="bank" class="form-control">
                                         @foreach($TBank as $tb)
                                         <option value="{{$tb->id}}">{{$tb->name}}</option>
                                         @endforeach
                                    </select>
                                   
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">Ajouter</button>
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
                                    <th>Nom banque</th>
                                    <th>Adresse banque de sang</th>
                                     <th>Date d'intégration</th>
                            
                                   
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                      $i=0;
                                      @endphp
                                     @foreach($ba as $b)
                                <tr>
                                    <td>{{$bank[$i]->name}}</td>
                                   
                                    <td>{{$bank[$i]->address}} </td>
                                    <td>{{$b->created_at}} </td>
                                   
                                   
                                    <td><a href="/delAffBank?id={{$b->id}}&user={{$user}}" class="btn btn-danger">Supprimer</a></td>
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

           <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Affiliations groupes</h4>
                        <div class="card-header-form">
                        <form method="post" action="/affGrp?id={{$user}}">
                               @csrf
        {{csrf_field()}}
                                <div class="input-group">
                                    <label for="grp">Ajouter une affiliation dans un groupe</label>
                                    <select name="groupe" class="form-control">
                                         @foreach($TGrp as $tg)
                                         <option value="{{$tg->id}}">{{$tg->name}}</option>
                                         @endforeach
                                    </select>
                                   
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">Ajouter</button>
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
                                    <th>Nom groupe</th>
                                    <th>Description</th>
                                     <th>Date d'intégration</th>
                            
                                   
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                      $i=0;
                                      @endphp
                                     @foreach($grp as $g)
                                <tr>
                                    <td>{{$group[$i]->name}}</td>
                                   
                                    <td>{{$group[$i]->address}} </td>
                                    <td>{{$g->created_at}} </td>
                                   
                                   
                                    <td><a href="/delAffGrp?id={{$g->id}}&user={{$user}}" class="btn btn-danger">Supprimer</a></td>
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