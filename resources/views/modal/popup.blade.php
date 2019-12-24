
{{--  Modal tag --}}
<div id="popup-activity-tags-data" class="popup">
    <h3>Add Tags</h3>
    <form action="{{ route('admin.user.tag.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <a href="" class="btn-close-x" data-popup-close="#popup-activity-tags-data"></a>

        <div class="alerts">
            <div class="alert alert-danger alert-error js-txt-error"></div>
            <div class="alert alert-success js-txt-status"></div>
        </div>

        <div class="js-grp-raw expand-row" >
            <textarea class="form-control js-inp-raw" name="tags" rows="4" placeholder="List of tags"></textarea>
        </div>

        <div class="text-align-center mt20">
            <button class="btn btn-plain js-btn-close" data-popup-close="#popup-activity-tags-data">Close</button>
            <button class="btn btn-plain btn-success" type="submit" >Add</button>
        </div>
    </form>
</div>


{{-- Location --}}

<div id="popup-activity-locations-data" class="popup">
    <h3>Add Locations</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-locations-data"></a>
    <form action="{{ route('admin.user.location.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb20">
            <div class="input-group input-group-with-gap">
                <input type="text" class="form-control input-icon input-icon-location" name="location" placeholder="Location" autofocus/>
                <span class="input-group-btn">
                <button class="btn btn-plain btn-success" type="submit">Add</button>
            </span>
            </div>
            <span class="help-block text-danger text-error hidden"></span>
        </div>

        <div class="text-align-center mt20">
            <button class="btn btn-plain js-btn-close" data-popup-close="#popup-activity-locations-data">Close</button>
        </div>
    </form>
</div>



{{-- Username --}}
<div id="popup-activity-username-data" class="popup">
    <h3>Add Username</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-username-data"></a>
    <form action="{{ route('admin.user.username.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb20">
            <div class="input-group input-group-with-gap">
                <input type="text" class="form-control input-icon" name="username" placeholder="Username" autofocus/>
                @if(getSession('error'))
                 <span class="text-danger">{!! getSession('error') !!}</span>
                @endif
                <span class="input-group-btn">
                    <button class="btn btn-plain btn-success" type="submit">Add</button>
                </span>
            </div>
            <span class="help-block text-danger text-error hidden"></span>
        </div>

        <div class="text-align-center mt20">
            <button class="btn btn-plain js-btn-close" data-popup-close="#popup-activity-username-data">Close</button>
        </div>
    </form>
</div>


@if(getSession('open') == 'username' &&  getSession('error'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('[data-popup-open="#popup-activity-username-data"]').trigger('click')
    })
</script>
@endif

{{-- Tag blacklist --}}
<div id="popup-activity-tag-blacklist" class="popup">
    <h3>Add Blacklist Tags</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-tag-blacklist"></a>
    <form action="{{ route('admin.user.tagblacklist.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb20">
            <div class="input-group input-group-with-gap">
                <input type="text" class="form-control input-icon" name="tag" placeholder="Blacklist Tag" autofocus/>
                <span class="input-group-btn">
                <button class="btn btn-plain btn-success" type="submit">Add</button>
            </span>
            </div>
            <span class="help-block text-danger text-error hidden"></span>
        </div>

        <div class="text-align-center mt20">
            <button class="btn btn-plain js-btn-close" data-popup-close="#popup-activity-tag-blacklist">Close</button>
        </div>
    </form>
</div>



{{-- Tag keyword --}}
<div id="popup-activity-keyword-blacklist" class="popup">
    <h3>Add Blacklist Keyword</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-keyword-blacklist"></a>
    <form action="{{ route('admin.user.keywordblacklist.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb20">
            <div class="input-group input-group-with-gap">
                <input type="text" class="form-control input-icon" name="keyword" placeholder="Keyword" autofocus/>
                <span class="input-group-btn">
                <button class="btn btn-plain btn-success" type="submit">Add</button>
            </span>
            </div>
            <span class="help-block text-danger text-error hidden"></span>
        </div>

        <div class="text-align-center mt20">
            <button class="btn btn-plain js-btn-close" data-popup-close="#popup-activity-keyword-blacklist">Close</button>
        </div>
    </form>
</div>




{{-- username --}}
<div id="popup-activity-username-blacklist" class="popup">
    <h3>Add Blacklist Username</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-username-blacklist"></a>
    <form action="{{ route('admin.user.usernameblacklist.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb20">
            <div class="input-group input-group-with-gap">
                <input type="text" class="form-control input-icon" name="name" placeholder="Username" autofocus/>
                @if(getSession('error'))
                 <span class="text-danger">{!! getSession('error') !!}</span>
                @endif
                <span class="input-group-btn">
                <button class="btn btn-plain btn-success" type="submit">Add</button>
            </span>
            </div>
            <span class="help-block text-danger text-error hidden"></span>
        </div>

        <div class="text-align-center mt20">
            <button class="btn btn-plain js-btn-close" data-popup-close="#popup-activity-username-blacklist">Close</button>
        </div>
    </form>
</div>


@if(getSession('open') == 'blacklist' &&  getSession('error'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('[data-popup-open="#popup-activity-username-blacklist"]').trigger('click')
    })
</script>
@endif



<div id="popup-activity-keywords-blacklist" class="popup">
    <h3>Add Keywords</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-keywords-blacklist" ></a>

    <form action="{{ route('admin.user.keywordblacklist.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="color-gray mb10">
            Add multiple keywords at the same time by using new line as delimiter. You also can use * symbol in your keywords to match any word or part of word, or nothing. For example: "nude*" — will match all words that start with "nude".
        </div>
    
        <div class="alerts">
            <div class="alert alert-danger alert-error" data-ui="txt-error"></div>
            <div class="alert alert-success" data-ui="txt-status"></div>
        </div>
    
        <div class="mb10">
            <textarea class="form-control js-inp-keywords" rows="4" placeholder="Keywords" name="keyword" autofocus></textarea>
        </div>
    
        <div class="text-align-center mt20">
            <button class="btn btn-plain btn-success">Add</button>
        </div>
    </form>
</div>


<div id="popup-activity-comments" class="popup">
           
    <h3>Add Comments</h3>
        <a href="#" class="btn-close-x" data-popup-close="#popup-activity-comments"></a>
    
        <form action="{{ route('admin.user.comment.add') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="color-gray mb10">
                Add multiple comments at the same time by using new line as delimiter. You also can use {spintax|spinning} format in your comments.
            </div>
    
            <div class="mb10">
                <textarea class="form-control" name="comment" rows="4" placeholder="Comments" autofocus></textarea>
            </div>
           
    
            <div class="text-align-center mt20">
                <button class="btn btn-plain btn-success" type="submi">Add</button>
            </div>
        </form>
</div>






<div id="popup-time" class="popup popup-slider">
    <h3>How Time Works</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-time"></a>

    <div id="slider-time" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-time-v=203.png') }}" srcset="/img/slide-time-2x.png?v=203 2x" />
                <h4>Activity time</h4>
                <div class="slide-text">
                    <p>
                        Time is counting down only when your activity is started and you can use it whenever you want.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-timeover-v=203.png') }}" srcset="/img/slide-timeover-2x.png?v=203 2x" />
                <h4>If time is over</h4>
                <div class="slide-text">
                    <p>
                        You need to purchase additional time if you wish to continue using our service. Feel free to add some time even if it isn't over yet.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('/img/slide-packages-v=203.png') }}" srcset="/img/slide-packages-2x.png?v=203 2x" />
                <h4>Time packages</h4>
                <div class="slide-text">
                    <p>
                        You can select the time package that best suits your needs.
                    </p>
                    <div class="text-align-center">
                        <button class="btn btn-plain" data-popup-close="#popup-time">Got it</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div id="popup-activity-error-help" class="popup">
    <h3>Activity Error Help</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-error-help"></a>
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
            <a href="#" class="link-ajax" data-popup-open="#popup-support">contact&nbsp;us</a>.
        </p>
    </div>
    <div class="text-align-center">
        <button class="btn btn-plain" data-popup-close="#popup-activity-error-help">Close</button>
    </div>
</div>

<div id="popup-activity-schedule" class="popup" data-popup-overlay="true">
    <h3>Schedule</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-schedule"></a>
    <div class="color-gray mt20">
        <span class="mr10">Select hours when your activity should be active:</span>
        <a href="#" class="link-ajax mr10 js-btn-select-all">All</a>
        <a href="#" class="link-ajax mr10 js-btn-select-none">None</a>
        <a href="#" class="link-ajax js-btn-select-day">Day</a>
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






<div id="popup-activity-usernames" class="popup" data-popup-overlay="true">
    <h3>Add Usernames</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-usernames"></a>

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






<div id="popup-start-guide" class="popup popup-slider">
    <h3>Quick Start Guide</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-start-guide"></a>

    <div id="slider-start-guide" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-actions-v=203.png') }}"  />
                <h4>Recommended actions</h4>
                <div class="slide-text">
                    <p>
                        Do not use all of the actions at the same time as a beginner. It is safer to use only the Like action on Slow speed for your first few days on Instagress.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-speed-v=203.png') }}"/>
                <h4>Recommended speed</h4>
                <div class="slide-text">
                    <p>
                        Start using Instagress on the Slow speed to ensure your account is safe. You can increase the speed to Normal or Fast after a few days of using Instagress.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-schedule-v=203.png') }}"/>
                <h4>Scheduling your activity</h4>
                <div class="slide-text">
                    <p>
                        We recommend that you schedule only 6&nbsp;hours per day with the Scheduling feature as a beginner. Be sure to randomize the time gaps each day so your activity looks natural.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-settings-v=203.png') }}" />
                <h4>Adjust your settings</h4>
                <div class="slide-text">
                    <p>
                        Instagress offers a wide variety of activity settings for the most effective interaction with your target audience.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-content-v=203.png') }}" />
                <h4>Instagram content</h4>
                <div class="slide-text">
                    <p>
                        It's important that your Instagram account doesn't look fake or spammy. It is better to have an actively maintained account with at least 15&nbsp;photos/videos posted.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-information-v=203.png') }}" />
                <h4>Important information</h4>
                <div class="slide-text">
                    <p>
                        Feel free to post pictures when Instagress in started but make sure you don't Like, Comment, Follow, or Unfollow manually. Manual activity can lead to password resets.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/slide-start-v=203.png') }}"  />
                <h4>Now you are ready!</h4>
                <div class="slide-text">
                    <p>
                        It's time to customize your settings and start your activity.
                    </p>
                    <div class="text-align-center">
                        <button class="btn btn-plain" data-popup-close="#popup-start-guide">Let's go</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>



<div id="popup-account-email" class="popup"  @if(\Session::has('login.error'))  style="position: absolute; display: block; visibility: visible; z-index: 1001; left: 213px; top: 164.5px;" @endif>
    <h3>Change User Detail</h3>
    <a href="#" class="btn-close-x" data-popup-close="
    #popup-account-email"></a>
    <form action="{{ route('admin.user.change') }}" method="post">
      @csrf
    <input type="hidden" name="id" value="{{ $user->id }}" >

        <div class="form-group field-wrap" data-field="email">
            <div class="col-sm-12">
                <div class="form-group mb-20">
                <input type="email" name="email" class="form-control input-icon" placeholder="Email" value="{{ $user->email }}" />
                @error('email')
                <span class="help-block text-danger text-error ">{{ $message }}</span>
                @enderror
                </div>  
                <div class="form-group mb-20">
                    <input type="text" name="name" class="form-control input-icon" placeholder="Username"  value="{{ $user->name }}"/>
                    @error('name')
                    <span class="help-block text-danger text-error ">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-20">
                    <input type="password" name="password" class="form-control input-icon " placeholder="Password" />
                    @error('password')
                    <span class="help-block text-danger text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-20">
                    <input type="password" name="password_confirmation" class="form-control input-icon" placeholder="Password Confirmation" value="" />
                    <span class="help-block text-danger text-error "></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-plain btn-success" data-loading-text="Set up...">Set</button>
            </div>
        </div>
    </form>
</div>