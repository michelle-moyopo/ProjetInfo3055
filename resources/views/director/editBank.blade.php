@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Editer la banque de sang</h4>
                  </div>
                  <form method="post" action="{{ route('directeur.BloodBank.update', $b->id) }}">
                     @csrf
        {{csrf_field()}}
        @method('PUT')
                
                    
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Formation sanitaire</label>
                      <div class="col-sm-12 col-md-7">
                       
                      <input type="text" name="nameFS" value="{{$b->fosas_name}}" class="form-control" required>
                      
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">District</label>
                          <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="district_id">
                              @foreach ($districts as $d)
                              @if($d->id==$district->id)
                             <option selected value="{{$d->id}}">{{$d->name}}</option>
                            @else
                            <option  value="{{$d->id}}">{{$d->name}}</option>
                            @endif
                             @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact</label>
                      <div class="col-sm-12 col-md-7">
                       
                      <input type="number" value="{{$b->contact}}" name="tel" class="form-control" required>
                      
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