<a href="demo.html#settings-locations" class="activity-settings-cat collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="settings-locations">
    <div class="general-icon general-icon-locations"></div>
    <span>
    Locations
    <!--<span class="label label-danger">New!</span>-->
    </span>
</a>
<div class="activity-settings-cont collapse {{ getSession('open') === 'locations' ?  'in' : '' }}" id="settings-locations">
    <div class="row mx-0">
        <div class="form-group col-md-4 col-sm-6" data-field="usernameAndTag">
            <div class="nice-block">
                <!--<div class="new-badge">New!</div>-->
                <label class="control-label" for="use_locations">Use Location</label>
                <span class="help-tip" title="Use Locations" data-content="
                    
									Add at least one location to get media from
									if you are using <b>Locations</b> as your Media source.<br/><br/>

									You can like and comment on media posted in that place
									or follow people who post media in that location. Please
									note that sharing your geolocation must be enabled in
									your browser to use this feature.<br/><br/>

									You can add up to 100 locations.
								  
                ">?</span>
                <span class="pull-right">
                <input name="use_locations" id="use_locations" class="chk-custom" type="checkbox"
                    data-checked="{{ $user->use_location }}"/>
                <label class="chk-custom" for="use_locations"></label>
            </span>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="list-row form-group locations" data-field="locations">
                <div class="nice-block">
                    <!--<div class="new-badge">New!</div>-->
                    <span class="label-wrap">
                    <label class="control-label">Locations</label>
                    <span class="help-tip"
                          title="Locations"
                          data-content="
                            Add at least one location to get media from
                            if you are using <b>Locations</b> as your Media source.<br/><br/>
        
                            You can like and comment on media posted in that place
                            or follow people who post media in that location. Please
                            note that sharing your geolocation must be enabled in
                            your browser to use this feature.<br/><br/>
        
                            You can add up to 100 locations.
                          ">?</span>
                    </span>
        
                    <span class="units-row">
                        @foreach ($user->locations as $location )
                            
                        <span class="unit-location unit-parent"
                            data-tag="{{ $location->location }}">
                                    <span>{{ $location->location }}</span>
                            <a href="{{ route('admin.user.location.delete', $location->id) }}" tabindex="-1" >&times;</a>
                        </span>
                        @endforeach
                    </span>
        
                    <div class="btn-group">
                        <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-locations-data">Add</button>
                        <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('admin.user.location.deleteAll', $user->id) }}">Delete all locations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
</div>