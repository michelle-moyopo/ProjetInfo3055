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
                                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard.index') }}">{{ __('messages.dashboard') }}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('user.donation.index') }}">{{ __('messages.user_user') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.make_donation') }}</li>
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
                                <a href="{{ route('user.donation.index') }}" class="btn btn-primary">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.donation.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('messages.bloodbanks') }}</label>
                                    <select class="form-control select2" name="blood_banks_id" required>
                                        @foreach($banks as $bank)
                                            <option value="{{ $bank->id }}">{{ $bank->name }} ({{$bank->address}})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" hidden>
                                    <input type="text" name="type" value="ALERTE" class="form-control" required>
                                    <input type="text" name="user_id" value="{{Auth::user()->id}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.groupe_sanguin') }}</label>
                                    <select class="form-control select2" name="blood_group" required>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.address') }}</label>
                                    <input type="text" name="address" class="form-control" required>
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
