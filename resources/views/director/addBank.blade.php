@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Nouvelle banque de sang</h4>
                  </div>
                  <form method="post" action="{{ route('directeur.BloodBank.store') }}">
                     @csrf
        {{csrf_field()}}
                
                    
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Formation sanitaire</label>
                      <div class="col-sm-12 col-md-7">
                       
                      <select name="fosa" class="form-control">
                      @foreach($fosas as $f)
                        <option value= "{{$f->id}}">{{$f->name}}</option>
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