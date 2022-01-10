@extends('layouts.social')
@section('title')
{{ trans('messages.message') }}
@endsection
@section('content')
<div class="col-lg-6">
        <div class="central-meta">
            <div class="">
                <h5 class="f-title"><i class="ti-lock"></i>Nouvelle Association</h5>

            <form method="POST" action="{{ route('user.association.store') }}">
                    @csrf
                <div class="form-group">
                    <label>{{ __('messages.bloodbanks') }}</label>
                    <div class="form-group">
                            <label>{{ __('messages.name') }}</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                </div>
                <div class="form-group">
                    <label>{{ __('messages.description') }}</label>
                    <textarea type="text" name="description" class="form-control border-5" required></textarea>
                </div>
                <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden class="form-control" required>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success">{{ __('messages.save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div><!-- centerl meta -->
@endsection
