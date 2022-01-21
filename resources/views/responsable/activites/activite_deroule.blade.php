@extends('layouts.backend')
@section('title')
    {{ __('messages.activite_deroule') }}
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
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.activite_deroule') }}</li>
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
                            <h4>{{ __('messages.activite_deroule') }}</h4>
                            {{--<div class="float-right">
                                <a href="{{ route('responsable.activite.create') }}" class="btn btn-primary">{{ __('messages.add') }}</a>
                            </div>--}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>

                                        <th>{{ __('messages.associations') }}</th>
                                        <th>{{ __('messages.description') }}</th>
                                        <th>{{ __('messages.activity_name') }}</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Association 1</td>
                                        <td>Description</td>
                                        <td>Nom activite</td>
                                        <td>Type 1</td>
                                        <td>2021-01-12</td>
                                        <td>
                                            <a href="#" class="btn btn-info">
                                                <i data-feather="edit-2"></i>
                                            </a>
                                        </td>
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
