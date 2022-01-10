@extends('layouts.social')
@section('title')
    {{ __('messages.user_user') }}
@endsection
@section('content')
<div class="col-lg-6">
        @foreach ($groupe as $grp )
        <form method="POST" action="{{route('user.unjoind.store')}}">
                @csrf
        <div class="central-meta">
            <div class="groups">
                <span><i class="fa fa-users"></i> Groups</span>
            </div>
            <ul class="nearby-contct">


                    <li>
                        <div class="nearly-pepls">

                            <figure>
                                <a href="#" title=""><img src="{{asset('social/images/resources/group1.jpg')}}" alt=""></a>
                            </figure>
                            <div class="pepl-info">
                            <input name="groupe_id" value="{{$grp->id}}" hidden>
                            <input name="user_" value="{{Auth::user()->id}}" hidden>
                                <h4><a href="#" title="">{{$grp->name}}</a></h4>
                            <span>cree le {{$grp->created_at}}</span>
                                <em>{{$number_of_menbers}} Members</em>
                                <button class="add-butn" data-ripple="" type="submit">Rejoindre Maintenant</button>
                                {{-- <a href="#" title="" class="add-butn" data-ripple="">join now</a> --}}
                            </div>

                        </div>
                    </li>
            </ul>
        </div><!-- photos -->
    </form>
        @endforeach
    </div><!-- centerl meta -->
@endsection
