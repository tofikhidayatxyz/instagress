@extends('layouts.main')


@php
    function getSession($session) {
        if(\Session::has($session)) {
            return Session::get($session);
        }
        return false;
    }
@endphp


@section('css')
    <style>
        .card-event-list {
            margin-bottom: 25px !important;
        }
        .card-event-list i {
            font-size: 30px !important;
            opacity: .5;
        }
        .card-event-list .general-icon {
            opacity: .5;
            margin-left: -30px;
        }
        .card-event-list .justify-content-center {
            margin-top: 10px !important;
        }
        .card-event-list h3 {
            margin-top: 15px !important;
            margin-left: 10px !important;
        }
        .justify-content-center {
            justify-content: center;
            align-items: center;
        }
        .d-flex {
            display: flex;
        }
        
        .card-user-image .card-body {
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .card-user-image  img {
                height: 150px;
                object-position:center;
                max-width:100%;
                object-fit:cover;
        }
        .logs-session {
            background: #F7F7F5 !important;
        }
        .card  {
            background: #fff;
            border-radius: 10px !important;
            box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.3);
            margin-top: 20px;
            padding: 7px;
            justify-content:center;
            display:flex;
            min-height: 230px;
            align-items:center;
        }
    </style>
@endsection

@section('content')
     
        <div class=navbar-username>
            <div class=container>
                <div class=username-cont>
                    <a href="#" data-popup-open="#popup-account-email-change" class=username>
                    {{ $user->name }}
                    <div class="avatar js-avatar">
                        <img src="{{ $user->profile }}" alt="{{ $user->name }}">
                    </div>
        
                </a>
        
                </div>
                
                <a href=# class="btn-username-menu-pages sf-hidden" data-ui-menu-toggle=navbar-username-menu-pages></a>
                <div class="navbar-mobile-menu navbar-mobile-username-menu sf-hidden" data-ui=navbar-username-menu-pages>
                    <ul>
                        <li >
                            <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.detail', $user->id) : route('activity.index') }}">
                        Activity
                        </a>
                        </li>
                        <li class=active>
                            <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.logs', $user->id) : route('activity.logs') }}">
                        Log
                        </a>
                        </li>
                        <li class=active>
                            <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.activity.stat', $user->id) : route('activity.stat') }}">
                        Stats
                        </a>
                        </li>
                        <li>
                            <a href="">
                        Profile
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="username-menu pull-right">
                    <ul class=username-menu-pages>
                        <li >
                            <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.detail', $user->id) : route('activity.index') }}">
                        Activity
                        </a>
                        </li>
                        <li class=active>
                            <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.logs', $user->id) : route('activity.logs') }}">
                        Log
                        </a>
                        </li>
                        </li>
                        <li >
                            <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.activity.stat', $user->id) : route('activity.stat') }}">
                        Stats
                        </a>
                        </li>
                        <li>
                            <a href="">
                        Profile
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="username-oversize sf-hidden"></div>
            </div>
        </div>


        <div id="popup-activity-error-help" class="popup">
            <h3>Activity Error Help</h3>
            <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-activity-error-help"></a>
            <div class="mb20">
                <p>
                    Your Activity stopped with error? These can be the possible reasons:
                </p>
                <ul class="nice-list">
                    <li>
                        <p><strong>No connection to Instagram API</strong></p>
                        <p>
                            How to solve: Try to restart your Activity after a while.
                        </p>
                        <p class="text-small">
                            This error may occur due to temporary networking issues on our servers or when Instagram API is temporarily unavailable.
                        </p>
                    </li>
                    <li>
                        <p><strong>Unable to perform selected action</strong></p>
                        <p>
                            How to solve: Try to restart your Activity using Slow or Normal speed after 12-24 hours.
                        </p>
                        <p class="text-small">
                            It looks like Instagram has temporarily blocked one of your actions (like, comment, follow or unfollow) due to high speed of your activity.
                        </p>
                    </li>
                    <li>
                        <p><strong>Access to Instagram API has been reset</strong></p>
                        <p>
                            How to solve: Try to reconnect your username after a while and then restart your Activity.
                        </p>
                        <p class="text-small">
                            This error may occur when access token or password of your username was reset by Instagram due to high speed of your activity or if you using Instagram on your mobile device or with third-party websites.
                        </p>
                    </li>
                </ul>
                <p>
                    If you will continue to receive any activity errors, please
                    <a href="demo.html#" class="link-ajax" data-popup-open="#popup-support">contact&nbsp;us</a>.
                </p>
            </div>
            <div class="text-align-center">
                <button class="btn btn-plain" data-popup-close="#popup-activity-error-help">Close</button>
            </div>
        </div>

        <div id="popup-activity-schedule" class="popup" data-popup-overlay="true">
            <h3>Schedule</h3>
            <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-activity-schedule"></a>
            <div class="color-gray mt20">
                <span class="mr10">Select hours when your activity should be active:</span>
                <a href="demo.html#" class="link-ajax mr10 js-btn-select-all">All</a>
                <a href="demo.html#" class="link-ajax mr10 js-btn-select-none">None</a>
                <a href="demo.html#" class="link-ajax js-btn-select-day">Day</a>
            </div>
            <div class="color-gray mt10">
                <span class="schedule-legend active mr10">Activity&nbsp;started</span>
                <span class="schedule-legend">Activity&nbsp;paused</span>
            </div>
            <table class="mt20">
                <thead>
                    <!-- Will be rendered by JS -->
                </thead>
                <tbody>
                    <!-- Will be rendered by JS -->
                </tbody>
            </table>
            <div class="color-gray mt20 mb10">
                Select time zone for your schedule:
            </div>

            <select class="form-control js-sel-tz" data-selected="null">
                @include('components.region')
            </select>
            <div class="text-align-center mt20">
                <button class="btn btn-plain btn-success js-btn-save">Save</button>
                <button class="btn btn-plain" data-popup-close="#popup-activity-schedule">Close</button>
            </div>
        </div>

        <div id="popup-activity-comments" class="popup">
            <h3>Add Comments</h3>
            <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-activity-comments"></a>

            <div class="color-gray mb10">
                Add multiple comments at the same time by using new line as delimiter. You also can use {spintax|spinning} format in your comments.
            </div>

            <div class="alerts">
                <div class="alert alert-danger alert-error" data-ui="txt-error"></div>
                <div class="alert alert-success" data-ui="txt-status"></div>
            </div>

            <div class="mb10">
                <textarea class="form-control js-inp-comments" rows="4" placeholder="Comments" autofocus></textarea>
            </div>
            <div class="text-align-center mb20">
                <a href="https://instagressalternative.com/emoji" target="_blank">Emoji cheat sheet</a>
            </div>

            <div class="text-align-center mt20">
                <button class="btn btn-plain js-btn-close js-hidden" data-popup-close="#popup-activity-comments">Close</button>
                <button class="btn btn-plain btn-success js-btn-add js-hidden">Add</button>
            </div>
        </div>

        <div id="popup-activity-tags" class="popup" data-popup-overlay="true">
            <h3>Add Tags</h3>
            <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-activity-tags"></a>

            <div class="alerts">
                <div class="alert alert-danger alert-error js-txt-error"></div>
                <div class="alert alert-success js-txt-status"></div>
            </div>

            <div class="js-grp-search">
                <div class="mb20">
                    <div class="input-group input-group-with-gap">
                        <input type="text" class="form-control input-icon input-icon-tag js-inp-search" placeholder="Tag" autofocus/>
                        <span class="input-group-btn">
                        <button class="btn btn-plain btn-success js-btn-search">Search</button>
                    </span>
                    </div>
                    <span class="help-block text-danger text-error js-hidden"></span>
                </div>
                <div class="mt20 js-results"></div>
                <div class="loader mt20 js-loader js-hidden"></div>
                <div class="text-align-center mt20">
                    <a href="demo.html#" class="link-ajax" data-container="#popup-activity-tags" data-hide=".js-grp-search" data-show=".js-grp-raw">Enter your list of tags</a>
                </div>
            </div>

            <div class="js-grp-raw js-hidden">
                <textarea class="form-control js-inp-raw" rows="4" placeholder="List of tags"></textarea>
                <div class="text-align-center mt20">
                    <a href="demo.html#" class="link-ajax" data-container="#popup-activity-tags" data-hide=".js-grp-raw" data-show=".js-grp-search">Search tags</a>
                </div>
            </div>

            <div class="text-align-center mt20">
                <button class="btn btn-plain js-btn-close js-hidden" data-popup-close="#popup-activity-tags">Close</button>
                <button class="btn btn-plain btn-success js-btn-add js-hidden">Add</button>
            </div>
        </div>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?language=en"></script>

        <div id="popup-activity-locations" class="popup" data-popup-overlay="true">
            <h3>Add Locations</h3>
            <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-activity-locations"></a>

            <div class="color-gray mb10">
                Find locations by name, address, city, state or country and get the most popular places nearby. Or just click on the map to start exploring locations on the current map position.
            </div>

            <div class="alerts">
                <div class="alert alert-danger alert-error js-txt-error"></div>
                <div class="alert alert-success js-txt-status"></div>
            </div>

            <input type="hidden" class="js-inp-lat" value="" />
            <input type="hidden" class="js-inp-lng" value="" />

            <div class="mb20">
                <div class="input-group input-group-with-gap">
                    <input type="text" class="form-control input-icon input-icon-location js-inp-address" placeholder="Location" autofocus/>
                    <span class="input-group-btn">
                    <button class="btn btn-plain btn-success js-btn-find">Search</button>
                </span>
                </div>
                <span class="help-block text-danger text-error hidden"></span>
            </div>

            <div class="map js-wgt-map js-hidden"></div>

            <div class="mt20 js-wgt-results js-hidden"></div>

            <div class="loader mt20 js-wgt-loader js-hidden"></div>

            <div class="text-align-center mt20">
                <button class="btn btn-plain js-btn-close js-hidden" data-popup-close="#popup-activity-locations">Close</button>
                <button class="btn btn-plain btn-success js-btn-add js-hidden">Add</button>
            </div>
        </div>

        <div id="popup-activity-usernames" class="popup" data-popup-overlay="true">
            <h3>Add Usernames</h3>
            <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-activity-usernames"></a>

            <div class="alerts">
                <div class="alert alert-danger alert-error" data-ui="txt-error"></div>
                <div class="alert alert-success" data-ui="txt-status"></div>
            </div>

            <div class="mb20">
                <div class="input-group input-group-with-gap">
                    <input type="text" class="form-control input-icon input-icon-username" placeholder="Username" autofocus data-ui="inp-search" />
                    <span class="input-group-btn">
                    <button class="btn btn-plain btn-success" data-ui="btn-search">Search</button>
                </span>
                </div>
                <span class="help-block text-danger text-error hidden"></span>
            </div>

            <div class="mt20" data-ui="results"></div>

            <div class="loader mt20 hidden" data-ui="loader"></div>

            <div class="text-align-center mt20">
                <button class="btn btn-plain hidden" data-ui="btn-close" data-popup-close="#popup-activity-usernames">Close</button>
                <button class="btn btn-plain btn-success hidden" data-ui="btn-add">Add</button>
            </div>
        </div>

        <div id="popup-activity-keywords" class="popup">
            <h3>Add Keywords</h3>
            <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-activity-keywords"></a>

            <div class="color-gray mb10">
                Add multiple keywords at the same time by using new line as delimiter. You also can use * symbol in your keywords to match any word or part of word, or nothing. For example: "nude*" — will match all words that start with "nude".
            </div>

            <div class="alerts">
                <div class="alert alert-danger alert-error" data-ui="txt-error"></div>
                <div class="alert alert-success" data-ui="txt-status"></div>
            </div>

            <div class="mb10">
                <textarea class="form-control js-inp-keywords" rows="4" placeholder="Keywords" autofocus></textarea>
            </div>

            <div class="text-align-center mt20">
                <button class="btn btn-plain js-btn-close js-hidden" data-popup-close="#popup-activity-keywords">Close</button>
                <button class="btn btn-plain btn-success js-btn-add js-hidden">Add</button>
            </div>
        </div>
        
<section class="logs-session">
           

        <div class="activity-settings container mb-60">
            <div class="mt60 mb20">
                <h2>Log</h2>
            </div>
            


            {{-- Main action --}}

           <div class="row">
                @foreach ($user->images->take(50) as $image )
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="card card-user-image position-relative">
                            <a href="{{ URL::to('/storage/images') }}/{{ $image->image }}" target="_blank">
                                <img src="{{ URL::to('/storage/images') }}/{{ $image->image }}" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
          
            {{-- start filter --}}
        </div>
</section>

@include('modal.init')
@include('modal.popup')
@endsection