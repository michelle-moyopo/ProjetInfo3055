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
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                        <h4>categories</h4>
                        <div class="float-right">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">{{ __('messages.add') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-2">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Categories</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cat as $bloodpocket)
                                    <tr>
                                        <td>{{ $bloodpocket->faq->types }}</td>
                                        <td>{{ $bloodpocket->cathegories }}</td>
                                        <td>{{ $bloodpocket->created_at }}</td>
                                        <td>
                                            <a class="btn btn-outline-primary" href="{{ route('admin.categories.edit', $bloodpocket->id) }}" >
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a class="btn btn-outline-danger" href="" onclick="event.preventDefault();
                                                 document.getElementById('delete-form').submit();" title=" {{ __('messages.delete') }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <form id="delete-form" action="{{ route('admin.categories.destroy', $bloodpocket->id) }}" method="POST" class="d-none">
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
