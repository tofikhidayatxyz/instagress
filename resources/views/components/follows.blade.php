<a href="demo.html#settings-follow" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-follow">
    <div class="general-icon general-icon-follow"></div>
    <span>
    Follow
    <span class="label label-danger">New!</span>
    </span>
</a>
<div class="activity-settings-cont collapse" id="settings-follow">
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="followSource">
            <div class="nice-block">
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="selFollowSource">Follow source</label>
                <span class="help-tip" title="Follow source" data-content="You can choose between selected Media source
                    or followers/followings of specified usernames.">?</span>

                <select name="follow_source" id="selFollowSource" class="form-control pull-right" data-selected="media">
                    <option value="media" {{ $user->follow_source == 'media' ? 'selected' : '' }}>Media</option>
                    <option value="followers" {{ $user->follow_source == 'followers' ? 'selected' : '' }}>Followers of usernames</option>
                    <option value="followings" {{ $user->follow_source == 'followings' ? 'selected' : '' }}>Followings of usernames</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="followCycle">
            <div class="nice-block">
                <div class="new-badge">New!</div>
                <label class="control-label" for="inpFollowCycle">Follow cycle</label>
                <span class="help-tip" title="Follow cycle" data-content="
                      Use this setting to set up an amount of Follow actions to do before
                      switching to Unfollow cycle when using Follow and Unfollow actions
                      at the same time. Your activity will also switch to Unfollow cycle
                      if there is no more space to follow.<br/><br/>
                      Allowed values: 1-7500.<br/>
                      Recommended values: 500-2500.
                  ">?</span>

            <input name="follow_cycle" id="inpFollowCycle" class="form-control pull-right" type="number" min="1" max="7500" maxlength="4" placeholder="" value="{{ $user->follow_cycle }}" data-default="1000" />
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="followDontSpam">
            <div class="nice-block">
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="followDontSpam">Don't follow same users</label>
                <span class="help-tip" title="Don't follow same users" data-content="When checking this box you will not follow
                    the same users twice after you unfollow them.">?</span>

                <span class="pull-right">
                <input name="dont_follow_same_user" id="followDontSpam" class="chk-custom" type="checkbox"
                data-checked="{{ $user->dont_follow_same_user }}"/>
                <label class="chk-custom" for="followDontSpam"></label>
            </span>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="followNotPrivate">
            <div class="nice-block">
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="followNotPrivate">Don't follow private users</label>
                <span class="help-tip" title="Don't follow private users" data-content="When checking this box you will not follow
                    private users.">?</span>

                <span class="pull-right">
                <input name="dont_follow_private_user" id="followNotPrivate" class="chk-custom" type="checkbox"
                       data-checked="{{ $user->dont_follow_private_user }}"/>
                <label class="chk-custom" for="followNotPrivate"></label>
            </span>
            </div>
        </div>
    </div>
</div>

