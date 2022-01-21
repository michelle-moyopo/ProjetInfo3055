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
                              <th>Description</th>
                              <th>Status</th>
                              <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($groupes as $groupe)
                            <tr>
                             <td>{{$groupe->name}}</td>
                                  <td class="align-middle">
                                      {{$groupe->description}}
                                  </td>
                                  <td>
                                    <div class="badge badge-success">attante</div>
                                  </td>
                                  <td>
                                  <a type="button" href="" class="btn btn-primary" >details</a></td>
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