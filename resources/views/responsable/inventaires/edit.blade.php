@extends('layouts.backend')
@section('title')

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
                                    <li class="breadcrumb-item"><a href="{{ route('responsable.inventaire.index') }}">{{ __('messages.inventaire') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.edit_blood') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                <a href="{{ route('responsable.inventaire.index') }}" class="btn btn-success">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('responsable.inventaire.update',$blood->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>{{ __('messages.serial_number') }}</label>
                                <input type="text" name="serial_number" value="{{$blood->serial_number}}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('messages.date_vie') }}</label>
                                    <input type="text" name="duree_vie" value="{{$blood->duree_vie}}"  class="form-control" required>
                                    
                                </div>

                                <div class="form-group">
                                    <label>{{ __('messages.blood_group') }}</label>
                                    <select name="blood_group_id" id="blood_group_id" class="form-control">
                                        @foreach ($groupe as $item)
                                    <option  value="{{$item->id}}">{{$item->name}}</option>  
                                    
                                        @endforeach    
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('messages.bank_name') }}</label>
                                    <select name="blood_bank_id" id="blood_bank_id" class="form-control">
                                            <option value="{{$banks->id}}">{{$banks ->fosas_name}}</option> 
                                     
                                     </select>  
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success">{{ __('messages.save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
