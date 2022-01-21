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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.bloodpocket.index') }}">{{ __('messages.bloodbanks') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.add_bloodpocket') }}</li>
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
                                <a href="{{ route('admin.bloodpocket.index') }}" class="btn btn-primary">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.bloodpocket.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('messages.bloodbanks') }}</label>
                                    <select class="form-control select2" name="blood_bank_id" required>
                                        @foreach($bloodbanks as $bloodbank)
                                            <option value="{{ $bloodbank->id }}">{{ $bloodbank->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.serial_number') }}</label>
                                    <input type="text" name="serial_number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.blood_group') }}</label>
                                    <select name="blood_group" class="form-control select2" required>
                                        <option value="A">A</option>
                                        <option value="0">O</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" name="date_prelevement" id="date_prelevement" class="form-control datepicker" required>
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
