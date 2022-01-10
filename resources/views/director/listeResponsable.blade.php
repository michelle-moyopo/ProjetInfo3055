@extends('layouts.backend')
@section('content')
<section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Assign Task Table</h4>
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
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center">
                                        <div class="custom-checkbox custom-checkbox-table custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                   class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($users as $user)
                            
                      
                                <tr>
                                  <td class="p-0 text-center">
                                    <div class="custom-checkbox custom-control">
                                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                        id="checkbox-1">
                                      <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                    </div>
                                  </td>
                                  <td>{{$user->name}}</td>
                                  <td class="align-middle">
                                    {{$user->email}}
                                  </td>
                                  <td>
                                    {{$user->telephone}}
                                  </td>
                                 
                                  <td>
                                    <div class="badge badge-success">attante</div>
                                  </td>
                                  <td>
                                  <a type="button" href="{{url('dashbord/'.$user->id)}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">details</a></td>
                                </tr>
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">profil du DCTS</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        @csrf
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">name:</label>
                          <input type="text" class="form-control" id="recipient-name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email:</label>
                            <input type="text" class="form-control" id="recipient-name" value="{{$user->email}}">
                          </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">role:</label>
                            <input type="text" class="form-control" id="recipient-name" value="{{$user->role}}">
                          </div>
                          <div class="form-group">
                              <label for="recipient-name" class="col-form-label">telephone:</label>
                              <input type="text" class="form-control" id="recipient-name" value="{{$user->telephone}}">
                            </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">validation</button>
                    </div>
                  </div>
        </div>
    </section>
@endsection