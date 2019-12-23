<a href="demo.html#other-targetting-tags" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="other-targetting-tags">
    <div class="general-icon general-icon-targeting"></div>
    <span>
    Other Targetting
    <span class="label label-danger">New!</span>
</span>
</a>

<div class="activity-targetting-cont collapse" id="other-targetting-tags">
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="usernameAndTag">
            <div class="nice-block">
                <div class="new-badge">New!</div>
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="use_feeds">Use Feeds</label>
                <span class="help-tip" title="Use Feeds" data-content="
                   
								  	Scan users whose posts appear in your Feed.
								  
                ">?</span>
                <span class="pull-right">
                    <input name="use_feed" id="use_feeds" class="chk-custom" type="checkbox"
                        data-checked="{{ $user->use_feed  }}"/>
                    <label class="chk-custom" for="use_feeds"></label>
                </span>
            </div>
        </div>
        <div class="form-group col-md-4 col-sm-6" data-field="usernameAndTag">
            <div class="nice-block">
                <div class="new-badge">New!</div>
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="use_ explore_page">Use Explore Page</label>
                <span class="help-tip" title="Use Tags" data-content="
                    
								  	Scan users whose posts appear on your Explore page.
								  
                ">?</span>
                <span class="pull-right">
                <input name="use_explore_page" id="use_explore_page" class="chk-custom" type="checkbox"
                    data-checked="{{ $user->use_explore_page }}"/>
                <label class="chk-custom" for="use_explore_page"></label>
            </span>
            </div>
        </div>
        <div class="form-group col-md-4 col-sm-6" data-field="usernameAndTag">
            <div class="nice-block">
                <div class="new-badge">New!</div>
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="use_incoming_activity">Use Incoming Activity</label>
                <span class="help-tip" title="" data-content="
                   
								  	Scan users who recently followed you or liked and/or commented on your posts.
								  
                ">?</span>
                <span class="pull-right">
                <input name="use_incoming_activity" id="use_incoming_activity" class="chk-custom" type="checkbox"
                    data-checked="{{ $user->use_incoming_activity }}" />
                <label class="chk-custom" for="use_incoming_activity"></label>
            </span>
            </div>
        </div>
    </div>
</div>