<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Reponse Communautaire</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('social/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('social/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('social/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('social/css/responsive.css')}}">

    <link rel="stylesheet" href="{{ asset('toastr.css') }}">
</head>
<body>
<div class="se-pre-con"></div>

	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="/" title=""><img src="#" style="width:5%,heigth:5%" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
			<ul>
				<li><a href="/"><span>Acceuil</span></a>
				</li>
				<li><span>Association </span>
					<ul>
                        <li><a href="#" title="">Creer une Association</a></li>
                        <li><a href="#" title="">joindre</a></li>
                        <li><a href="#" title="">mes associations</a></li>
					</ul>
				</li>
				<li><span>Parametre du compte</span>
					<ul>
                        <li><a href="#" title="">Modifier le mot de passe</a></li>
                        <li><a href="#" title="">modifier le profile</a></li>
                        <li><a href="#" title="">message box</a></li>
                        <li><a href="#" title="">Inbox</a></li>
                        <li><a href="#" title="">page de notification</a></li>
					</ul>
				</li>
			</ul>
		</nav>

	</div><!-- responsive header -->

	<div class="topbar stick">
		<div class="logo">
			<a title="" href="/"><img src="#" style="width:5%,heigth:5%" alt=""></a>
		</div>

		<div class="top-area">
			<ul class="main-menu">
				<li>
					<a href="/" title="">Allez au CENTRE</a>
                </li>
                <li>
                <a href="{{route('user.association.index')}}" title="">Discutions</a>
                </li>
				<li>
					<a href="#" title="">Associations</a>
					<ul>
                        <li><a href="{{ route('user.association.create') }}" title="">Creer une Association</a></li>
                    <li><a href="{{ route('user.unjoind.index') }}" title="">joindre</a></li>
						<li><a href="#" title="">mes associations</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">Configuration du compte</a>
					<ul>
						<li><a href="#" title="">Modifier le mot de passe</a></li>
						<li><a href="#" title="">modifier le profile</a></li>
						<li><a href="#" title="">message box</a></li>
						<li><a href="#" title="">Inbox</a></li>
						<li><a href="#" title="">page de notification</a></li>
					</ul>
				</li>
			</ul>
			<ul class="setting-area">
				<li>
					<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
					<div class="searched">
						<form method="post" class="form-search">
							<input type="text" placeholder="Search Friend">
							<button data-ripple><i class="ti-search"></i></button>
						</form>
					</div>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
					<div class="dropdowns">
						<span>5 New Messages</span>
						<ul class="drops-menu">
							<li>
								<a href="notifications.html" title="">
									<img src="{{asset('social/images/resources/thumb-1.jpg')}}" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
						</ul>
						<a href="messages.html" title="" class="more-mesg">view more</a>
					</div>
				</li>
				<li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
					<div class="dropdowns languages">
						<a href="#" title=""><i class="ti-check"></i>English</a>
						<a href="#" title="">Arabic</a>
						<a href="#" title="">Dutch</a>
						<a href="#" title="">French</a>
					</div>
                </li>
                <li><a href="#" title="" data-ripple="">Hello {{ Auth::user()->name }}</a>
                </li>

			</ul>
			<div class="user-img">
				<img src="{{asset('social/images/resources/admin.jpg')}}" alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					<a href="#" title=""><i class="ti-user"></i> view profile</a>
					<a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
					<a href="#" title=""><i class="ti-target"></i>activity log</a>
					<a href="#" title=""><i class="ti-settings"></i>account setting</a>
					<a href="#" title=""><i class="ti-power-off"></i>log out</a>
				</div>
			</div>
		</div>
    </div><!-- topbar -->
    <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">Shortcuts</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                <a href="{{route('user.demander.create')}}" title="">Faire une Demande</a>
                                                </li>
                                                <li>
                                                    <i class="ti-mouse-alt"></i>
                                                <a href="{{route('user.donation.create')}}" title="">Faire un Don</a>
                                                </li>
                                                <li>
                                                    <i class="ti-files"></i>
                                                    <a href="#" title="">Creer Une Association</a>
                                                </li>
                                                <li>
                                                    <i class="ti-user"></i>
                                                    <a href="#" title="">Mes Association</a>
                                                </li>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                    <a href="{{route('logout')}}" title="" onclick="event.preventDefault();this.closest('form').submit();"><i class="ti-power-off"></i>
                                                        {{ __('messages.logout') }}
                                                    </a>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div><!-- Shortcuts -->
                                        <div class="widget">
                                            <h4 class="widget-title">Recent Activity</h4>
                                            <ul class="activitiez">
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>10 hours Ago</i>
                                                        <span><a href="#" title="">Commented on Video posted </a></span>
                                                        <h6>by <a href="time-line.html">black demon.</a></h6>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>30 Days Ago</i>
                                                        <span><a href="#" title="">Posted your status. “Hello guys, how are you?”</a></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>2 Years Ago</i>
                                                        <span><a href="#" title="">Share a video on her timeline.</a></span>
                                                        <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- recent activites -->
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Who's follownig</h4>
                                            <ul class="followers">
                                                <li>
                                                    <figure><img src="{{asset('social/images/resources/friend-avatar2.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('social/images/resources/friend-avatar4.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('social/images/resources/friend-avatar6.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('social/images/resources/friend-avatar8.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('social/images/resources/friend-avatar3.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Allen</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- who's following -->
                                    </aside>
                                </div><!-- sidebar -->
    @yield('content')

    <div class="col-lg-3">
            <aside class="sidebar static">
                <div class="widget">
                    <h4 class="widget-title">Your page</h4>
                    <div class="your-page">
                        <figure>
                            <a href="#" title=""><img src="{{asset('social/images/resources/friend-avatar9.jpg')}}" alt=""></a>
                        </figure>
                        <div class="page-meta">
                            <a href="#" title="" class="underline">My page</a>
                            <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
                            <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
                        </div>
                        <div class="page-likes">
                            <ul class="nav nav-tabs likes-btn">
                                <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
                                 <li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div class="tab-pane active fade show " id="link1" >
                                <span><i class="ti-heart"></i>884</span>
                                  <a href="#" title="weekly-likes">35 new likes this week</a>
                                  <div class="users-thumb-list">
                                    <a href="#" title="Anderw" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-1.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="frank" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-2.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Sara" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-3.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Amy" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-4.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Ema" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-5.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Sophie" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-6.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Maria" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-7.jpg')}}" alt="">
                                    </a>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="link2" >
                                  <span><i class="ti-eye"></i>440</span>
                                  <a href="#" title="weekly-likes">440 new views this week</a>
                                  <div class="users-thumb-list">
                                    <a href="#" title="Anderw" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-1.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="frank" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-2.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Sara" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-3.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Amy" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-4.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Ema" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-5.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Sophie" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-6.jpg')}}" alt="">
                                    </a>
                                    <a href="#" title="Maria" data-toggle="tooltip">
                                        <img src="{{asset('social/images/resources/userlist-7.jpg')}}" alt="">
                                    </a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div><!-- page like widget -->
                <div class="widget">
                    <div class="banner medium-opacity bluesh">
                        <div class="bg-image" style="background-image: url({{asset('social/images/resources/baner-widgetbg.jpg')}})"></div>
                        <div class="baner-top">
                            <span><img alt="" src="images/book-icon.png"></span>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="banermeta">
                            <p>
                                create your own favourit page.
                            </p>
                            <span>like them all</span>
                            <a data-ripple="" title="" href="#">start now!</a>
                        </div>
                    </div>
                </div>
                <div class="widget friend-list stick-widget">
                    <h4 class="widget-title">Friends</h4>
                    <div id="searchDir"></div>
                    <ul id="people-list" class="friendz-list">
                        <li>
                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar.jpg')}}" alt="">
                                <span class="status f-online"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">bucky barnes</a>
                                <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d7c9ced4c5d2d3cfccc4c5d2e0c7cdc1c9cc8ec3cfcd">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar2.jpg')}}" alt="">
                                <span class="status f-away"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">Sarah Loren</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="b4d6d5c6dad1c7f4d3d9d5ddd89ad7dbd9">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar3.jpg')}}" alt="">
                                <span class="status f-off"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">jason borne</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="1d777c6e72737f5d7a707c7471337e7270">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar4.jpg')}}" alt="">
                                <span class="status f-off"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">Cameron diaz</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="bed4dfcdd1d0dcfed9d3dfd7d290ddd1d3">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>

                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar5.jpg')}}" alt="">
                                <span class="status f-online"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">daniel warber</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="553f34263a3b37153238343c397b363a38">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>

                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar6.jpg')}}" alt="">
                                <span class="status f-away"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">andrew</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="5933382a36373b193e34383035773a3634">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>

                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar7.jpg')}}" alt="">
                                <span class="status f-off"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">amy watson</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="5933382a36373b193e34383035773a3634">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>

                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar5.jpg')}}" alt="">
                                <span class="status f-online"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">daniel warber</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="dbb1baa8b4b5b99bbcb6bab2b7f5b8b4b6">[email&#160;protected]</a></i>
                            </div>
                        </li>
                        <li>

                            <figure>
                                <img src="{{asset('social/images/resources/friend-avatar2.jpg')}}" alt="">
                                <span class="status f-away"></span>
                            </figure>
                            <div class="friendz-meta">
                                <a href="time-line.html">Sarah Loren</a>
                                <i><a href="#" class="__cf_email__" data-cfemail="2644475448435566414b474f4a0845494b">[email&#160;protected]</a></i>
                            </div>
                        </li>
                    </ul>
                    <div class="chat-box">
                        <div class="chat-head">
                            <span class="status f-online"></span>
                            <h6>Bucky Barnes</h6>
                            <div class="more">
                                <span><i class="ti-more-alt"></i></span>
                                <span class="close-mesage"><i class="ti-close"></i></span>
                            </div>
                        </div>
                        <div class="chat-list">
                            <ul>
                                <li class="me">
                                    <div class="chat-thumb"><img src="{{asset('social/images/resources/chatlist1.jpg')}}" alt=""></div>
                                    <div class="notification-event">
                                        <span class="chat-message-item">
                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                        </span>
                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                    </div>
                                </li>
                                <li class="you">
                                    <div class="chat-thumb"><img src="{{asset('social/images/resources/chatlist2.jpg')}}" alt=""></div>
                                    <div class="notification-event">
                                        <span class="chat-message-item">
                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                        </span>
                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                    </div>
                                </li>
                                <li class="me">
                                    <div class="chat-thumb"><img src="{{asset('social/images/resources/chatlist1.jpg')}}" alt=""></div>
                                    <div class="notification-event">
                                        <span class="chat-message-item">
                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                        </span>
                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                    </div>
                                </li>
                            </ul>
                            <form class="text-box">
                                <textarea placeholder="Post enter to post..."></textarea>
                                <div class="add-smiles">
                                    <span title="add icon" class="em em-expressionless"></span>
                                </div>
                                <div class="smiles-bunch">
                                    <i class="em em---1"></i>
                                    <i class="em em-smiley"></i>
                                    <i class="em em-anguished"></i>
                                    <i class="em em-laughing"></i>
                                    <i class="em em-angry"></i>
                                    <i class="em em-astonished"></i>
                                    <i class="em em-blush"></i>
                                    <i class="em em-disappointed"></i>
                                    <i class="em em-worried"></i>
                                    <i class="em em-kissing_heart"></i>
                                    <i class="em em-rage"></i>
                                    <i class="em em-stuck_out_tongue"></i>
                                </div>
                                <button type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div><!-- friends list sidebar -->
            </aside>
        </div><!-- sidebar -->
    </div>
</div>
</div>
</div>
</div>
</section>

    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                            <div class="foot-logo">
                                <div class="logo">
                                    <a href="/" title=""><img src="{{asset('img/logo.png')}}" alt=""></a>
                                </div>
                                <p>
                                    The trio took this simple idea and built it into the world’s leading carpooling platform.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>follow</h4></div>
                            <ul class="list-style">
                                <li><i class="fa fa-facebook-square"></i> <a href="#" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="#" title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="#" title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a href="#" title="">Google+</a></li>
                                <li><i class="fa fa-pinterest-square"></i> <a href="#" title="">Pintrest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>Navigate</h4></div>
                            <ul class="list-style">
                                <li><a href="about.html" title="">about us</a></li>
                                <li><a href="contact.html" title="">contact us</a></li>
                                <li><a href="terms.html" title="">terms & Conditions</a></li>
                                <li><a href="sitemap.html" title="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>useful links</h4></div>
                            <ul class="list-style">
                                <li><a href="#" title="">leasing</a></li>
                                <li><a href="#" title="">submit route</a></li>
                                <li><a href="#" title="">how does it work?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>download apps</h4></div>
                            <ul class="colla-apps">
                                <li><a href="#" title=""><i class="fa fa-android"></i>android</a></li>
                                <li><a href="#" title=""><i class="ti-apple"></i>iPhone</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright"><a target="_blank" href="#">Centre de Tranfusion Sanguine</a></span>
                        <i><img src="{{asset('social/images/credit-cards.png')}}" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('social/js/main.min.js')}}"></script>
        <script src="{{asset('social/js/script.js')}}"></script>
        <script src="{{asset('social/js/map-init.js')}}"></script>
        <script src="{{asset('social/js/main.min.js')}}"></script>
        <script src="{{asset('toastr.js') }}"></script>
        <script src="{{ asset('backend/assets/js/page/toastr.js') }}"></script>
        <script src="{{ asset('backend/assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
        {!! Toastr::message() !!}
        <script>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}','Error',{
                    closeButtor: true,
                    progressBar: true
                });
                @endforeach
            @endif
        </script>
    </body>

    </html>
