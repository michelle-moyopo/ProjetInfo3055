@extends('layouts.backend')
@section('content') <div class="row">
             
              <div class="col-12">
                  <form method="POST" action="/gestionnaire/addPocheSang">
                    @csrf
                    
                <div class="card">
                  <div class="card-header">
                    <h4> Nouveau don</h4>
                  </div>
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">numero d'identification</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="serail_number">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">groupe sanguin</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="blood_group">
                          <option>O+</option>
                          <option>O-</option>
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>AB+</option>
                          <option>AB-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">groupe sanguin</label>
                          <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="blood_bank_id">
                              @foreach ($banks as $bank)
                             <option value="{{$bank->id}}">{{$bank->name}}</option>
                            
                             @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date de prelevement</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="date" class="form-control" name="date_prelevement">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date de peremption</label>
                          <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" name="date_peremption">
                          </div>
                        </div>
                    
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="reset">Ánnuler</button>
                        <button class="btn btn-primary" type="submit">Demander</button>
                      </div>
                    </div>
                  </div>
                </div>
                  </form>
              </div>
            </div>
@endsection