<style>
    .todo-count-form {
        width: 100px !important;
    }
    .todo-label.w-100 {
        width: 170px !important;
    }
</style>

<div class=navbar-username>
   <div class=container>
       <div class=username-cont>
           <a href="#" data-popup-open="#popup-account-email" class=username>
           {{ $user->name }}
            <div class="avatar js-avatar">
               <img src="{{ $user->profile }}" alt="{{ $user->name }}">
            </div>

         </a>

       </div>
       <div class="username-menu">
           <ul class="username-menu-actions">
               <li class="hidden-xs">
                   <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to dashboard">
                     <a href="https://www.instagram.com/{{ $user->name }}" class="menu-icons menu-icon-dashboard"></a>
                   </div>
               </li>

               <li class="hidden-xs">
                   <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Reconnect">
                       <a href="#" class="menu-icons menu-icon-reconnect" data-ui="btn-reauth" data-username="fergata.as"></a>
                   </div>
               </li>
               <li class="hidden-xs">
                   <div data-toggle="tooltip" data-placement="top" title="" data-original-title="More">
                       <a href="#" class="menu-icons menu-icon-more" data-toggle="dropdown"></a>
                       <ul class="dropdown-menu sf-hidden">
                           <li>

                           </li>
                           <li class="divider"></li>

                           <li>

                           </li>
                           <li class="divider"></li>
                           <li>

                           </li>

                           <li>

                           </li>

                       </ul>
                   </div>
               </li>
           </ul>
       </div>
       <a href=# class="btn-username-menu-pages sf-hidden" data-ui-menu-toggle=navbar-username-menu-pages></a>
       <div class="navbar-mobile-menu navbar-mobile-username-menu sf-hidden" data-ui=navbar-username-menu-pages>
           <ul>
               <li class=active>
                   <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.detail', $user->id) : route('activity.index') }}">
               Activity
               </a>
               </li>
               <li>
                   <a href="">
               Log
               </a>
               </li>
               <li>
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
               <li class=active>
                   <a href="{{  Auth::user()->hasRole('admin')  ? route('admin.user.detail', $user->id) : route('activity.index') }}">
               Activity
               </a>
               </li>
               <li>
                   <a href="">
               Log
               </a>
               </li>
               <li>
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
<div class="sidebar-whats-new sf-hidden">
   <div class=whats-new-shadow></div>
   <div class=whats-new-head>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
   <div class=whats-new-unit>
   </div>
</div>
<div id=popup-time-auto-top-up class="popup sf-hidden">
   <h3>Time Auto Top-Up </h3>
   <a href=# class=btn-close-x data-popup-close=#popup-time-auto-top-up></a>
   <div class=mb20>
       If you manage multiple accounts and usually transfer time to them to keep them working, then you definitely need to take a look at this new feature! You can set up Auto Top-Up for your Dashboard account. Auto Top-Up automatically transfers Time from your Dashboard when the time on any of your started accounts is close to one hour left.
   </div>

</div>
<div id="popup-time-transfer" class="popup sf-hidden">
   <h3>Time Transfer </h3>
   <a href=# class=btn-close-x data-popup-close=#popup-time-transfer></a>
   <div class=mb20>
       Now you can easily transfer your purchased time between your Instagress Dashboard and your connected accounts. Note: You can only transfer time that was purchased or transferred by your Instagress Dashboard account, as always. Hint: If you manage multiple accounts and use one of them as a storage for your purchased time, now it is much more convenient to transfer all of that time to your main Dashboard account.
   </div>
</div>


<section class="activity worker js-user" data-user-id=5d23d9566ca74c76cf5d26da data-username=fergata.as>
   <div class=activity-head>
       <div class=container>
           <h1>Activity</h1>
           <div id=settings-apply class="activity-settings-apply mb10 js-hidden sf-hidden">
               <span class="semibold fs-medium">
         You updated your settings. To apply the new settings,
         you need to restart (stop + start) your Activity.
         </span>
           </div>
           <div class="alert alert-info worker-start-info hidden sf-hidden">
               <a href=# class=close data-dismiss=alert>×</a>
               <strong>Important information</strong>
               <br>
               <br> When your Activity is started we strongly recommend not to do any manual activity on Instagram using a mobile device or third-party websites.
               <br> Also, don't use other automation services simultaneously with Instagress — it may lead to errors, password reset, or even blocking of your account.
           </div>
           <div class="alert alert-warning worker-reconnect-required hidden" style=display:none>
               We detected that some of the actions may not work properly on this account and
               <a href=# class=link-ajax data-ui=btn-reauth data-username=fergata.as>reconnect</a> is required.
           </div>
           <div class="alert alert-success worker-stop-reason hidden" data-hidden=true data-alert-class=alert-success style=display:none>
               Your activity automatically stopped:
               <span class=stop-reason></span>
               <span class="stop-error-help hidden" style=display:none>
         ()
         </span>
           </div>
           <div class=row>
               <div class="todo-controls col-sm-6 col-sm-push-6 col-md-4 col-md-push-4">
                   <div class=title-block>
                       Activity Actions
                       <span class=help-tip title data-content="
                  Our service will search users based on your selected
                  targeting sources, filters, blacklists and other settings,
                  and will interact with found users in a smart manner using
                  selected Activity Actions.
                  " data-original-title="Activity Actions">?</span>
                   </div>
                   <div class=todo-control data-field=view>
                       <input type=checkbox name=view id=inpView class=chk-custom data-checked="{{ $user->activity_views }}">
                       <label class="chk-custom todo-toggle toggle-views" for=inpView></label>
                       <label class=todo-label for=inpView>
                           Views
                           <span class=help-tip title data-content="
                  Turn this switch on to interact with the users by viewing their stories.
                  " data-original-title=Views>?</span>
                           <span class="help-tip help-tip-attention worker-view-errors hidden sf-hidden" title data-content="
                  The system identified that your Story Views actions may be temporarily blocked.<br/><br/>
                  To help, we've automatically placed these actions on pause for up to 30 minutes.<br/><br/>
                  If it doesn't help, we recommend you to reconnect this account with <b>Force connection reset</b>
                  or to temporarily turn these actions off for about 1-2 days.
                  " data-original-title=Views></span>
                       </label>
                       @if(Auth::user()->hasRole('admin'))
                       <input type="number" class="todo-count-form form-control pull-right" name="views_value" value="{{ $user->activity_views_value }}"/>
                       @else
                       <span class="todo-count count-views">{{ $user->activity_views_value }}</span>
                       @endif
                       
                   </div>
                   <div class=todo-control data-field=like>
                       <input type=checkbox name=like id=inpLike class=chk-custom data-checked="{{ $user->activity_likes }}">
                       <label class="chk-custom todo-toggle toggle-likes" for=inpLike></label>
                       <label class=todo-label for=inpLike>
                           Likes
                           <span class=help-tip title data-content="
                  Turn this switch on to interact with the users by liking their posts.
                  " data-original-title=Likes>?</span>
                           <span class="help-tip help-tip-attention worker-like-errors hidden sf-hidden" title data-content="
                  The system identified that your <b>Like actions</b> may be temporarily <b>blocked</b>.<br/><br/>
                  To help, we've automatically placed these actions on pause for up to 24 hours.<br/><br/>
                  If it doesn't help, we recommend you to turn these actions off for about 2-3 days.<br/><br/>
                  <b>Important:</b> If Likes are the only actions that your account does, your Activity Time will not
                  be deducted while they are paused despite the activity indicator is still spinning.
                  " data-original-title="Likes on pause"></span>
                       </label>
                       @if(Auth::user()->hasRole('admin'))
                       <input type="number" class="todo-count-form form-control pull-right" name="like_value" value="{{ $user->activity_likes_value }}" />
                       @else
                       <span class="todo-count count-likes">{{ $user->activity_likes_value }}</span>
                       @endif
                   </div>
                   <div class=todo-control data-field=comment>
                       <input type=checkbox name=comment id=inpComment class=chk-custom data-checked="{{ $user->activity_comments }}">
                       <label class="chk-custom todo-toggle toggle-comments" for=inpComment></label>
                       <label class=todo-label for=inpComment>
                           Comments
                           <span class=help-tip title data-content="
                  Turn this switch on to interact with the users by commenting on their posts.
                  " data-original-title=Comments>?</span>
                           <span class="help-tip help-tip-attention worker-comment-errors hidden sf-hidden" title data-content="
                  The system identified that your <b>Comment actions</b> may be temporarily <b>blocked</b>.<br/><br/>
                  To help, we've automatically placed these actions on pause for up to 24 hours.<br/><br/>
                  If it doesn't help, we recommend you to turn these actions off for about 2-3 days.<br/><br/>
                  <b>Important:</b> If Comments are the only actions that your account does, your Activity Time will not
                  be deducted while they are paused despite the activity indicator is still spinning.
                  " data-original-title="Comments on pause"></span>
                       </label>
                       @if(Auth::user()->hasRole('admin'))
                       <input type="number" class="todo-count-form form-control pull-right" name="comment_value" value="{{ $user->activity_comments_value }}"/>
                       @else
                       <span class="todo-count count-comments">{{ $user->activity_comments_value }}</span>
                       @endif
                   </div>
                   <div class=todo-control data-field=follow>
                       <input type=checkbox name=follow id=inpFollow class=chk-custom data-checked="{{ $user->activity_follows }}">
                       <label class="chk-custom todo-toggle toggle-follows" for=inpFollow></label>
                       <label class=todo-label for=inpFollow>
                           Follows
                           <span class=help-tip title data-content="
                  Turn this switch on to interact with the users by following them.
                  " data-original-title=Follows>?</span>
                           <span class="help-tip help-tip-attention worker-follow-errors hidden sf-hidden" title data-content="
                  The system identified that your <b>Follow actions</b> may be temporarily <b>blocked</b>.<br/><br/>
                  To help, we've automatically placed these actions on pause for up to 24 hours.<br/><br/>
                  If it doesn't help, we recommend you to turn these actions off for about 2-3 days.<br/><br/>
                  <b>Important:</b> If Follows are the only actions that your account does, your Activity Time will not
                  be deducted while they are paused despite the activity indicator is still spinning.
                  " data-original-title="Follows on pause"></span>
                       </label>
                       @if(Auth::user()->hasRole('admin'))
                       <input type="number" class="todo-count-form form-control pull-right" name="follows_value" value="{{ $user->activity_follows_value }}"/>
                       @else
                       <span class="todo-count count-follows">{{ $user->activity_follows_value }}</span>
                       @endif
                   </div>
                   <div class=todo-control data-field=unfollow>
                       <input type=checkbox name=unfollow id=inpUnfollow class=chk-custom data-checked="{{ $user->activity_unfollows }}">
                       <label class="chk-custom todo-toggle toggle-unfollows" for=inpUnfollow></label>
                       <label class=todo-label for=inpUnfollow>
                           Unfollows
                           <span class=help-tip title data-content="
                  Turn this switch on to unfollow previously followed users
                  based on your selected unfollow source in unfollow settings.
                  " data-original-title=Unfollows>?</span>
                           <span class="help-tip help-tip-attention worker-unfollow-errors hidden sf-hidden" title data-content="
                  The system identified that your <b>Unfollow actions</b> may be temporarily <b>blocked</b>.<br/><br/>
                  To help, we've automatically placed these actions on pause for up to 24 hours.<br/><br/>
                  If it doesn't help, we recommend you to turn these actions off for about 2-3 days.<br/><br/>
                  <b>Important:</b> If Unfollows are the only actions that your account does, your Activity Time will not
                  be deducted while they are paused despite the activity indicator is still spinning.
                  " data-original-title="Unfollows on pause"></span>
                       </label>
                       @if(Auth::user()->hasRole('admin'))
                       <input type="number" class="todo-count-form form-control pull-right" name="unfollows_value" value="{{ $user->activity_unfollows_value }}"/>
                       @else
                       <span class="todo-count count-unfollows">{{ $user->activity_unfollows_value }}</span>
                       @endif
                   </div>
                   <div class="todo-control">
                     <label class="todo-label" for="inpGnfollow">
                         Follower Gained
                     </label>
                     <input type="number" class="todo-count-form form-control pull-right" name="follower_gained_value" value="{{ $user->follower_gained }}"/>
                 </div>
               </div>
               <div class="col-sm-6 col-sm-pull-6 col-md-4 col-md-pull-4 start-stop-block">
                   <div class="resource resource-time ok">
                       <span class=label-ok>
               Activity Time
               <span class=help-tip title data-content="
                  Activity Time is counting down only when your
                  Activity is started. You can use your Activity Time whenever
                  you want. To get more info, please refer our Help Center.
                  " data-original-title="Remaining Activity Time">?</span>
                       </span>
                       <span class="label-over sf-hidden">
               Activity Time is over
               <span class=help-tip title data-content='You can start your activity again in less than
                  a minute. Simply choose a package from the list on the right side
                  and press the "Buy" button.' data-original-title="Activity Time is over">?</span>
                       </span>
                       <div class="counter">{{ $user->timeRemaining }}</div>
                   </div>
                   <div class=mt10>
                       <a href=# class="link-ajax mr15" data-popup-open=#popup-time>How time works</a>
                       <button class="btn btn-plain btn-time-transfer-sm" data-ui=btn-time-transfer data-transfer-from=dashboard data-transfer-to=5d23d9566ca74c76cf5d26da data-toggle=tooltip data-placement=top title data-original-title="Transfer time">
                           <img src="{{ asset('img/spinner.png') }}">
                       </button>
                   </div>
                   <div class="row mt10">
                       <div class="col-xs-4 color-gray pr0">Status</div>
                       <div class=col-xs-8>
                           <span class=status>{{ $user->status }}</span> @if($user->status == 'started')
                           <i class="status-icon status-started fa-spin" data-toggle=tooltip title data-original-title="Activity is started<br/>Time is counting down" style=display:inline-block></i> @endif
                       </div>
                   </div>
                   @if($user->status == 'started')
                   <div class="row label-time-start">
                       <div class="col-xs-4 color-gray pr0">Started on</div>
                       <div class="col-xs-8 time-start">{{ \Carbon\Carbon::parse($user->start_time)->format('d M, Y') }}</div>
                   </div>
                   @else
                   <div class="row label-time-stop">
                       <div class="col-xs-4 color-gray pr0">Stopped on</div>
                       <div class="col-xs-8 time-stop">{{ \Carbon\Carbon::parse($user->stop_time)->format('d M, Y') }}</div>
                   </div>

                   @endif
                   <div class="start-stop-cont" style="padding-top:40px !important">
                       @if($user->status == 'stopped')
                       <a href="{{ route('admin.activity.start', $user->id) }}" class="btn btn-plain btn-big btn-start-stop btn-danger">Start</a> @else
                       <a href="{{ route('admin.activity.stop', $user->id) }}" class="btn btn-plain btn-big btn-start-stop btn-secondary">Stop</a> @endif
                   </div>
                   <div class=mt10>
                       <a href=# class=link-ajax data-popup-open=#popup-start-guide>Quick start guide</a>
                   </div>
               </div>
               <div class="col-sm-12 col-md-4">
                   <div class="trydemo-cont hidden" style=display:none>
                       <div class=title-block>Try our service</div>
                       <div class=trydemo>
                       </div>
                       <div class=mt10>
                       </div>
                   </div>
                   <div class=payment-cont>
                       <div class=title-block>
                           Purchase time with <b>5%</b> discount <span class=help-tip title data-content="Discount based on overall spending of your account." data-original-title="Cumulative Discount">?</span>
                       </div>
                       <div class=payment-slider-cont>
                           <div class=payment-slider style=width:1230px>
                               <div class=payment-item style=width:114px>
                                   <span class=num>3</span>
                                   <span class=units>days</span>
                                   <span class=price>
                        $1.89
                        </span>
                                   <span class=savings>
                        $0.63
                        per day
                        </span>
                                   <a href="" class="btn btn-plain btn-big btn-success">Buy</a>
                               </div>
                               <div class=payment-item style=width:114px>
                                   <span class=num>10</span>
                                   <span class=units>days</span>
                                   <span class=price>
                        $4.74
                        </span>
                                   <span class=savings>
                        $0.48
                        per day
                        </span>
                                   <a href="" class="btn btn-plain btn-big btn-success">Buy</a>
                               </div>
                               <div class=payment-item style=width:114px>
                                   <span class=num>30</span>
                                   <span class=units>days</span>
                                   <span class=price>
                        $9.49
                        </span>
                                   <span class=savings>
                        $0.31
                        per day
                        </span>
                                   <a href="" class="btn btn-plain btn-big btn-success">Buy</a>
                               </div>
                               <div class=payment-item style=width:114px>
                                   <span class=num>90</span>
                                   <span class=units>days</span>
                                   <span class=price>
                        $23.74
                        </span>
                                   <span class=savings>
                        $0.27
                        per day
                        </span>
                                   <a href="" class="btn btn-plain btn-big btn-success">Buy</a>
                               </div>
                               <div class=payment-item style=width:114px>
                                   <span class=num>180</span>
                                   <span class=units>days</span>
                                   <span class=price>
                        $42.74
                        </span>
                                   <span class=savings>
                        $0.24
                        per day
                        </span>
                                   <a href="" class="btn btn-plain btn-big btn-success">Buy</a>
                               </div>
                               <div class=payment-item style=width:114px>
                                   <span class=num>360</span>
                                   <span class=units>days</span>
                                   <span class=price>
                        $75.99
                        </span>
                                   <span class=savings>
                        $0.21
                        per day
                        </span>
                                   <a href="" class="btn btn-plain btn-big btn-success">Buy</a>
                               </div>
                               <div class="payment-item payment-item-wide js-wgt-tpkg-custom" style=width:360px>
                                   <a href=# class="btn-num btn-num-minus disabled js-btn-mns"></a>
                                   <a href=# class="btn-num btn-num-plus js-btn-pls"></a>
                                   <div>
                                       <input type=text class="num js-inp-days" value=1000 min=1000 max=10000 maxlength=5 data-priceday=0.19>
                                   </div>
                                   <span class=units>days</span>
                                   <span class=price>
                        $<span class=js-txt-price>190</span>.<span class=js-txt-price-cnt>00</span>
                                   </span>
                                   <span class=savings>
                        $0.19
                        per day
                        </span>
                                   <a href="" class="btn btn-plain btn-big btn-success js-btn-buy" data-order-url=/order/new/5d23d9566ca74c76cf5d26da>Buy package</a>
                               </div>
                           </div>
                       </div>
                       <div class=mt10>
                           <a href=# class="link-ajax btn-normal-packages hidden sf-hidden">Normal time packages</a>
                           <a href=# class="link-ajax btn-extra-packages">Extra time packages</a>
                           <a href=# class="link-ajax btn-custom-package hidden sf-hidden">Custom time package</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>