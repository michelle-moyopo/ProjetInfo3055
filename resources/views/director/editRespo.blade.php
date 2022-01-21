@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Edit responsable</h4>
                  </div>
                  <form method="post" action="{{ route('directeur.Compte.update', $u->id) }}">
                     @csrf
        {{csrf_field()}}
                 
        @method('PUT')
                    
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banque de sang</label>
                      <div class="col-sm-12 col-md-7">
                      
                      <select name="fosa" class="form-control">
                      @foreach($banks as $b)
                      @if($b->id==$bank->id)
                        <option selected value="{{$b->id}}">{{$b->fosas_name}}</option>
                        @else
                        <option value="{{$b->id}}">{{$b->fosas_name}}</option>
                        @endif
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