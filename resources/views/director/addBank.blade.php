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
                       
                      <input type="text" name="nameFS" class="form-control" required>
                      
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">District</label>
                          <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="district_id">
                              @foreach ($district as $d)
                             <option value="{{$d->id}}">{{$d->name}}</option>
                            
                             @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact</label>
                      <div class="col-sm-12 col-md-7">
                       
                      <input type="number" name="tel" class="form-control" required>
                      
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