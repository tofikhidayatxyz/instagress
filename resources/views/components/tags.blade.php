<a href="demo.html#settings-tags" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-tags">
    <div class="general-icon general-icon-tags"></div>
    <span>
    Tags
</span>
</a>

<div class="activity-settings-cont collapse {{ getSession('open') === 'tags' ? 'in' : '' }}" id="settings-tags">
    <div class="row mx-0">
        <div class="form-group col-md-4 col-sm-6" data-field="usernameAndTag">
            <div class="nice-block">
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="use_tags">Use Tags</label>
                <span class="help-tip" title="Use Tags" data-content="
                    Use Tags to find users to interact with.
                ">?</span>
                <span class="pull-right">
                   
                <input name="use_tags" id="use_tags" class="chk-custom" type="checkbox"
                    data-checked="{{ $user->use_tags }}"/>
                <label class="chk-custom" for="use_tags"></label>
            </span>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="list-row form-group tags" data-field="tags">
                <div class="nice-block clearfix">
                    <span class="label-wrap">
                    <label class="control-label">Tags</label>
                    <span class="help-tip"
                        title="Tags"
                        data-content="
                            Add at least one tag to get media from
                            if you are using <b>Tags</b> as your Media source.<br/><br/>

                            You can search tags or you can upload a list of tags
                            by pressing <b>Enter your list of tags</b> link. Please
                            note that <b>#</b> symbol is not required. Using 10 tags
                            and more is recommended for this setting.<br/><br/>

                            You can add up to 1000 tags.
                        ">?</span>
                    </span>

                    <span class="units-rows">

                        @foreach ($user->tags as $tag )
                            
                        <span class="unit-tag unit-parent"
                            data-tag="{{ $tag->tag }}">
                                    <span>{{ $tag->tag }}</span>
                            <a href="{{ route('admin.user.tag.delete', $tag->id) }}" tabindex="-1" >&times;</a>
                        </span>
                        @endforeach
                    </span>

                    <div class="btn-group">
                        <a href="" data-popup-open="#popup-activity-tags-data" class="btn btn-plain">Add</a>
                        <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('admin.user.tag.deleteAll', $user->id) }}">Delete all tags</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


