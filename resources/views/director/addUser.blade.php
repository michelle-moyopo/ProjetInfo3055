@extends('layouts.backend')
@section('content') <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Nouvelle banque de sang</h4>
                  </div>
                  <form method="post" action="/addUser">
                     @csrf
        {{csrf_field()}}
                  <div class="card-body">
                 
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nom</label>
                      <div class="col-sm-12 col-md-7">
                      <input name="name" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                      <input name="email" type="email" class="form-control">
                      </div>
                    </div>
                  
                    
                    
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                      <div class="col-sm-12 col-md-7">
                      <input name="address" type="text" class="form-control">
                      </div>
                    </div>
                     
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telephone</label>
                      <div class="col-sm-12 col-md-7">
                      <input name="telephone" type="telephone" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary">Lancer</button>
                        <button class="btn btn-primary">Reinitialiser</button>
                      </div>
                    </div>
                  </div>
                </div>
             </form> 
@endsection