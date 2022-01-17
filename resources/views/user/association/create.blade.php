@extends('layouts.social')
@section('title')

@endsection
@section('content')
<div class="col-lg-6">
        <div class="central-meta">
            <div class="">
                <h5 class="f-title"><i class="ti-lock"></i>Nouvelle Association</h5>

            <form method="POST" action="{{ route('user.association.store') }}">
                    @csrf
                <div>
                    <label>Creer une association</label>
                    <div>
                            <label>{{ __('messages.name') }}</label>
                            <input type="text" placeholder="nom" name="nom" class="form-control" required>
                            {{-- <textarea type="text" placeholder="nom" name="nom" required></textarea> --}}
                        </div>
                </div>
                <div>
                    <label>{{ __('messages.description') }}</label>
                    <textarea type="text" name="description" class="form-control border-10" required></textarea>
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
