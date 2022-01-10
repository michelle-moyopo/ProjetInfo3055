@extends('layouts.backend')
@section('title')
    {{ __('messages.user_user') }}
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
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.user_user') }}</li>
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
                            <h4>{{ __('messages.user_user') }}</h4>
                            <div class="float-right">
                                <a href="{{ route('user.donation.create') }}" class="btn btn-primary">{{ __('messages.make_donation') }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        <th>{{ __('messages.bloodbanks') }}</th>
                                        <th>{{__('messages.ask_date')}}</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dons as $don)
                                        <tr>
                                            <td>{{$don->bloodbank->name}}</td>
                                            <td>{{$don->created_at}}</td>
                                            <td>
                                                @if($don->enabled == 1)
                                                    <div class="badge badge-success badge-shadow">{{ __('messages.approuved') }}</div>
                                                @elseif($don->enabled == 2)
                                                    <div class="badge badge-danger badge-shadow">{{ __('messages.cancel') }}</div>
                                                @elseif($don->enabled == 0)
                                                    <div class="badge badge-outline badge-shadow">{{ __('messages.pending') }}</div>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-primary" href="#" >
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a class="btn btn-outline-danger" href="" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" title=" {{ __('messages.delete') }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form id="delete-form" action="#" method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
