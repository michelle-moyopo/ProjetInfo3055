@extends('layouts.backend')
@section('content')
<section class="section">
        
     
      

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Details sur les poches du groupe sanguin</h4>
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
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Numero de poche</th>
                                    <th>Date d'entree</th>
                                    <th>Date de peremption</th>
                                    <th>groupe sanguin</th>
                                 </tr>
                                </thead>
                                <tbody>
                                <tr>
                                 @foreach ($pockets as $pocket)
                                  <td>{{$pocket->serail_number}}</td>
                                    <td>{{$pocket->date_prelevement}} </td>
                                    <td>{{$pocket->date_peremption}}</td>
                                    <td>{{$pocket->blood_group}}</td>
                                   
                                    @endforeach
                                </tr>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection