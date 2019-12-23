<a href="demo.html#settings-blacklists" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-blacklists">
    <div class="general-icon general-icon-blacklists"></div>
    <span>
    Blacklists
    <!--<span class="label label-danger">New!</span>-->
    </span>
</a>

<div class="activity-settings-cont collapse {{ getSession('open') === 'blacklist' ? 'in' : '' }} " id="settings-blacklists" style="" aria-expanded="true">
    <div class="list-row form-group mx-0" data-field="stopTags">
        <div class="nice-block">
            <!--<div class="new-badge">New</div>-->
            <span class="label-wrap">
                <label class="control-label">Tags blacklist</label>
                <span class="help-tip" title="" data-content="
                          Add some tags to this list if you want
                          to skip media marked by these tags from liking and/or
                          commenting activity. You will skip the users from
                          blacklisted tags as well.<br/><br/>
                          You can add up to 3000 tags in this list.
                      " data-original-title="Tags blacklist">?</span>
            </span>

            <span class="units-row">
                @foreach ($user->blacklistTags as $tag )
                            
                <span class="unit-tag unit-parent"
                    data-tag="{{ $tag->tag }}">
                            <span>{{ $tag->tag }}</span>
                    <a href="{{ route('admin.user.tagblacklist.delete', $tag->id) }}" tabindex="-1" >&times;</a>
                </span>
                @endforeach
            </span>

            <div class="btn-group">
                <button class="btn btn-plain" data-popup-open="#popup-activity-tag-blacklist" tabindex="-1">Add</button>
                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{  route('admin.user.tagblacklist.deleteAll', $user->id) }}">Delete all blacklisted tags</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="list-row form-group mx-0" data-field="stopUsernames">
        <div class="nice-block">
            <!--<div class="new-badge">New</div>-->
            <span class="label-wrap">
                <label class="control-label">Usernames blacklist</label>
                <span class="help-tip" title="" data-content="
                          Add some usernames to this list if you want
                          to skip users from following or also from unfollowing
                          activity. You will skip the media from blacklisted
                          users as well.<br/><br/>
                          You can add up to 3000 usernames in this list.
                      " data-original-title="Usernames blacklist">?</span>
            </span>

            <span class="units-row">
                
                @foreach ($user->blacklistUsernames as $name )
                            
                <span class="unit-tag unit-parent"
                    data-tag="{{ $name->name }}">
                            <span>{{ $name->name }}</span>
                    <a href="{{ route('admin.user.usernameblacklist.delete', $name->id) }}" tabindex="-1" >&times;</a>
                </span>
                @endforeach
                
            </span>

            <div class="btn-group">
                <button class="btn btn-plain" data-popup-open="#popup-activity-username-blacklist" tabindex="-1">Add</button>
                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{ route('admin.user.usernameblacklist.deleteAll', $user->id) }}" class="js-btn-del-usernames">Delete all blacklisted usernames</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="list-row form-group mx-0" data-field="stopKeywords">
        <div class="nice-block">
            <!--<div class="new-badge">New</div>-->
            <span class="label-wrap">
                <label class="control-label">Keywords blacklist</label>
                <span class="help-tip" title="" data-content="
                          Add some keywords to this list that you don't want to interact with.
                          This filter will search for stop keywords in media (tags and caption)
                          and in user (username, full name, bio and website), and will prevent
                          Instagress from interacting with unwanted content.<br/><br/>
                          You can also use asterisk symbol <b>*</b> in your keywords. This will
                          allow covering all possible variations of some keywords. For example:
                          add <b>playboy*</b> keyword to exclude all content that contains any
                          words that start with <b>playboy</b>.<br/><br/>
                          You can add up to 3000 keywords in this list.

                      " data-original-title="Keywords blacklist">?</span>
            </span>

            <span class="units-row">
                @foreach ($user->blacklistKeywords as $word )
                            
                <span class="unit-tag unit-parent"
                    data-tag="{{ $word->keyword }}">
                            <span>{{ $word->keyword }}</span>
                    <a href="{{ route('admin.user.keywordblacklist.delete', $word->id) }}" tabindex="-1" >&times;</a>
                </span>
                @endforeach
            </span>

            <div class="btn-group">
                <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-keywords-blacklist">Add</button>
                <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{ route('admin.user.keywordblacklist.deleteAll', $user->id) }}">Delete all blacklisted keywords</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>