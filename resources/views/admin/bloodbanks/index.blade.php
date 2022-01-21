@extends('layouts.backend')
@section('title')
    {{ __('messages.bloodbanks') }}
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
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.bloodbanks') }}</li>
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
                            <h4>{{ __('messages.bloodbanks') }}</h4>
                            <div class="float-right">
                                <a href="{{ route('admin.bloodbank.create') }}" class="btn btn-primary">{{ __('messages.add') }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        {{--<th class="text-center pt-3">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                       class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>--}}
                                        <th>{{ __('messages.users') }}</th>
                                        <th>{{ __('messages.bank_address') }}</th>
                                        <th>{{ __('messages.bank_name') }}</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bloodbanks as $bloodbank)
                                        <tr>
                                            {{--<td class="text-center pt-2">
                                                <div class="custom-checkbox custom-control">
                                                    <input name="{{ $user->id }}" type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                           id="checkbox-{{ $user->id }}">
                                                    <label for="checkbox-{{ $user->id }}" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>--}}
                                            <td>{{ $bloodbank->user->name }}</td>
                                            <td>{{ $bloodbank->address }}</td>
                                            <td>{{ $bloodbank->name }}</td>

                                            <td>
                                                @if($bloodbank->enabled == 1)
                                                    <div class="badge badge-success badge-shadow">{{ __('messages.enabled') }}</div>
                                                @else
                                                    <div class="badge badge-danger badge-shadow">{{ __('messages.disabled') }}</div>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-primary" href="{{ route('admin.bloodbank.edit', $bloodbank->id) }}" title="{{ $bloodbank->enabled == 0 ?  __('messages.activate') :  __('messages.deactivate') }}">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                                <a class="btn btn-outline-danger" href="" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" title=" {{ __('messages.delete') }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form id="delete-form" action="{{ route('admin.bloodbank.destroy', $bloodbank->id) }}" method="POST" class="d-none">
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
