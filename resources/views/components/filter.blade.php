
<a href="demo.html#settings-filters" class="activity-settings-cat" data-toggle="collapse" aria-expanded="false" aria-controls="settings-filters">
    <div class="general-icon general-icon-filters"></div>
    <span>
        Advanced Filters
        <!--<span class="label label-danger">New!</span>-->
    </span>
</a>

<div class="activity-settings-cont collapse" id="settings-filters" style="" aria-expanded="true">
    <div class="alert alert-warning">
        <b>Note:</b> Some of the filters are currently disabled while we're
        reworking them. New filters like Language filter are coming in the
        nearest days.
    </div>
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="mediaAge">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="selMediaAge">Media age</label>
                <span class="help-tip" title="" data-content="This setting will help you to choose an age
                        of media you want to interact with. From the newest one to the oldest.<br/><br/>
                        For example: select <b>1&nbsp;Day</b> if you want to interact only
                        with media that not older than one day.<br/><br/>
                        <b>Newest</b> media age was previously known as <b>New media only</b>." data-original-title="Media age">?</span>

                <select name="media_age" id="selMediaAge" class="form-control pull-right" data-selected="1M">
                    <option value="new" {{ $user->media_age == 'new' ? 'selected' : '' }} >Newest</option>
                    <option value="1h" {{ $user->media_age == '1h' ? 'selected' : '' }}>1 Hour</option>
                    <option value="12h" {{ $user->media_age == '12h' ? 'selected' : '' }}>12 Hours</option>
                    <option value="1d" {{ $user->media_age == '1d' ? 'selected' : '' }}>1 Day</option>
                    <option value="3d" {{ $user->media_age == '3d' ? 'selected' : '' }}>3 Days</option>
                    <option value="1w" {{ $user->media_age == '1w' ? 'selected' : '' }}>1 Week</option>
                    <option value="2w" {{ $user->media_age == '2w' ? 'selected' : '' }}>2 Weeks</option>
                    <option value="1m" {{ $user->media_age == '1m' ? 'selected' : '' }}>1 Month</option>
                    <option value="any" {{ $user->media_age == 'any' ? 'selected' : '' }}>Any</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="mediaType">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="selMediaType">Media type</label>
                <span class="help-tip" title="" data-content="This setting lets you interact only with specific media type:
                        <b>Photos</b> or <b>Videos</b>.
                        Also, you can choose <b>Any</b> to interact with any media type." data-original-title="Media type">?</span>

                <select name="mediaType" id="selMediaType" class="form-control pull-right" data-selected="">
                    <option value="any" {{ $user->media_type == 'any' ? 'selected' : '' }}>Any</option>
                    <option value="image" {{ $user->media_type == 'image' ? 'selected' : '' }}>Photos</option>
                    <option value="video" {{ $user->media_type == 'video' ? 'selected' : '' }}>Videos</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-4 col-sm-6" data-field="minimumLikes">
            <div class="nice-block">
                <label class="control-label" for="inpMinLikes">Min. likes filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with media that have minimum selected amount of likes.<br/><br/>
                        Use it along with <b>Max. likes filter</b> to set desired range
                        of media popularity.<br/><br/>
                        Recommended value: 0.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Minimum likes filter">?</span>
                <!--
                <span class="help-tip help-tip-attention"
                      title="Attention"
                      data-content="Attention Attention"></span>
                -->

                <input name="minimumLikes" id="inpMinLikes" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->min_likes_filter }}" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="maximumLikes">
            <div class="nice-block">
                <label class="control-label" for="inpMaxLikes">Max. likes filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with media that have maximum selected amount of likes.<br/><br/>
                        Use it along with <b>Min. likes filter</b> to set desired range
                        of media popularity.<br/><br/>
                        Recommended values: 50-100.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Maximum likes filter">?</span>

                <input name="maximumLikes" id="inpMaxLikes" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->max_likes_filter }}" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="minComments">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="inpMinComments">Min. comments filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with media that have minimum selected amount of comments.<br/><br/>
                        Use it along with <b>Max. comments filter</b> to set desired range
                        of media popularity.<br/><br/>
                        Recommended value: 0.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Minimum comments filter">?</span>

                <input name="minComments" id="inpMinComments" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->min_comments_filter }}" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="maxComments">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="inpMaxComments">Max. comments filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with media that have maximum selected amount of comments.<br/><br/>
                        Use it along with <b>Min. comments filter</b> to set desired range
                        of media popularity.<br/><br/>
                        Recommended values: 20-50.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Maximum comments filter">?</span>

                <input name="maxComments" id="inpMaxComments" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->max_comments_filter }}" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="userRelationFilter">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="userRelationFilter">User relation filter</label>
                <span class="help-tip" title="" data-content="
                          This filter will help you to exclude your own followers/followings
                          from Liking, Commenting and Following activity:<br/><br/>
                        <b>Off</b> — Filter is turned off.<br/><br/>
                        <b>Followers</b> — You will not interact with your followers and their media.<br/><br/>
                        <b>Followings</b> — You will not interact with your followings and their media.<br/><br/>
                        <b>Both</b> — You will not interact with your followers and followings and their media.
                      " data-original-title="User relation filter">?</span>

                <select name="userRelationFilter" id="userRelationFilter" class="form-control pull-right" data-selected="both">
                    <option value="off" {{ $user->use_relations_filter == 'off' ? 'selected' : '' }}>Off</option>
                    <option value="followers" {{ $user->use_relations_filter == 'followers' ? 'selected' : '' }}>Followers</option>
                    <option value="followings" {{ $user->use_relations_filter == 'followings' ? 'selected' : '' }}>Followings</option>
                    <option value="both" {{ $user->use_relations_filter == 'both' ? 'selected' : '' }}>Both</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="userProfileFilter">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="userProfileFilter">User profile filter</label>
                <span class="help-tip" title="" data-content="
                          This filter will help you to avoid inappropriate and unwanted users
                          and their media during your activity:<br/><br/>
                        <b>Off</b> — Filter is turned off.<br/><br/>
                        <b>Low</b> — Excludes users who have no avatar or have no posted media.<br/><br/>
                        <b>Medium</b> — Excludes users who have no avatar, have less than 10 posted
                        media or have no name in the profile.<br/><br/>
                        <b>High</b> — Excludes users who have no avatar, have less than 30 posted
                        media, have no name in the profile or have no bio.
                      " data-original-title="User profile filter">?</span>

                <select name="userProfileFilter" id="userProfileFilter" class="form-control pull-right" data-selected="fff">
                    <option value="of" {{ $user->use_profile_filter == 'off' ? 'selected' : '' }}>Off</option>
                    <option value="low" {{ $user->use_profile_filter == 'low' ? 'selected' : '' }}>Low</option>
                    <option value="medium" {{ $user->use_profile_filter == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="hight" {{ $user->use_profile_filter == 'hight' ? 'selected' : '' }}>High</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="minFollowers">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="inpMinFollowers">Min. followers filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with users that have minimum selected amount of followers.<br/><br/>
                        Use it along with <b>Max. followers filter</b> to set desired range
                        of users popularity.<br/><br/>
                        Recommended values: 0-50.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Minimum followers filter">?</span>

            <input name="minFollowers" id="inpMinFollowers" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->min_followers_filter }}" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="maxFollowers">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="inpMaxFollowers">Max. followers filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with users that have maximum selected amount of followers.<br/><br/>
                        Use it along with <b>Min. followers filter</b> to set desired range
                        of users popularity.<br/><br/>
                        Recommended values: 500-1000.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Maximum followers filter">?</span>

                <input name="maxFollowers" id="inpMaxFollowers" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="{{ $user->max_followers_filter }}" value="0" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="minFollowings">
            <div class="nice-block">
                <div class="sett-badges-cont">
                    <!--<span class="sett-badge sett-badge-new">New</span>-->
                </div>
                <label class="control-label" for="inpMinFollowings">Min. followings filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with users that have minimum selected amount of followings.<br/><br/>
                        Use it along with <b>Max. followings filter</b> to set desired range
                        of users popularity.<br/><br/>
                        Recommended values: 50-100.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Minimum followings filter">?</span>

                <input name="minFollowings" id="inpMinFollowings" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->min_followings_filter }}" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="maxFollowings">
            <div class="nice-block">
                <div class="sett-badges-cont">
                    <!--<span class="sett-badge sett-badge-new">New</span>-->
                </div>
                <label class="control-label" for="inpMaxFollowings">Max. followings filter</label>
                <span class="help-tip" title="" data-content="
                        Interact only with users that have maximum selected amount of followings.<br/><br/>
                        Use it along with <b>Min. followings filter</b> to set desired range
                        of users popularity.<br/><br/>
                        Recommended values: 300-500.<br/><br/>
                        Set to zero to disable this filter.
                      " data-original-title="Maximum followings filter">?</span>

                <input name="maxFollowings" id="inpMaxFollowings" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="{{ $user->max_followings_filter }}" data-default="0">
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="genderFilter">
            <div class="nice-block">
               
                <label class="control-label" for="genderFilter">Gender filter</label>
                <span class="help-tip" title="" data-content="
                        <b>Off</b> — Filter is turned off.<br/><br/>

                        <b>Female</b> — Interact only with users and their media
                        whose gender has been determined as female.<br/><br/>

                        <b>Male</b> — Interact only with users and their media
                        whose gender has been determined as male.<br/><br/>

                        <span class='color-blue'>INFO:</span> This filter analyzes full
                        names of the user profiles and cannot guarantee 100% accuracy.<br/><br/>

                        <span class='color-warning'>WARNING:</span> This filter can slow down
                        or completely stop your activity if the system will not be able
                        to find accounts based on the selected option.
                      " data-original-title="Gender filter">?</span>

                <select name="genderFilter" id="genderFilter" class="form-control pull-right" data-selected="">
                    <option value="off" {{ $user->gender_filter == 'off' ? 'selected' : '' }} >Off</option>
                    <option value="female" {{ $user->gender_filter == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="male" {{ $user->gender_filter == 'male' ? 'selected' : '' }}>Male</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="tagAndTag">
            <div class="nice-block">
                <label class="control-label" for="tagAndTag">Tag + Tag filter</label>
                <span class="help-tip" title="" data-content="
                          When using this filter, your activity will check all the media fetched
                          from <b>Tags</b> and will skip all items that don't have any other tags
                          from your <b>Tags</b> list.<br/><br/>

                        <span class='color-warning'>IMPORTANT:</span> To use this filter
                        you should enable <b>Tags</b> in the <b>Targeting</b> settings
                        and add at least 2 tags in the <b>Tags</b> list.<br/><br/>

                        <span class='color-danger'>CAUTION!</span> This filter can slow down
                        or completely stop your activity if combinations of tags will be
                        unpopular or unavailable.
                      " data-original-title="Tag + Tag filter">?</span>

                <span class="pull-right">
                <input name="tagAndTag" id="tagAndTag" class="chk-custom" type="checkbox" data-checked="{{  $user->tag_tag_filter }}">
                    <label class="chk-custom" for="tagAndTag"></label>
                </span>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="locationAndTag">
            <div class="nice-block">
                
                <label class="control-label" for="locationAndTag">Location + Tag filter</label>
                <span class="help-tip" title="" data-content="
                          When using this filter, your activity will check all the media fetched
                          from <b>Locations</b> and will skip all items that don't have any tags
                          from your <b>Tags</b> list.<br/><br/>

                        <span class='color-warning'>IMPORTANT:</span> To use this filter
                        you should enable <b>Locations</b> in the <b>Targeting</b> settings
                        and add at least 1 tag in the <b>Tags</b> list.<br/><br/>

                        <span class='color-danger'>CAUTION!</span> This filter can slow down
                        or completely stop your activity if combinations of tags will be
                        unpopular or unavailable.
                      " data-original-title="Location + Tag filter">?</span>

                <span class="pull-right">
                    <input name="locationAndTag" id="locationAndTag" class="chk-custom" type="checkbox" data-checked="{{  $user->location_tag_filter }}">
                    <label class="chk-custom" for="locationAndTag"></label>
                </span>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="usernameAndTag">
            <div class="nice-block">
              
                <label class="control-label" for="usernameAndTag">Username + Tag filter</label>
                <span class="help-tip" title="" data-content="
                          When using this filter, your activity will check all the media fetched
                          from <b>Usernames</b> and will skip all items that don't have any tags
                          from your <b>Tags</b> list.<br/><br/>

                        <span class='color-warning'>IMPORTANT:</span> To use this filter
                        you should enable <b>Followers</b>, <b>Followings</b>,
                        <b>Likers</b>, or <b>Commenters</b> in the <b>Targeting</b> settings
                        and add at least 1 tag in the <b>Tags</b> list.<br/><br/>

                        <span class='color-danger'>CAUTION!</span> This filter can slow down
                        or completely stop your activity if combinations of tags will be
                        unpopular or unavailable.
                      " data-original-title="Username + Tag filter">?</span>

                <span class="pull-right">
                    <input name="usernameAndTag" id="usernameAndTag" class="chk-custom" type="checkbox" data-checked="{{  $user->username_tag_filter }}">
                    <label class="chk-custom" for="usernameAndTag"></label>
                </span>
            </div>
        </div>
    </div>
</div>