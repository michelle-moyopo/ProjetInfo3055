@extends('layouts.backend')
@section('content')
<section class="section">
        
                   

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
              
                <div class="card">
                  <div class="card-header">
                    <h4>Inventaire territoire nationale</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                       
                                <thead>
                                <tr>
                                    <th>Region</th>
                                    <th>Nombre de banques de sang</th>
                                     <th>Nombre de poches de sang</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                <tr>
                                    <td>Centre</td>
                                    <td>56</td>
                                     <td>6450</td>
                                
                                    <td><a href=""  class="btn btn-sm btn-success">Details</a></td>
                                </tr>
                               
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