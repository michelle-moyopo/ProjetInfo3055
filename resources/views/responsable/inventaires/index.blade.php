@extends('layouts.backend')
@section('title')
    {{ __('messages.inventaires') }}
@endsection
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('responsable.dashboard.index') }}">{{ __('messages.dashboard') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.inventaires') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('messages.inventaires') }}</h4>
                            <div class="float-right">
                                <a href="{{ route('responsable.inventaire.create') }}" class="btn btn-success">{{ __('messages.add') }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>

                                        <th>{{ __('messages.blood_group') }}</th>
                                        <th>{{ __('messages.serial_number') }}</th>
                                        <th>{{ __('messages.date_vie') }}</th>
                                        <th>{{ __('messages.status') }}</th>
                                        <th>{{ __('messages.action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($banks as $bank)
                                            @foreach ($groupe as $item)
                                                
                                          @if($bank->blood_group_id == $item->id)
                                    <tr>
                                      
                                            
                                       
                                        <td><a href="">{{$item->name}}</a></td>
                                        <td>{{$bank->serial_number}}</td>
                                        <td>{{$bank->duree_vie}}
                                        <td>
                                            <span class="badge badge-success">{{ __('messages.valid') }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('responsable.inventaire.edit', $bank->id)}}" class="btn btn-info">
                                                <i data-feather="edit-2"></i>
                                            </a>

                                            <a class="btn btn-outline-danger" href="{{ route('responsable.inventaire.destroy', $bank->id) }}" onclick="event.preventDefault();
                                            document.getElementById('delete-form').submit();" title=" {{ __('messages.delete') }}">
                                           <i class="fas fa-trash-alt"></i>
                                       </a>
                                       {{-- <form id="delete-form" action="{{ route('responsable.inventaire.destroy', $bank->id) }}" method="POST" class="d-none">
                                           @csrf
                                           @method('DELETE')
                                       </form> --}}
                                       {{-- <a href="{{ route('responsable.inventaire.destroy', $bank->id) }}" class="btn btn-info">
                                        <i data-feather="edit-2"></i> --}}
                                    </a>
                                        </td>
                                     
                                    </tr>@endif @endforeach   @endforeach
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
