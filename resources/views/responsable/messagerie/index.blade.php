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
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('messages.messagerie') }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card">
                <div class="card-header">
                        <h4>{{ __('messages.messagerie') }}</h4>
                        <div class="float-right">
                             </div>
                    </div>
            <div class="boxs mail_listing">
              <div class="inbox-center table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">
                        <label class="form-check-label">
                          <input type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </th>
                      <th colspan="3">
                        <div class="inbox-header">
                          <div class="mail-option">
                            <div class="email-btn-group m-l-15">
                              <a href="#" class="col-dark-gray waves-effect m-r-20" title="back"
                                data-toggle="tooltip">
                                <i class="material-icons">keyboard_return</i>
                              </a>
                              <a href="#" class="col-dark-gray waves-effect m-r-20" title="Archive"
                                data-toggle="tooltip">
                                <i class="material-icons">archive</i>
                              </a>
                              <div class="p-r-20">|</div>
                              <a href="#" class="col-dark-gray waves-effect m-r-20" title="Error"
                                data-toggle="tooltip">
                                <i class="material-icons">error</i>
                              </a>
                              <a href="#" class="col-dark-gray waves-effect m-r-20" title="Delete"
                                data-toggle="tooltip">
                                <i class="material-icons">delete</i>
                              </a>
                              <a href="#" class="col-dark-gray waves-effect m-r-20" title="Folders"
                                data-toggle="tooltip">
                                <i class="material-icons">folder</i>
                              </a>
                              <a href="#" class="col-dark-gray waves-effect m-r-20" title="Tag"
                                data-toggle="tooltip">
                                <i class="material-icons">local_offer</i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </th>
                      <th class="hidden-xs" colspan="2">
                        <div class="pull-right">
                          <div class="email-btn-group m-l-15">
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="previous"
                              data-toggle="tooltip">
                              <i class="material-icons">navigate_before</i>
                            </a>
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="next"
                              data-toggle="tooltip">
                              <i class="material-icons">navigate_next</i>
                            </a>
                          </div>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($sos as $item)
                    @foreach ($users as $user)
                        @if ($item->user_id== $user->id)
                        <tr class="unread">
                            <td class="tbl-checkbox" >
                              <label class="form-check-label">
                                <input type="checkbox">
                                <span class="form-check-sign"></span>
                              </label>
                            </td>
                            <td class="hidden-xs">
                              <i class="material-icons"></i>
                            </td>
                            <td class="hidden-xs">{{$user->name}}</td>
                            <td class="max-texts">
                              <a href="{{ route('responsable.messagerie.create') }}">
                                <span class="badge badge-primary">{{$item->type}}</span>
                              @if ($item->type =='DEMANDE')
                              Je souhaiterais avoir du sang dans votre banque de sang
                              @else
                              Je souhaiterais faire un don de sang dans votre banque de sang
                              @endif
                               </a>
                            </td>
                            <td class="hidden-xs">
                              <i class="material-icons">{{$item->blood_group}}</i>
                            </td>
                            <td class="text-right"> <a href="{{ route('responsable.messagerie.show',$item['id'])}}" class="btn btn-success">{{ __('messages.response') }}</a>
                            </td>
                          </tr>  
                        @endif
                    @endforeach
                      
                  @endforeach
                    
                    <tr class="unread">
                        <td class="tbl-checkbox">
                          <label class="form-check-label">
                            <input type="checkbox">
                            <span class="form-check-sign"></span>
                          </label>
                        </td>
                        <td class="hidden-xs">
                          <i class="material-icons">star_border</i>
                        </td>
                        <td class="hidden-xs">Nelson Lane</td>
                        <td class="max-texts">
                          <a href="">
                            <span class="badge badge-primary">Work</span>
                            Lorem ipsum perspiciatis unde omnis iste natus</a>
                        </td>
                        <td class="hidden-xs">
                          <i class="material-icons">attach_file</i>
                        </td>
                        <td class="text-right"> 12:30 PM </td>
                      </tr>
                   
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-sm-7 ">
                  <p class="p-15">Showing 1 - 15 of 200</p>
                </div>
              </div>
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

@endsection
