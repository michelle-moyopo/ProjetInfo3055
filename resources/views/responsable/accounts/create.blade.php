@extends('layouts.backend')
@section('title')

@endsection
@section('styles')
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
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
                                    <li class="breadcrumb-item"><a href="{{ route('responsable.account.index') }}">{{ __('messages.accounts') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.add_account') }}</li>
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
                                <a href="{{ route('responsable.account.index') }}" class="btn btn-success">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('responsable.account.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('messages.name') }}</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('messages.roles') }}</label>
                                    <select name="role_id" id="role_id" class="form-control">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required placeholder="Email address" />
                                </div>

                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="tel" name="telephone" id="telephone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.password') }}</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                {{--<div class="form-group">
                                    <label>{{ __('messages.profile_picture') }}</label>
                                    <input id="input-id" type="file" class="file" data-preview-file-type="text" name="photo">
                                </div>--}}
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
@section('scripts')
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/js/fileinput.min.js"></script>
    <script>
        $("#input-id").fileinput();
    </script>
@endsection
