@extends('layouts.backend')
@section('content')
<section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Associations</h4>
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
                                    <th>Numero de l'association</th>
                                    <th>Nom de l'association</th>
                                    <th>Date de creation</th>
                                    <th>Nombre de membres</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach ($groupes as $groupe)
                                        
                                   
                                    <td>{{$groupe->id}}</td>
                                    <td>{{$groupe->name}} </td>
                                    <td>{{$groupe->create_at}} </td>
                                    <td>{{$user}}</td>
                                    <td><a href="{{url('/gestionnaire/detailAssociation/'.$groupe['id'])}}" class="btn btn-outline-primary">Detail</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection