<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    {!! SEOMeta::generate() !!}
    <title> @yield('title') |  </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{asset('backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset('backend/assets/bundles/izitoast/css/iziToast.min.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ ASSET('backend/assets/bundles/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{asset('bundles/codemirror/lib/codemirror.css') }}">
  <link rel="stylesheet" href="{{asset('bundles/codemirror/theme/duotone-dark.css') }}">
  <link rel="stylesheet" href="{{asset('bundles/jquery-selectric/selectric.css') }}">
  
    <link rel="stylesheet" href="{{ asset('toastr.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('backend/assets/img/favicon.ico') }}" />
    @yield('styles')
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a></li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle">
                    <a href="#" data-toggle="dropdown"
                       class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                        <span class="badge headerBadge1">
                6 </span> </a>
                    {{-- <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                        <div class="dropdown-header">
                            Messages
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-message">
                            <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li> --}}
                <li class="dropdown dropdown-list-toggle">
                    <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
                        <i data-feather="bell" class="bell"></i>
                    </a>
                    {{-- <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                        <div class="dropdown-header">
                            Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                                        class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                                        class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div> --}}
                </li>
                <li class="dropdown">
                    <a href="/" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ asset('backend/assets/img/user.png') }}" class="user-img-radious-style">
                        <span class="d-sm-none d-lg-inline-block"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>
                        <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
                        </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                            Activities
                        </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                            Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();"> <i class="fas fa-sign-out-alt"></i>
                            {{ __('messages.logout') }}
                        </a>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="/"> <img alt="image" src="{{ asset('img/logo.png') }}" class="header-logo" /> <span
                            class="logo-name"></span>
                    </a>
                </div>
                @if(Auth::user()->role_id == 1)
                <ul class="sidebar-menu">
                        <li class="menu-header">{{ __('messages.main') }}</li>
                        <li class="dropdown {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __('messages.dashboard') }}</span></a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li class="menu-header">{{ __('messages.users') }}</li>
                        <li class="dropdown {{ Request::is('admin/user') ? 'active' : '' }}">
                            <a href="{{ route('admin.user.index') }}" class="nav-link"><i data-feather="users"></i><span>{{ __('messages.users') }}</span></a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li class="menu-header">{{ __('messages.bloodbanks') }}</li>
                        <li class="dropdown {{ Request::is('admin/bloodbank') ? 'active' : '' }}">
                            <a href="{{ route('admin.bloodbank.index') }}" class="nav-link">
                                <i data-feather="server"></i><span>{{ __('messages.bloodbanks') }}</span></a>
                        </li>
                        <li class="dropdown {{ Request::is('admin/bloodpocket') ? 'active' : '' }}">
                            <a href="{{ route('admin.bloodpocket.index') }}" class="nav-link">
                                <i data-feather="server"></i><span>{{ __('messages.bloodpockets') }}</span></a>
                        </li>
                        <li class="dropdown {{ Request::is('admin/bloodbankmanager') ? 'active' : '' }}">
                            <a href="{{ route('admin.bloodbankmanager.index') }}" class="nav-link">
                                <i data-feather="server"></i><span>{{ __('messages.bloodbankmanager') }}</span></a>
                        </li>
                        <li class="dropdown {{ Request::is('admin/groupe') ? 'active' : '' }}">
                            <a href="{{ route('admin.groupe.index') }}" class="nav-link">
                                <i data-feather="server"></i><span>{{ __('messages.groupes') }}</span></a>
                        </li>
                        <li class="dropdown {{ Request::is('admin/bloodbankaffiliation') ? 'active' : '' }}">
                            <a href="{{ route('admin.bloodbankaffiliation.index') }}" class="nav-link">
                                <i data-feather="server"></i><span>{{ __('messages.bloodbankaffiliations') }}</span></a>
                        </li>
                        <li class="dropdown {{ Request::is('admin/slider') ? 'active' : '' }}">
                            <a href="{{ route('admin.slider.index') }}" class="nav-link">
                                <i data-feather="server"></i><span>{{ __('messages.slider') }}</span></a>
                        </li>
                    </ul>
                @elseif(Auth::user()->role_id == 2 || session()->get('role')=="DirGes")
                <ul class="sidebar-menu">
                    <li class="menu-header">{{ __('messages.main') }}</li>
                    <li class="dropdown {{ Request::is('directeur/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('directeur.dashboard.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __('messages.dashboard') }}</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="briefcase"></i><span>Banque de sang</span></a>
                        <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('directeur.BloodBank.index') }}">Voir les banques de sang</a></li>
                          <li><a class="nav-link" href="{{ route('directeur.Inventaire.index') }}">Inventaires</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Comptes</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('directeur.Responsable.index') }}">Comptes responsable</a></li>
                            <li><a class="nav-link" href="{{ route('directeur.Notification.index') }}">Notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Reponses Communautaire</span></a>
                        <ul class="dropdown-menu">
                          <li><a class="nav-link" href="">Certifier Une Association</a></li>
                          <li><a class="nav-link" href="#">Associations Certifie</a></li>
                          <li><a class="nav-link" href="#">Associations Non Certifie</a></li>
                          <li><a class="nav-link" href="#">Annonce Collective</a></li>
                          <li><a class="nav-link" href="#">Publication Generale</a></li>
                        </ul>
                    </li>
                </ul>
                @elseif(Auth::user()->role_id == 3)
                    <ul class="sidebar-menu">
                        <li class="menu-header">{{ __('messages.main') }}</li>
                        <li class="dropdown {{ Request::is('responsable/dashboard') ? 'active' : '' }}">
                            <a href="{{ route('responsable.dashboard.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __('messages.dashboard') }}</span></a>
                        </li>
                    </ul>
                @elseif(Auth::user()->role_id == 4)
                    <ul class="sidebar-menu">
                        <li class="menu-header">{{ __('messages.main') }}</li>
                            <a href="{{ route('gestionnaire') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __('messages.dashboard') }}</span></a>
                            <li class="dropdown {{ Request::is('gestionnaire') ? 'active' : '' }}">
                            <a href="{{ route('gestionnaire') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __('messages.dashboard') }}</span></a>
                        </li>
                        {{--  <li class="dropdown active">
                            <a href="{{route('gestionnaire')}}" class="nav-link"><i data-feather="monitor"></i><span> Banque de sang</span></a>
                        </li>  --}}
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>Gestion des associations</span></a>
                            <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('listeAssoiationAffi')}}">Voir les associations affiliees</a></li>
                                <li><a class="nav-link" href="{{route('validerAssoiationAffi')}}">Valider une association</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Lancer une campagne</span></a>

                        </li>
                    </ul>
                @elseif(Auth::user()->role_id == 5)
                    <ul class="sidebar-menu">
                        <li class="menu-header">{{ __('messages.main') }}</li>
                        <li class="dropdown {{ Request::is('user/dashboard') ? 'active' : '' }}">
                            <a href="{{ route('user.dashboard.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __('messages.dashboard') }}</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                data-feather="briefcase"></i><span>Don</span></a>
                            <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('user.donation.index') }}">Liste De Don</a></li>
                              <li><a class="nav-link" href="{{ route('user.donation.create') }}">Faire un Don</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Demande</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('user.demander.index') }}">Liste Des Demandes</a></li>
                                <li><a class="nav-link" href="{{ route('user.demander.create') }}">Faire une Demande</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Associations</span></a>
                            <ul class="dropdown-menu">
                              <li><a class="nav-link" href="{{ route('user.association.index') }}">Aller aux Publications</a></li>
                              <li><a class="nav-link" href="#">Faire une Publication</a></li>
                              <li><a class="nav-link" href="{{ route('user.association.create') }}">Creer une Association</a></li>
                            </ul>
                        </li>
                    </ul>

                @endif
            </aside>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>

        <footer class="main-footer">
            <div class="footer-left">
                <a href="/"></a></a>
            </div>
            <div class="footer-right">
                Centre de Transfusion Sanguine
            </div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('backend/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('backend/assets/js/page/index.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<script src="{{ asset('backend/assets/js/page/toastr.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
<!-- datatable-->
<script src="{{ asset('backend/assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/datatables/export-tables/jszip.min.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
<script src="{{ asset('toastr.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('bundles/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('bundles/codemirror/lib/codemirror.js') }}"></script>
  <script src="{{ asset('bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('bundles/ckeditor/ckeditor.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('js/page/ckeditor.js') }}"></script>
  
<!-- Template JS File -->
{!! Toastr::message() !!}
<script>
    $('table').dataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButtor: true,
        progressBar: true
    });
    @endforeach
    @endif
</script>
@yield('scripts')
</body>
</html>
