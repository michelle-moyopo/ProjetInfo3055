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
                                    <li class="breadcrumb-item"><a href="{{ route('responsable.association.index') }}">{{ __('messages.associations') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.add_association') }}</li>
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
                                <a href="{{ route('responsable.association.index') }}" class="btn btn-success">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('responsable.association.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('messages.name') }}</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('messages.description') }}</label>
                                    <textarea name="description" class="form-control" id="description" cols="1"
                                              rows="2"
                                              class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" name="date" id="date_prelevement" class="form-control datepicker" required>
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
