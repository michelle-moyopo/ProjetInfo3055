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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">{{ __('messages.dashboard') }}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.bloodbank.index') }}">{{ __('messages.bloodbanks') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.add_bloodbank') }}</li>
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
                                <a href="{{ route('admin.bloodbank.index') }}" class="btn btn-primary">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.bloodbank.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control select2" name="district" required>
                                            @foreach($district as $dist)
                                                <option value="{{ $dist->id }}">{{ $dist->name }} ({{ $dist->region->name }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <div class="form-group">
                                    <label>Responsable</label>
                                    <select class="form-control select2" name="user_id_responsable" required>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->role->name }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label>Gestionnaire</label>
                                        <select class="form-control select2" name="user_id_Gestionnaire" required>
                                            @foreach($usersgest as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->role->name }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <div class="form-group">
                                    <label>Nom De La Formation Sanitaire</label>
                                    <input type="text" name="fosa" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control">
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
