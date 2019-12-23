<a href="demo.html#settings-usernames" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-usernames">
    <div class="general-icon general-icon-usernames"></div>
    <span>
		Users
	</span>
</a>
<div class="activity-settings-cont collapse{{ getSession('open') === 'username' ? 'in' : '' }}" id="settings-usernames">
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="downtimeLimit">
            <div class="nice-block">
                <label class="control-label" for="use_followers_of">Use Followers of</label>
                <span class="help-tip" title="Stop if no activity" data-content="This function will help you to stop your activity automatically
                                                      if there are no Likes, Comments, Follows and Unfollows for specified period
                                                      of time. For example, your activity will be automatically stopped if there
                                                      are no media/users to interact in your selected media source, if your
                                                      filtration settings are very strict or if there is no connection to
                                                      Instagram API.">?</span>
                                                    
                <select name="use_followers_of" id="use_followers_of" name="use_followers_of" class="form-control pull-right" data-selected="3h">

                    <option value="users" {{  $user->use_followers_of == 'users'  ? 'selected' : '' }} >Users</option>
                    <option value="my_account" {{  $user->use_followers_of == 'my_account'  ? 'selected' : '' }}>My Account</option>
                    <option value="both"  {{  $user->use_followers_of == 'both'  ? 'selected' : '' }}>Both</option>

                </select>
            </div>
        </div>
        <div class="form-group col-md-4 col-sm-6" data-field="downtimeLimit">
            <div class="nice-block">
                <label class="control-label" for="use_followings_of">Use Followings of</label>
                <span class="help-tip" title="Stop if no activity" data-content="This function will help you to stop your activity automatically
                                                      if there are no Likes, Comments, Follows and Unfollows for specified period
                                                      of time. For example, your activity will be automatically stopped if there
                                                      are no media/users to interact in your selected media source, if your
                                                      filtration settings are very strict or if there is no connection to
                                                      Instagram API.">?</span>
        
                <select name="use_followings_of" id="use_followings_of" name="use_followings_of" class="form-control pull-right" data-selected="3h">
                    <option value="users" {{  $user->use_followings_of == 'users'  ? 'selected' : '' }} >Users</option>
                    <option value="my_account" {{  $user->use_followings_of == 'my_account'  ? 'selected' : '' }}>My Account</option>
                    <option value="both"  {{  $user->use_followings_of == 'both'  ? 'selected' : '' }}>Both</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="downtimeLimit">
            <div class="nice-block">
                <label class="control-label" for="use_likers_on">Use Likers of</label>
                <span class="help-tip" title="Stop if no activity" data-content="This function will help you to stop your activity automatically
                                                      if there are no Likes, Comments, Follows and Unfollows for specified period
                                                      of time. For example, your activity will be automatically stopped if there
                                                      are no media/users to interact in your selected media source, if your
                                                      filtration settings are very strict or if there is no connection to
                                                      Instagram API.">?</span>
        
                <select name="use_likers_on" id="use_likers_on" name="use_likers_on" class="form-control pull-right" data-selected="3h">
                    <option value="users" {{  $user->use_likers_on == 'users'  ? 'selected' : '' }} >Users</option>
                    <option value="my_account" {{  $user->use_likers_on == 'my_account'  ? 'selected' : '' }}>My Account</option>
                    <option value="both"  {{  $user->use_likers_on == 'both'  ? 'selected' : '' }}>Both</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4 col-sm-6" data-field="downtimeLimit">
            <div class="nice-block">
                <label class="control-label" for="use_commenters_of">Use Commenters of</label>
                <span class="help-tip" title="Stop if no activity" data-content="This function will help you to stop your activity automatically
                                                      if there are no Likes, Comments, Follows and Unfollows for specified period
                                                      of time. For example, your activity will be automatically stopped if there
                                                      are no media/users to interact in your selected media source, if your
                                                      filtration settings are very strict or if there is no connection to
                                                      Instagram API.">?</span>
        
                <select name="use_commenters_of" id="use_commenters_of" name="use_commenters_on" class="form-control pull-right" data-selected="3h">
                    <option value="users" {{  $user->use_commenters_on == 'users'  ? 'selected' : '' }} >Users</option>
                    <option value="my_account" {{  $user->use_commenters_on == 'my_account'  ? 'selected' : '' }}>My Account</option>
                    <option value="both"  {{  $user->use_commenters_on == 'both'  ? 'selected' : '' }}>Both</option>
                </select>
            </div>
        </div>

        
        <div class="col-sm-12">
            <div class="list-row form-group usernames" data-field="usernames">
                <div class="nice-block">
                    <!--<div class="new-badge">New!</div>-->
                    <span class="label-wrap">
                                    <label class="control-label">Usenames</label>
                                    <span class="help-tip"
                                          title="Usernames"
                                          data-content="
                                            Add at least one username
                                            if you are using <b>Followers/Followings of usernames</b>
                                            as your Media or Follow source.<br/><br/>
        
                                            Instagress will use followers or followings of those usernames
                                            to follow them and/or to choose up to 5 recently posted media from
                                            each account for automatic likes and comments.<br/><br/>
        
                                            You can add up to 100 usernames.
                                          ">?</span>
                    </span>
        
                    <span class="units-row">
                        @foreach ($user->usernames as $name )
                            
                        <span class="unit-tag unit-parent"
                            data-tag="{{ $name->name }}">
                                    <span>{{ $name->name }}</span>
                            <a href="{{ route('admin.user.username.delete', $name->id) }}" tabindex="-1" >&times;</a>
                        </span>
                        @endforeach
                    </span>
                    <div class="btn-group">
                        <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-username-data">Add</button>
        
                        <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('admin.user.username.deleteAll', $user->id) }}">Delete all usernames</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>