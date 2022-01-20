@extends('layouts.backend')
@section('content')
    <section class="section">
        <div class="row ">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Total {{ __('messages.entree') }}</h5>
                                    <h2 class="mb-3 font-18">{{$entree}}</h2>
                                        <p class="mb-0">
                                            <a href="#" class="btn btn-primary">{{ __('messages.view_stats') }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('backend/assets/img/banner/3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Total {{ __('messages.sortie') }}</h5>
                                    <h2 class="mb-3 font-18">{{$sortie}}</h2>
                                        <p class="mb-0">
                                            <a href="#" class="btn btn-primary">{{ __('messages.view_stats') }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('backend/assets/img/banner/3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Total {{ __('messages.reste') }}</h5>
                                    <h2 class="mb-3 font-18">{{$reste}}</h2>
                                        <p class="mb-0">
                                            <a href="#" class="btn btn-primary">{{ __('messages.view_stats') }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('backend/assets/img/banner/3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            @foreach ($bankgroup as $item)
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3>{{ __('messages.autrebanque') }}<h3>
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">{{$item->fosas_name }}</h5>
                                    <h2 class="mb-3 font-18">{{$all}}</h2>
                                        <p class="mb-0">
                                            <a href="#" class="btn btn-primary">{{ __('messages.view_stats') }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('backend/assets/img/banner/4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
{{--        
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">{{ __('messages.donor_motivated') }}</h5>
                                        <h2 class="mb-3 font-18">123</h2>
                                        <p class="mb-0">
                                            <a href="#" class="btn btn-primary">{{ __('messages.view_stats') }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('backend/assets/img/banner/4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card ">
                    <div class="card-header">
                        <h4>{{ __('messages.blood_pocket_diagram') }}</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary">{{ __('messages.view_all') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9">
                                <div id="chart1"></div>
                                <div class="row mb-0">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="list-inline text-center">
                                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                                                                    class="col-green"></i>
                                                <h5 class="m-b-0">{{$entree}}</h5>
                                                <p class="text-muted font-14 m-b-0">{{ __('messages.entry_weekly') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="list-inline text-center">
                                            <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                                                                                    class="col-orange"></i>
                                                <h5 class="m-b-0">{{$sortie}}</h5>
                                                <p class="text-muted font-14 m-b-0">{{ __('messages.sorties_weekly') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="list-inline text-center">
                                            <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                                                                                    class="col-orange"></i>
                                                <h5 class="m-b-0">{{$reste}}</h5>
                                                <p class="text-muted font-14 m-b-0">{{ __('messages.reste_weekly') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row mt-5">
                                    <div class="col-7 col-xl-7 mb-3">Total {{ __('messages.sortie') }}</div>
                                    <div class="col-5 col-xl-5 mb-3">
                                        <span class="text-big">{{$sortie}}</span>
                                        <sup class="col-green">+09%</sup>
                                    </div>
                                    <div class="col-7 col-xl-7 mb-3">Total {{ __('messages.entree') }}</div>
                                    <div class="col-5 col-xl-5 mb-3">
                                        <span class="text-big">{{$entree}}</span>
                                        <sup class="text-danger">-18%</sup>
                                    </div>
                                    <div class="col-7 col-xl-7 mb-3">Total {{ __('messages.entree') }}</div>
                                    <div class="col-5 col-xl-5 mb-3">
                                        <span class="text-big">{{$reste}}</span>
                                        <sup class="text-danger">-18%</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
