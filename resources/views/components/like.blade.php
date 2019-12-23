<a href="#settings-like" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-like">
    <div class="general-icon general-icon-like"></div>
    <span>
        Like
        <!-- <span class="label label-danger">New</span> -->
    </span>
</a>

<div class="activity-settings-cont collapse" id="settings-like" style="" aria-expanded="true">
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="likeDontSpam">
            <div class="nice-block">
                <label class="control-label" for="likeDontSpam">Don't like same users</label>
                <span class="help-tip" title="" data-content="
                          Check this box to ensure that Instagress will not like more than one
                        photo or video from the same user in 30 days period.
                        " data-original-title="Don't like same users">?</span>

                <span class="pull-right">
                <input name="likeDontSpam" id="likeDontSpam" class="chk-custom" type="checkbox" data-checked="{{ $user->dont_like_same_user }}">
                    <label class="chk-custom" for="likeDontSpam"></label>
                </span>
            </div>
        </div>
    </div>
</div>