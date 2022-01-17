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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.faquestion.index') }}">FAQ Reponse</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ajouter Une Question Reponse</li>
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
                                <a href="{{ route('admin.faquestion.index') }}" class="btn btn-primary">{{ __('messages.back') }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.faquestion.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Cathegories FAQ</label>
                                    <select class="form-control select2" name="categories" required>
                                        @foreach($cat as $bloodbank)
                                            <option value="{{ $bloodbank->id }}">{{ $bloodbank->cathegories }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Questions</label>
                                    <input type="text" name="question" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <input type="text" name="answer"  class="form-control" required>
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
