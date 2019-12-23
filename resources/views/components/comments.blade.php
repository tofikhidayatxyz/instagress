<a href="#settings-comment" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-comment">
    <div class="general-icon general-icon-comment"></div>
    <span>
        Comment
    </span>
</a>

<div class="activity-settings-cont collapse {{ getSession('open')  === 'comment' ? 'in' : '' }}" id="settings-comment" style="" aria-expanded="true">
    <div class="row just">
        <div class="form-group col-md-4 col-sm-6" data-field="commentDontSpam">
            <div class="nice-block">
                <!--<div class="new-badge">New</div>-->
                <label class="control-label" for="commentDontSpam">Don't comment same users</label>
                <span class="help-tip" title="" data-content="
                          Check this box to ensure that Instagress will not comment on more than one
                        photo or video from the same user in 90 days period.
                        " data-original-title="Don't comment same users">?</span>

                <span class="pull-right">
                    <input name="commentDontSpam" id="commentDontSpam" class="chk-custom" type="checkbox" data-checked="{{ $user->dont_comment_same_user }}">
                    <label class="chk-custom" for="commentDontSpam"></label>
                </span>
            </div>
        </div>
    </div>

    <div class="list-row form-group comments mx-0" data-field="comments">
        <div class="nice-block clearfix">
            <span class="label-wrap">
                <label class="control-label">Comments</label>
                <span class="help-tip" title="" data-content="
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
                      " data-original-title="Comments">?</span>
            </span>

            <span>
                @foreach ($user->comments as $comment )
                            
                <span class="unit-tag"
                    data-tag="{{ $comment->comment }}">
                            <span>{{ $comment->comment }}</span>
                    <a href="{{ route('admin.user.comment.delete', $comment->id) }}" tabindex="-1" >&times;</a>
                </span>
                @endforeach
            </span>

            <div class="btn-group">
                <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-comments">Add</button>
                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{ route('admin.user.comment.deleteAll', $user->id) }}" >Delete all comments</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>