<a href="demo.html#settings-autostop" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-autostop">
    <div class="general-icon general-icon-autostop"></div>
    <span>
    Auto-stop
    <!--<span class="label label-danger">New!</span>-->
    </span>
</a>
<div class="activity-settings-cont collapse" id="settings-autostop">
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="likeLimit">
            <div class="nice-block">
                <label class="control-label" for="inpLikeLimit">Likes counter</label>
                <span class="help-tip" title="Likes counter" data-content="When this number of likes will be done your activity
                    will be stopped automatically. Set to zero to disable the limit.">?</span>

            <input name="like_counter" id="inpLikeLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->likes_counter }}" data-default="0" />
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="commentLimit">
            <div class="nice-block">
                <label class="control-label" for="inpCommentLimit">Comments counter</label>
                <span class="help-tip" title="Comments counter" data-content="When this number of comments will be done your activity
                    will be stopped automatically. Set to zero to disable the limit.">?</span>

                <input name="comments_counter" id="inpCommentLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->comments_counter }}" data-default="0" />
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="followLimit">
            <div class="nice-block">
                <label class="control-label" for="inpFollowLimit">Follows counter</label>
                <span class="help-tip" title="Follows counter" data-content="When this number of follows will be done your activity
                    will be stopped automatically. Set to zero to disable the limit.">?</span>

                <input name="follows_counter" id="inpFollowLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->follows_counter }}" data-default="0" />
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="unfollowLimit">
            <div class="nice-block">
                <label class="control-label" for="inpUnfollowLimit">Unfollows counter</label>
                <span class="help-tip" title="Unfollows counter" data-content="When this number of unfollows will be done your activity
                    will be stopped automatically. Set to zero to disable the limit.">?</span>

                <input name="unfollows_counter" id="inpUnfollowLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->unfollows_counter }}" data-default="0" />
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="timeLimit">
            <div class="nice-block">
                <label class="control-label" for="inpTimeLimit">Timer</label>
                <span class="help-tip" title="Timer" data-content="Format: HH:MM. For example, if you set it to <b>01:00</b>, then your activity
                    will stop automatically after one hour. If you leave it empty, then
                    activity will work infinite or while Instagram limits for your
                    account not will be reached.">?</span>

                <input name="timer" id="inpTimeLimit" class="form-control pull-right" type="time" maxlength="5" placeholder="00:00" value="{{ $user->timer }}" />
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="downtimeLimit">
            <div class="nice-block">
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="selDowntimeLimit">Stop if no activity</label>
                <span class="help-tip" title="Stop if no activity" data-content="This function will help you to stop your activity automatically
                              if there are no Likes, Comments, Follows and Unfollows for specified period
                              of time. For example, your activity will be automatically stopped if there
                              are no media/users to interact in your selected media source, if your
                              filtration settings are very strict or if there is no connection to
                              Instagram API.">?</span>

                <select name="stop_if_no_activity" id="selDowntimeLimit" class="form-control pull-right" data-selected="3h">
                    <option value="1h" {{  $user->stop_if_no_activity == '1h' ? 'selected' : '' }}>1 Hour</option>
                    <option value="3h" {{  $user->stop_if_no_activity == '2h' ? 'selected' : '' }}>3 Hours</option>
                    <option value="12h" {{  $user->stop_if_no_activity == '12h' ? 'selected' : '' }}>12 Hours</option>
                    <option value="1d" {{  $user->stop_if_no_activity == '1d' ? 'selected' : '' }}>1 Day</option>
                    <option value="3d" {{  $user->stop_if_no_activity == '3h' ? 'selected' : '' }}>3 Days (too long)</option>
                    <option value="1w" {{  $user->stop_if_no_activity == '1w' ? 'selected' : '' }}>1 Week (very long, be careful)</option>
                </select>
            </div>
        </div>
    </div>
</div>