@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Editer la banque de sang</h4>
                  </div>
                  <form method="get" action="{{ route('directeur.BloodBank.update', $b->id) }}">
                     @csrf
        {{csrf_field()}}
        @method('UPDATE')
                
                    
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Formation sanitaire</label>
                      <div class="col-sm-12 col-md-7">
                       
                      <select name="fosa" class="form-control">
                      @foreach($fosas as $f)
                      @if($f->id==$fosa->id)
                        <option selected value= "{{$f->id}}">{{$f->name}}</option>
                        @else
                        <option value= "{{$f->id}}">{{$f->name}}</option>
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