@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Nouveau responsable</h4>
                  </div>
                  <form method="post" action="{{ route('directeur.Compte.store') }}">
                     @csrf
        {{csrf_field()}}
                 
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="email" name="mail" class="form-control">
                        
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mot de passe par défaut</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="text" name="password" value="00000000" readonly class="form-control">
                      </div>
                    </div>
                    
                    
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banque de sang</label>
                      <div class="col-sm-12 col-md-7">
                      
                      <select name="fosa" class="form-control">
                      @foreach($banks as $b)
                        <option value="{{$b->id}}">{{$b->fosas_name}}</option>
                        @endforeach
</select>

                      </div>
                    </div>
                     
                   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <button class="btn btn-success">Enregistrer</button>
                        <button class="btn btn-success">Reinitialiser</button>
                      </div>
                    </div>
                  </div>
                </div>
             </form> 
@endsection