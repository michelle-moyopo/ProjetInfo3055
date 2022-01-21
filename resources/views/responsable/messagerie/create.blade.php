@extends('layouts.backend')
{{-- @section('title')

@endsection --}}
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
                                                <li class="breadcrumb-item"><a href="{{ route('responsable.messagerie.index') }}">{{ __('messages.messagerie') }}</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.add_mail') }}</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                            <div class="card-header">
                                <h4>
                                    <a href="{{ route('responsable.messagerie.index') }}" class="btn btn-success">{{ __('messages.back') }}</a>
                                </h4>
                            </div>
                <div class="card">
                   <div class="boxs mail_listing">
                    <div class="row">
                      <div class="col-lg-12">
                        <form class="composeForm" method="POST" action="{{ route('responsable.messagerie.store') }}">
                            @csrf
                            <input type="hidden"  name="id" class="form-control" value="{{$sos->id}}" >
                           
                          <div class="form-group">
                            <div class="form-line">
                            <input type="text" id="email_address" name="email" class="form-control" value="{{$user->email}}" placeholder="A">
                            </div>
                          </div>
                          <div class="form-group">
                            <select name="blood_bank" id="blood_group_id" class="form-control">
                                @foreach ($bank as $item)
                            <option  value="{{$item->fosas_name}}">{{$item->fosas_name}}</option>  
                            
                                @endforeach    
                                </select>
                        </div>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" id="subject" name="subject" class="form-control" placeholder="object">
                            </div>
                          </div>
                          {{-- <textarea id="ckeditor">
                            	</textarea>
                          <div class="compose-editor m-t-20">
                            <div id="summernote"></div>
                            <input type="file" class="default" multiple>
                          </div> --}}
                        
                      </div>
                      <div class="col-lg-12">
                        <div class="m-l-25 m-b-20">
                          <button type="submit"  class="btn btn-info btn-border-radius waves-effect">Envoyer</button>
                          {{-- <button type="button" class="btn btn-danger btn-border-radius waves-effect">Annuler</button> --}}
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </section>
    <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
