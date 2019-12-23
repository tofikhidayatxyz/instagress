@extends('layouts.main')



@section('css')
    <style>
    .avatar-custom {
        -webkit-border-top-left-radius: 4px;
        -moz-border-top-left-radius: 4px;
        border-top-left-radius: 4px;
        -webkit-border-top-right-radius: 4px;
        -moz-border-top-right-radius: 4px;
        border-top-right-radius: 4px;
        -webkit-border-bottom-left-radius: 4px;
        -moz-border-bottom-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -webkit-border-bottom-right-radius: 4px;
        -moz-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px;
        background: #fafaf8;
        border: 1px solid #f2f2f0;
        display: block;
        position: absolute;
        top: 4px;
        z-index: 1;
    }
    .avatar-custom img {
        height: 80px !important;
        width: 80px !important;
    }
    .row.mx-0 {
        margin-left: 0 !important;
        margin-right:  0 !important;
    }
    .just .form-group {
        margin-left: unset !important ;
        margin-right: unset !important;
    }
    .expand-row {
        display: block !important;
    }
    .form-group.mx-0 {
        margin-left: 0 !important;
        margin-right:  0 !important;
    }
    </style>
@endsection

@php
    function getSession($session) {
        if(\Session::has($session)) {
            return Session::get($session);
        }
        return false;
    }
@endphp

@section('content')

        
        <form action="{{ route('admin.user.update') }}" class="form-horizontal" method="post" >
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">


        <div class="usermenu">
            <div class="container">
                <a href="demo.html" class="avatar-custom" data-popup-open="#popup-account-email">
                    <img src="{{ $user->profile }}" alt="demo" />
                </a>

                <ul class="menu pull-left">
                    <li class="name">
                        <a href="#set email" data-popup-open="#popup-account-email">{{ $user->name }}</a>
                    </li>

                    {{--
                    <li class="hidden-xs">
                        <a href="#" class="semibold" data-popup-open="#popup-account-signup">
                            Sign up for Dashboard
                        </a>
                    </li> --}}

                </ul>

                <ul class="menu  pull-right">

                    <li class="active">
                        <a href="{{ route('activity.index') }}">Activity</a>
                    </li>

                    <li >
                        <a href="{{ route('admin.user.activity.stat', $user->id) }}">Stat</a>
                    </li>

                    <li class="">
                        <a href="../index.html">Likes</a>
                    </li>

                </ul>
            </div>
        </div>

    

    
        @include('templates.template')

        <section class="activity worker" data-user-id="" data-username="demo" data-status="stopped" data-sub-status="" data-stats="{}" data-config="{&quot;like&quot;:true,&quot;comment&quot;:false,&quot;follow&quot;:false,&quot;unfollow&quot;:false,&quot;schedule&quot;:null,&quot;scheduleTz&quot;:null,&quot;speed&quot;:&quot;slow&quot;,&quot;source&quot;:&quot;tag&quot;,&quot;mediaAge&quot;:&quot;&quot;,&quot;mediaType&quot;:&quot;&quot;,&quot;minimumLikes&quot;:0,&quot;maximumLikes&quot;:0,&quot;minComments&quot;:0,&quot;maxComments&quot;:0,&quot;userRelationFilter&quot;:&quot;&quot;,&quot;userProfileFilter&quot;:&quot;&quot;,&quot;minFollowers&quot;:0,&quot;maxFollowers&quot;:0,&quot;tagAndTag&quot;:false,&quot;locationAndTag&quot;:false,&quot;usernameAndTag&quot;:false,&quot;commentDontSpam&quot;:false,&quot;comments&quot;:[&quot;Brilliant one&quot;,&quot;Flawless&quot;,&quot;Aww sweet&quot;,&quot;This is sweet :)&quot;,&quot;Very nice! 😃&quot;,&quot;Impressive content!&quot;,&quot;Very cool!&quot;,&quot;Excellent!&quot;,&quot;So nice!&quot;,&quot;Pretty awesome :)&quot;,&quot;👍&quot;,&quot;Great post&quot;,&quot;Awesome&quot;,&quot;Good shot!&quot;,&quot;Perfect one!&quot;,&quot;Super cool :)&quot;,&quot;Pretty awesome&quot;,&quot;Wow like it!&quot;,&quot;Aw nice&quot;,&quot;This is terrific&quot;],&quot;followSource&quot;:&quot;media&quot;,&quot;followCycle&quot;:1000,&quot;followDontSpam&quot;:false,&quot;followNotPrivate&quot;:false,&quot;unfollowSource&quot;:&quot;db&quot;,&quot;unfollowCycle&quot;:1000,&quot;unfollowSmart&quot;:false,&quot;tags&quot;:[&quot;hungry&quot;,&quot;plot&quot;,&quot;sister&quot;,&quot;iphoneonly&quot;,&quot;tourism&quot;,&quot;ilovemyfollowers&quot;,&quot;dad&quot;,&quot;travelgram&quot;,&quot;tweegram&quot;,&quot;instapassport&quot;,&quot;sis&quot;,&quot;tiny&quot;,&quot;life&quot;,&quot;lunch&quot;,&quot;visiting&quot;,&quot;illustration&quot;,&quot;follow4follow&quot;,&quot;travel&quot;,&quot;young&quot;,&quot;style&quot;],&quot;locations&quot;:[],&quot;usernames&quot;:[],&quot;likeLimit&quot;:0,&quot;commentLimit&quot;:0,&quot;followLimit&quot;:0,&quot;unfollowLimit&quot;:0,&quot;timeLimit&quot;:&quot;&quot;,&quot;downtimeLimit&quot;:&quot;3h&quot;,&quot;stopTags&quot;:[],&quot;stopUsernames&quot;:[],&quot;stopKeywords&quot;:[]}" data-cat-states="{&quot;main&quot;:1,&quot;tags&quot;:1,&quot;autostop&quot;:1}">
           
           
                
                <div class="activity-head">
                    <div class="container">
                        <h1>Activity</h1>

                        <div class="alert alert-info worker-start-info hidden">
                            <a href="#" class="close" data-dismiss="alert">&times;</a> When your Activity is started we strongly recommend not to make any manual activity on Instagram using a mobile device or third-party websites.
                            <br/> Also, don't use other automation services simultaneously with Instagress — it can lead to errors, password reset or even blocking of your account.
                        </div>

                        <div class="alert alert-success worker-stop-reason hidden" data-hidden="true" data-alert-class="alert-success">
                            Your activity automatically stopped:
                            <span class="stop-reason"></span>
                            <span class="stop-error-help hidden">
                            (<a href="#" class="link-ajax"
                                data-popup-open="#popup-activity-error-help">click here to get more info</a>)
                        </span>
                        </div>

                        <div class="row">
                            <div class="todo-controls col-sm-6 col-sm-push-6 col-md-4 col-md-push-4">
                                <div class="title-block">Select what you want to do</div>

                                <div class="todo-control">
                                    <input type="checkbox" name="like" id="inpLike" class="chk-custom" data-checked="{{ $user->activity_likes }}" checked/>
                                    <label class="chk-custom todo-toggle toggle-likes" for="inpLike"></label>
                                    <label class="todo-label" for="inpLike">
                                        Likes
                                        <span class="help-tip" title="Likes" data-content="
                                            Turn this switch on (red) to automate your Likes activity.<br/><br/>
                                            The counter shows how many photos and videos you've liked
                                            since your last activity start.
                                        ">?</span>
                                    </label>
                                    <span class="todo-count count-likes">{{ $user->activity_likes_value }}</span>
                                </div>

                                <div class="todo-control">
                                    <input type="checkbox" name="comment" id="inpComment" class="chk-custom" data-checked="{{ $user->activity_comments }}" />
                                    <label class="chk-custom todo-toggle toggle-comments" for="inpComment"></label>
                                    <label class="todo-label" for="inpComment">
                                        Comments
                                        <span class="help-tip" title="Comments" data-content="
                                            Turn this switch on (red) to automate your Comments activity.<br/><br/>
                                            The counter shows how many photos and videos you've commented
                                            since your last activity start.
                                        ">?</span>
                                    </label>
                                    <span class="todo-count count-comments">{{ $user->activity_comments_value }}</span>
                                </div>

                                <div class="todo-control">
                                    <input type="checkbox" name="follow" id="inpFollow" class="chk-custom" data-checked="{{ $user->activity_follows }}" />
                                    <label class="chk-custom todo-toggle toggle-follows" for="inpFollow"></label>
                                    <label class="todo-label" for="inpFollow">
                                        Follows
                                        <span class="help-tip" title="Follows" data-content="
                                            Turn this switch on (red) to automate your Follows activity.<br/><br/>
                                            The counter shows how many users you've followed
                                            since your last activity start.
                                        ">?</span>

                                    </label>
                                    <span class="todo-count count-follows">{{ $user->activity_follows_value }}</span>
                                </div>

                                <div class="todo-control">
                                    <input type="checkbox" name="unfollow" id="inpUnfollow" class="chk-custom" data-checked="{{ $user->activity_unfollows }}" />
                                    <label class="chk-custom todo-toggle toggle-unfollows" for="inpUnfollow"></label>
                                    <label class="todo-label" for="inpUnfollow">
                                        Unfollows
                                        <span class="help-tip" title="Unfollows" data-content="
                                            Turn this switch on (red) to automate your Unfollows activity.<br/><br/>
                                            The counter shows how many users you've unfollowed
                                            since your last activity start.
                                        ">?</span>
                                    </label>
                                    <span class="todo-count count-unfollows">{{ $user->activity_unfollows_value }}</span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-sm-pull-6 col-md-4 col-md-pull-4 start-stop-block">
                                <div class="title-block color-gray">
                                    <span class="status">{{ $user->status }}</span>

                                    <i class="status-icon status-started fa-spin hidden" data-toggle="tooltip" title="Activity is started<br/>Time is counting down"></i>

                                    <i class="status-icon status-paused hidden" data-toggle="tooltip" title="Activity is paused by Schedule<br/>Time is not counting"></i>
                                </div>

                                <div class="resource-cont">
                                    <div class="resource resource-time ok">
                                        <span class="label-over">
                                            Time is over
                                            <span class="help-tip"
                                                title="Activity time is over"
                                                data-content="You can start your activity again in less than
                                                    a minute. Simply choose a package from the list on the right side
                                                    and press the &quot;Buy&quot; button.">?</span>
                                        </span>
                                        <span class="label-ok">
                                            Remaining time
                                            <span class="help-tip"
                                                title="Remaining Activity time"
                                                data-content="Time is counting down only when your activity
                                                    is started. You can use your activity time whenever
                                                    you want.">?</span>
                                        </span>
                                        <div class="counter">{{ $user->timeRemaining }}</div>
                                    </div>

                                    <div class="mt10">
                                        <a href="#" class="link-ajax" data-popup-open="#popup-time">How time works</a>
                                    </div>
                                </div>

                                <div class="start-stop-cont">
                                    <div class="input-group input-group-with-gap">

                                        @if($user->status == 'stopped') 
                                        <a href="{{ route('admin.activity.start', $user->id) }}" class="btn btn-plain btn-big btn-start-stop btn-danger">Start</a>
                                        @else
                                        <a href="{{ route('admin.activity.stop', $user->id) }}" class="btn btn-plain btn-big btn-start-stop btn-secondary">Stop</a>
                                        @endif
                                        
                                        <span class="input-group-btn">
                                        {{-- <button class="btn btn-plain btn-big btn-schedule"
                                                data-popup-open="#popup-activity-schedule"></> --}}
                                    </span>
                                    </div>
                                    <div class="mt10">
                                        <a href="#" class="link-ajax" data-popup-open="#popup-start-guide">Quick start guide</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">

                                <div class="trydemo-cont ">
                                    <div class="title-block">Try our service</div>

                                    <div class="trydemo">
                                        <div class="trydemo-head">3 days</div>
                                        <div class="trydemo-hint">try for free</div>
                                    </div>

                                    <div class="mt10">
                                        <a href="#" class="link-ajax btn-show-packages">View time packages</a>
                                    </div>
                                </div>

                                <div class="payment-cont hidden">
                                    <div class="title-block">
                                        Buy time package
                                    </div>

                                    <div class="payment-slider-cont">
                                        <div class="payment-slider">

                                            <div class="payment-item ">

                                                <span class="num">3</span>
                                                <span class="units">days</span>
                                                <span class="price">
                                                        $1.99
                                                    </span>
                                                <span class="savings">
                                                        $0.66
                                                        per day
                                                    </span>

                                                <a href="#" class="btn btn-plain btn-big btn-success" data-popup-open="#popup-account-signup">Buy</a>

                                            </div>

                                            <div class="payment-item ">

                                                <span class="num">10</span>
                                                <span class="units">days</span>
                                                <span class="price">
                                                        $4.99
                                                    </span>
                                                <span class="savings">
                                                        $0.50
                                                        per day
                                                    </span>

                                                <a href="#" class="btn btn-plain btn-big btn-success" data-popup-open="#popup-account-signup">Buy</a>

                                            </div>

                                            <div class="payment-item ">

                                                <span class="num">30</span>
                                                <span class="units">days</span>
                                                <span class="price">
                                                        $9.99
                                                    </span>
                                                <span class="savings">
                                                        $0.33
                                                per day
                                            </span>

                                        <a href="#" class="btn btn-plain btn-big btn-success" data-popup-open="#popup-account-signup">Buy</a>

                                    </div>

                                    <div class="payment-item ">

                                        <span class="num">90</span>
                                        <span class="units">days</span>
                                        <span class="price">
                                                $24.99
                                            </span>
                                        <span class="savings">
                                                $0.28
                                                per day
                                            </span>

                                        <a href="#" class="btn btn-plain btn-big btn-success" data-popup-open="#popup-account-signup">Buy</a>

                                    </div>

                                    <div class="payment-item ">

                                        <span class="num">180</span>
                                        <span class="units">days</span>
                                        <span class="price">
                                                $44.99
                                            </span>
                                        <span class="savings">
                                                $0.25
                                                per day
                                            </span>

                                        <a href="#" class="btn btn-plain btn-big btn-success" data-popup-open="#popup-account-signup">Buy</a>

                                    </div>

                                    <div class="payment-item ">

                                        <span class="num">360</span>
                                        <span class="units">days</span>
                                        <span class="price">
                                                $79.99
                                            </span>
                                        <span class="savings">
                                                $0.22
                                                per day
                                            </span>

                                        <a href="#" class="btn btn-plain btn-big btn-success" data-popup-open="#popup-account-signup">Buy</a>

                                    </div>

                                </div>
                            </div>

                            <div class="mt10">
                                <a href="#" class="link-ajax btn-extra-packages">Extra time packages</a>
                                <a href="#" class="link-ajax btn-normal-packages hidden">Normal time packages</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="activity-settings container">
            <div class="mt40 mb20">
                {{-- <a href="#" class="link-ajax mr10 js-btn-settings-expand">Expand all</a>
                <a href="#" class="link-ajax js-btn-settings-collapse">Collapse all</a> --}}
                <button class="btn btn-dark px-4" type="submit"> 
                    Save/Load settings    
                </button> 
            </div>
            


            {{-- Main action --}}

            @include('components.action')
            {{-- start tags --}}
            
            {{-- end tags --}}
            {{-- start filter --}}
           

            {{-- <a href="#" class="link-ajax text-small js-btn-settings-reset">
            Reset all settings to default values
        </a> --}}
        </div>
  
</section>

</form>

@include('modal.popup')
@include('modal.init')
@endsection