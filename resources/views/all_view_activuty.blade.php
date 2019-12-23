 <a href="demo.html#settings-filters" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-filters">
                    <div class="general-icon general-icon-filters"></div>
                    <span>
					Advanced Filters
					<!--<span class="label label-danger">New!</span>-->
                    </span>
                </a>
                <div class="activity-settings-cont collapse in" id="settings-filters">
                    <div class="row">

                        <div class="form-group col-md-4 col-sm-6" data-field="userRelationFilter">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="userRelationFilter">Media Age</label>
                                <span class="help-tip" title="User relation filter" data-content="
								  	This filter will help you to exclude your own followers/followings
								  	from Liking, Commenting and Following activity:<br/><br/>
									<b>Off</b> — Filter is turned off.<br/><br/>
									<b>Followers</b> — You will not interact with your followers and their media.<br/><br/>
									<b>Followings</b> — You will not interact with your followings and their media.<br/><br/>
									<b>Both</b> — You will not interact with your followers and followings and their media.
								  ">?</span>

                                <select name="userRelationFilter" id="userRelationFilter" class="form-control pull-right" data-selected="">
                                    <option value="">Off</option>
                                    <option value="followers">Followers</option>
                                    <option value="followings">Followings</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="minComments">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="inpMinComments">Min. comments filter</label>
                                <span class="help-tip" title="Minimum comments filter" data-content="
									Interact only with media that have minimum selected amount of comments.<br/><br/>
									Use it along with <b>Max. comments filter</b> to set desired range
									of media popularity.<br/><br/>
									Recommended values: 0-1.<br/><br/>
									Set to zero to disable this filter.
								  ">?</span>

                                <input name="minComments" id="inpMinComments" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="maxComments">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="inpMaxComments">Max. comments filter</label>
                                <span class="help-tip" title="Maximum comments filter" data-content="
									Interact only with media that have maximum selected amount of comments.<br/><br/>
									Use it along with <b>Min. comments filter</b> to set desired range
									of media popularity.<br/><br/>
									Recommended values: 20-50.<br/><br/>
									Set to zero to disable this filter.
								  ">?</span>

                                <input name="maxComments" id="inpMaxComments" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="userRelationFilter">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="userRelationFilter">User relation filter</label>
                                <span class="help-tip" title="User relation filter" data-content="
								  	This filter will help you to exclude your own followers/followings
								  	from Liking, Commenting and Following activity:<br/><br/>
									<b>Off</b> — Filter is turned off.<br/><br/>
									<b>Followers</b> — You will not interact with your followers and their media.<br/><br/>
									<b>Followings</b> — You will not interact with your followings and their media.<br/><br/>
									<b>Both</b> — You will not interact with your followers and followings and their media.
								  ">?</span>

                                <select name="userRelationFilter" id="userRelationFilter" class="form-control pull-right" data-selected="">
                                    <option value="">Off</option>
                                    <option value="followers">Followers</option>
                                    <option value="followings">Followings</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="userProfileFilter">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="userProfileFilter">User profile filter</label>
                                <span class="help-tip" title="User profile filter" data-content="
								  	This filter will help you to avoid inappropriate and unwanted users
								  	and their media during your activity:<br/><br/>
									<b>Off</b> — Filter is turned off.<br/><br/>
									<b>Low</b> — Excludes users who have no avatar or have no posted media.<br/><br/>
									<b>Medium</b> — Excludes users who have no avatar, have less than 10 posted
									media or have no name in the profile.<br/><br/>
									<b>High</b> — Excludes users who have no avatar, have less than 30 posted
									media, have no name in the profile or have no bio.
								  ">?</span>

                                <select name="userProfileFilter" id="userProfileFilter" class="form-control pull-right" data-selected="">
                                    <option value="">Off</option>
                                    <option value="f">Low</option>
                                    <option value="fff">Medium</option>
                                    <option value="fffff">High</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="minFollowers">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="inpMinFollowers">Min. followers filter</label>
                                <span class="help-tip" title="Minimum followers filter" data-content="
									Interact only with users that have minimum selected amount of followers.<br/><br/>
									Use it along with <b>Max. followers filter</b> to set desired range
									of users popularity.<br/><br/>
									Recommended values: 0-50.<br/><br/>
									Set to zero to disable this filter.
								  ">?</span>

                                <input name="minFollowers" id="inpMinFollowers" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="maxFollowers">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="inpMaxFollowers">Max. followers filter</label>
                                <span class="help-tip" title="Maximum followers filter" data-content="
									Interact only with users that have maximum selected amount of followers.<br/><br/>
									Use it along with <b>Min. followers filter</b> to set desired range
									of users popularity.<br/><br/>
									Recommended values: 500-1000.<br/><br/>
									Set to zero to disable this filter.
								  ">?</span>

                                <input name="maxFollowers" id="inpMaxFollowers" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="tagAndTag">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="tagAndTag">Tag + Tag filter</label>
                                <span class="help-tip" title="Tag + Tag filter" data-content="
								  	This filter will help you to interact only with media that have
								  	at least two different tags from your settings.<br/><br/>
									Add at least two tags and select <b>Media source: Tags</b>
									to use this filter.<br/><br/>
									WARNING! This filter can slow down or completely stop your activity
									if combinations of tags will be unpopular or unavailable.
								  ">?</span>

                                <span class="pull-right">
								<input name="tagAndTag" id="tagAndTag" class="chk-custom" type="checkbox"
									   data-checked="false"/>
								<label class="chk-custom" for="tagAndTag"></label>
							</span>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="locationAndTag">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="locationAndTag">Location + Tag filter</label>
                                <span class="help-tip" title="Location + Tag filter" data-content="
								  	This filter will help you to interact only with media that have
								  	at least one tag from your settings and posted in one of
								  	given locations.<br/><br/>
									Add at least one location and one tag, and select <b>Media source: Locations</b>
									to use this filter.<br/><br/>
									WARNING! This filter can slow down or completely stop your activity
									if combinations of locations and tags will be unpopular or unavailable.
								  ">?</span>

                                <span class="pull-right">
								<input name="locationAndTag" id="locationAndTag" class="chk-custom" type="checkbox"
									   data-checked="false"/>
								<label class="chk-custom" for="locationAndTag"></label>
							</span>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="usernameAndTag">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="usernameAndTag">Username + Tag filter</label>
                                <span class="help-tip" title="Username + Tag filter" data-content="
								  	This filter will help you to interact only with media that have
								  	at least one tag from your settings and posted by followers/followings of
								  	given usernames.<br/><br/>
									Add at least one username and one tag, and select <b>Media source: Followers/Followings</b>
									to use this filter.<br/><br/>
									WARNING! This filter can slow down or completely stop your activity
									if combinations of usernames and tags will be unpopular or unavailable.
								  ">?</span>

                                <span class="pull-right">
								<input name="usernameAndTag" id="usernameAndTag" class="chk-custom" type="checkbox"
									   data-checked="false"/>
								<label class="chk-custom" for="usernameAndTag"></label>
							</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end filter --}}

                {{-- end action --}}

                <a href="demo.html#settings-main" class="activity-settings-cat" data-toggle="collapse" aria-expanded="true" aria-controls="settings-main">
                    <div class="general-icon general-icon-main"></div>
                    <span>
					Main Settings
				</span>
                </a>
                <div class="activity-settings-cont collapse in" id="settings-main">
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-6" data-field="speed">
                            <div class="nice-block">
                                <label class="control-label" for="selSpeed">Activity speed</label>
                                <span class="help-tip" title="Activity speed" data-content="
									<b>Slow</b> — safe speed to do about
									480 likes,
									144 comments,
									336 follows,
									240 unfollows per day
									(the&nbsp;best&nbsp;speed for the beginning).<br/><br/>
									<b>Normal</b> — smart speed to do about
									720 likes,
									192 comments,
									480 follows,
									360 unfollows per day.<br/><br/>
									<b>Fast</b> — supreme speed to do about
									960 likes,
									240 comments,
									624 follows,
									480 unfollows per day.<br/><br/>
									Try to use <b>Slow</b> speed for the beginning and then change it
									to <b>Normal</b> or <b>Fast</b> after several days.
								  ">?</span>

                                <select name="speed" id="selSpeed" class="form-control pull-right" data-selected="slow">
                                    <option value="slow">Slow</option>
                                    <option value="normal">Normal</option>
                                    <option value="fast">Fast</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="source">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="selSource">Media source</label>
                                <span class="help-tip" title="Media source" data-content="Select the source of photos and videos for your activity:<br/><br/>
									<b>Tags</b> — to search media by selected tags.<br/><br/>
									<b>Locations</b> — to search media by selected locations.<br/><br/>
									<b>Followers/Followings</b> — to get media from followers or followings of usernames.<br/><br/>
									<b>My Feed</b> — to get media from your own feed.">?</span>

                                <select name="source" id="selSource" class="form-control pull-right" data-selected="tag">
                                    <option value="tag">Tags</option>
                                    <option value="location">Locations</option>
                                    <option value="followers">Followers of usernames</option>
                                    <option value="followings">Followings of usernames</option>
                                    <option value="feed">My Feed</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="mediaAge">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="selMediaAge">Media age</label>
                                <span class="help-tip" title="Media age" data-content="This setting will help you to choose an age
									of media you want to interact with. From the newest one to the oldest.<br/><br/>
									For example: select <b>1&nbsp;Day</b> if you want to interact only
									with media that not older than one day.<br/><br/>
									<b>Newest</b> media age was previously known as <b>New media only</b>.">?</span>

                                <select name="mediaAge" id="selMediaAge" class="form-control pull-right" data-selected="">
                                    <option value="new">Newest</option>
                                    <option value="1h">1 Hour</option>
                                    <option value="12h">12 Hours</option>
                                    <option value="1d">1 Day</option>
                                    <option value="3d">3 Days</option>
                                    <option value="1w">1 Week</option>
                                    <option value="2w">2 Weeks</option>
                                    <option value="1M">1 Month</option>
                                    <option value="">Any</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="mediaType">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="selMediaType">Media type</label>
                                <span class="help-tip" title="Media type" data-content="This setting lets you interact with specific media type:
									<b>Photos</b> or <b>Videos</b>.
									Also, you can choose <b>Any</b>.">?</span>

                                <select name="mediaType" id="selMediaType" class="form-control pull-right" data-selected="">
                                    <option value="">Any</option>
                                    <option value="image">Photos</option>
                                    <option value="video">Videos</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="minimumLikes">
                            <div class="nice-block">
                                <label class="control-label" for="inpMinLikes">Min. likes filter</label>
                                <span class="help-tip" title="Minimum likes filter" data-content="
									Interact only with media that have minimum selected amount of likes.<br/><br/>
									Use it along with <b>Max. likes filter</b> to set desired range
									of media popularity.<br/><br/>
									Recommended values: 0-5.<br/><br/>
									Set to zero to disable this filter.
								  ">?</span>

                                <input name="minimumLikes" id="inpMinLikes" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="maximumLikes">
                            <div class="nice-block">
                                <label class="control-label" for="inpMaxLikes">Max. likes filter</label>
                                <span class="help-tip" title="Maximum likes filter" data-content="
									Interact only with media that have maximum selected amount of likes.<br/><br/>
									Use it along with <b>Min. likes filter</b> to set desired range
									of media popularity.<br/><br/>
									Recommended values: 50-100.<br/><br/>
									Set to zero to disable this filter.
								  ">?</span>

                                <input name="maximumLikes" id="inpMaxLikes" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>
                    </div>
                </div>

                

                <a href="demo.html#settings-comment" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-comment">
                    <div class="general-icon general-icon-comment"></div>
                    <span>
					Comment
				</span>
                </a>
                <div class="activity-settings-cont collapse" id="settings-comment">
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-6" data-field="commentDontSpam">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="commentDontSpam">Don't comment same users</label>
                                <span class="help-tip" title="Don't comment same users" data-content="When checking this box you will not comment
									more than one photo or video of the same user.">?</span>

                                <span class="pull-right">
								<input name="commentDontSpam" id="commentDontSpam" class="chk-custom" type="checkbox"
									   data-checked="false"/>
								<label class="chk-custom" for="commentDontSpam"></label>
							</span>
                            </div>
                        </div>
                    </div>

                    <div class="list-row form-group comments" data-field="comments">
                        <div class="nice-block clearfix">
                            <span class="label-wrap">
							<label class="control-label">Comments</label>
							<span class="help-tip"
								  title="Comments"
								  data-content="
								  	Add at least one comment
								  	if you are turned on <b>Comments</b> in your to do section.<br/><br/>

									For each post a new comment will be randomly selected from this list.
									Instagress remembers commented photos and videos to post there
									only once.<br/><br/>

									We recommend using at least 10 different
									neutral comments like: Nice, Like it, Beautiful, etc.<br/><br/>
									The total length of the comment cannot exceed 300 characters.<br/>
									The comment cannot contain more than 4 hashtags.<br/>
									The comment cannot contain more than 1 URL.<br/>
									The comment cannot consist of all capital letters.<br/>
									The comments must be different as much as possible.<br/><br/>

									You can add up to 100 comments.
								  ">?</span>
                            </span>

                            <span class="units-row">

								<span class="unit-comment"
									  data-comment="Brilliant one">
									<span>Brilliant one</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Flawless">
									<span>Flawless</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Aww sweet">
									<span>Aww sweet</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="This is sweet :)">
									<span>This is sweet :)</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Very nice! 😃">
									<span>Very nice! 😃</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Impressive content!">
									<span>Impressive content!</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Very cool!">
									<span>Very cool!</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Excellent!">
									<span>Excellent!</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="So nice!">
									<span>So nice!</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Pretty awesome :)">
									<span>Pretty awesome :)</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="👍">
									<span>👍</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Great post">
									<span>Great post</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Awesome">
									<span>Awesome</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Good shot!">
									<span>Good shot!</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Perfect one!">
									<span>Perfect one!</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Super cool :)">
									<span>Super cool :)</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Pretty awesome">
									<span>Pretty awesome</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Wow like it!">
									<span>Wow like it!</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="Aw nice">
									<span>Aw nice</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            <span class="unit-comment" data-comment="This is terrific">
									<span>This is terrific</span>
                            <a href="demo.html#" tabindex="-1">&times;</a>
                            </span>

                            </span>

                            <div class="btn-group">
                                <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-comments">Add</button>
                                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://instagressalternative.com/emoji" target="_blank">Emoji cheat sheet</a></li>
                                    <li class="divider"></li>
                                    <li><a href="demo.html#" class="js-btn-del-comments">Delete all comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="demo.html#settings-follow" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-follow">
                    <div class="general-icon general-icon-follow"></div>
                    <span>
					Follow
					<span class="label label-danger">New!</span>
                    </span>
                </a>
                <div class="activity-settings-cont collapse" id="settings-follow">
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-6" data-field="followSource">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="selFollowSource">Follow source</label>
                                <span class="help-tip" title="Follow source" data-content="You can choose between selected Media source
									or followers/followings of specified usernames.">?</span>

                                <select name="followSource" id="selFollowSource" class="form-control pull-right" data-selected="media">
                                    <option value="media">Media</option>
                                    <option value="followers">Followers of usernames</option>
                                    <option value="followings">Followings of usernames</option>
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

                                <input name="followCycle" id="inpFollowCycle" class="form-control pull-right" type="number" min="1" max="7500" maxlength="4" placeholder="" value="1000" data-default="1000" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="followDontSpam">
                            <div class="nice-block">
                                <!--<div class="new-badge">New!</div>-->
                                <label class="control-label" for="followDontSpam">Don't follow same users</label>
                                <span class="help-tip" title="Don't follow same users" data-content="When checking this box you will not follow
									the same users twice after you unfollow them.">?</span>

                                <span class="pull-right">
								<input name="followDontSpam" id="followDontSpam" class="chk-custom" type="checkbox"
									   data-checked="false"/>
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
								<input name="followNotPrivate" id="followNotPrivate" class="chk-custom" type="checkbox"
									   data-checked="false"/>
								<label class="chk-custom" for="followNotPrivate"></label>
							</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="demo.html#settings-unfollow" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-unfollow">
                    <div class="general-icon general-icon-unfollow"></div>
                    <span>
					Unfollow
					<span class="label label-danger">New!</span>
                    </span>
                </a>
                <div class="activity-settings-cont collapse" id="settings-unfollow">
                    <div class="row">
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
                                    <option value="db">Instagress</option>
                                    <option value="all">All</option>
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

                                <input name="unfollowCycle" id="inpUnfollowCycle" class="form-control pull-right" type="number" min="1" max="7500" maxlength="4" placeholder="" value="1000" data-default="1000" />
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
							<input name="unfollowSmart" id="unfollowSmart" class="chk-custom" type="checkbox"
								   data-checked="false"/>
							<label class="chk-custom" for="unfollowSmart"></label>
						</span>
                            </div>
                        </div>
                    </div>
                </div>

               

                

                <a href="demo.html#settings-blacklists" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-blacklists">
                    <div class="general-icon general-icon-blackwhite"></div>
                    <span>
					Blacklists
					<!--<span class="label label-danger">New!</span>-->
                    </span>
                </a>
                <div class="activity-settings-cont collapse" id="settings-blacklists">
                    <div class="list-row form-group tags" data-field="stopTags">
                        <div class="nice-block">
                            <!--<div class="new-badge">New!</div>-->
                            <span class="label-wrap">
							<label class="control-label">Tags blacklist</label>
							<span class="help-tip"
								  title="Tags blacklist"
								  data-content="
								  	Add some tags to this list if you want
								  	to skip media marked by these tags from liking and/or
								  	commenting activity. You will skip the users from
								  	blacklisted tags as well.
								  ">?</span>
                            </span>

                            <span class="units-row">

						</span>

                            <div class="btn-group">
                                <button class="btn btn-plain js-btn-add-tags" tabindex="-1">Add</button>
                                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="demo.html#" class="js-btn-del-tags">Delete all blacklisted tags</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="list-row form-group usernames" data-field="stopUsernames">
                        <div class="nice-block">
                            <!--<div class="new-badge">New!</div>-->
                            <span class="label-wrap">
							<label class="control-label">Usernames blacklist</label>
							<span class="help-tip"
								  title="Usernames blacklist"
								  data-content="
								  	Add some usernames to this list if you want
								  	to skip users from following or also from unfollowing
								  	activity. You will skip the media from blacklisted
								  	users as well.
								  ">?</span>
                            </span>

                            <span class="units-row">

						</span>

                            <div class="btn-group">
                                <button class="btn btn-plain js-btn-add-usernames" tabindex="-1">Add</button>
                                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="demo.html#" class="js-btn-del-usernames">Delete all blacklisted usernames</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="list-row form-group keywords" data-field="stopKeywords">
                        <div class="nice-block">
                            <!--<div class="new-badge">New!</div>-->
                            <span class="label-wrap">
							<label class="control-label">Keywords blacklist</label>
							<span class="help-tip"
								  title="Keywords blacklist"
								  data-content="
								  	Add some keywords to this list that you don't want to interact with.
								  	This filter will search for stop keywords in media (tags and caption)
								  	and in user (username, full name, bio and website), and will prevent
								  	Instagress from interacting with unwanted content.<br/><br/>
								  	You can also use asterisk symbol <b>*</b> in your keywords. This will
								  	allow covering all possible variations of some keywords. For example:
								  	add <b>playboy*</b> keyword to exclude all content that contains any
								  	words that start with <b>playboy</b>.
								  ">?</span>
                            </span>

                            <span class="units-row">

						</span>

                            <div class="btn-group">
                                <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-keywords">Add</button>
                                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="demo.html#" class="js-btn-del-keywords">Delete all blacklisted keywords</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="demo.html#settings-autostop" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-autostop">
                    <div class="general-icon general-icon-autostop"></div>
                    <span>
					Auto-stop
					<!--<span class="label label-danger">New!</span>-->
                    </span>
                </a>
                <div class="activity-settings-cont collapse" id="settings-autostop">
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-6" data-field="likeLimit">
                            <div class="nice-block">
                                <label class="control-label" for="inpLikeLimit">Likes counter</label>
                                <span class="help-tip" title="Likes counter" data-content="When this number of likes will be done your activity
									will be stopped automatically. Set to zero to disable the limit.">?</span>

                                <input name="likeLimit" id="inpLikeLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="commentLimit">
                            <div class="nice-block">
                                <label class="control-label" for="inpCommentLimit">Comments counter</label>
                                <span class="help-tip" title="Comments counter" data-content="When this number of comments will be done your activity
									will be stopped automatically. Set to zero to disable the limit.">?</span>

                                <input name="commentLimit" id="inpCommentLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="followLimit">
                            <div class="nice-block">
                                <label class="control-label" for="inpFollowLimit">Follows counter</label>
                                <span class="help-tip" title="Follows counter" data-content="When this number of follows will be done your activity
									will be stopped automatically. Set to zero to disable the limit.">?</span>

                                <input name="followLimit" id="inpFollowLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="unfollowLimit">
                            <div class="nice-block">
                                <label class="control-label" for="inpUnfollowLimit">Unfollows counter</label>
                                <span class="help-tip" title="Unfollows counter" data-content="When this number of unfollows will be done your activity
									will be stopped automatically. Set to zero to disable the limit.">?</span>

                                <input name="unfollowLimit" id="inpUnfollowLimit" class="form-control pull-right" type="number" min="0" max="9999999999" maxlength="10" placeholder="0" value="0" data-default="0" />
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6" data-field="timeLimit">
                            <div class="nice-block">
                                <label class="control-label" for="inpTimeLimit">Timer</label>
                                <span class="help-tip" title="Timer" data-content="Format: HH:MM. For example, if you set it to <b>01:00</b>, then your activity
									will stop automatically after one hour. If you leave it empty, then
									activity will work infinite or while Instagram limits for your
									account not will be reached.">?</span>

                                <input name="timeLimit" id="inpTimeLimit" class="form-control pull-right" type="text" maxlength="5" placeholder="00:00" value="" />
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

                                <select name="downtimeLimit" id="selDowntimeLimit" class="form-control pull-right" data-selected="3h">
                                    <option value="1h">1 Hour</option>
                                    <option value="3h">3 Hours</option>
                                    <option value="12h">12 Hours</option>
                                    <option value="1d">1 Day</option>
                                    <option value="3d">3 Days (too long)</option>
                                    <option value="1w">1 Week (very long, be careful)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>