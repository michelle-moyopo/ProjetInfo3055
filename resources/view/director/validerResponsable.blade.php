@extends('layouts.backend')
@section('content')
<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Export Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                             
                              <th> Name</th>
                              <th>Email</th>
                              <th>phone</th>
                              <th>Status</th>
                              <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                            
                      
                                <tr>
                                  
    
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
                                  <a type="button" href="{{url('dashboard/detaileResponsable/director/'.$user['id'])}}" class="btn btn-primary" >details</a></td>
                                </tr>
                                @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </section>
   
         
    
@endsection