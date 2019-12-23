<a href="demo.html#settings-unfollow" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-unfollow">
    <div class="general-icon general-icon-unfollow"></div>
    <span>
    Unfollow
    <span class="label label-danger">New!</span>
    </span>
</a>
<div class="activity-settings-cont collapse" id="settings-unfollow">
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="unfollowSource">
            <div class="nice-block">
                <label class="control-label" for="selUnfollowSource">Unfollow source</label>
                <span class="help-tip" title="Unfollow source" data-content="
                Which users to unfollow?<br/><br/>
                <b>Instagress</b> — select this option if you want to unfollow only users that
                were followed by our service.<br/>This option should be used in most cases,
                especially if you use Follow and Unfollow actions at the same time.<br/><br/>
                <b>All</b> — select this option if you want to unfollow all users that
                you follow.
              ">?</span>

                <select name="unfollowSource" id="selUnfollowSource" class="form-control pull-right" data-selected="db">
                    <option value="instagress" {{ $user->unfollow_source == 'instagress' ? 'selected' : '' }}>Instagress</option>
                    <option value="all" {{ $user->unfollow_source == 'all' ? 'selected' : '' }}>All</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="unfollowCycle">
            <div class="nice-block">
                <div class="new-badge">New!</div>
                <label class="control-label" for="inpUnfollowCycle">Unfollow cycle</label>
                <span class="help-tip" title="Unfollow cycle" data-content="
                      Use this setting to set up an amount of Unfollow actions to do before
                      switching to Follow cycle when using Follow and Unfollow actions
                      at the same time. Your activity will also switch to Follow cycle
                      if there are no more users to unfollow.<br/><br/>
                      Allowed values: 1-7500.<br/>
                      Recommended values: 500-2500.
                  ">?</span>

                <input name="unfollowCycle" id="inpUnfollowCycle" class="form-control pull-right" type="number" min="1" max="7500" maxlength="4" placeholder="" value="{{ $user->unfollow_cycle }}" data-default="1000" />
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="unfollowSmart">
            <div class="nice-block">
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="unfollowSmart">Unfollow who don't follow me</label>
                <span class="help-tip" title="Unfollow who don't follow me" data-content="When checking this box you will unfollow only users
                who don't follow you back. It may take more time for our service
                to find them, depending on the number of users you follow
                and selected unfollow source.">?</span>

                <span class="pull-right">
            <input name="unfollow_who_dont_follow_me" id="unfollowSmart" class="chk-custom" type="checkbox"
                   data-checked="{{ $user->unfollow_who_dont_follow_me }}/>
            <label class="chk-custom" for="unfollowSmart"></label>
        </span>
            </div>
        </div>
    </div>
</div>