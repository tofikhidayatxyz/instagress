<!-- Comments template -->
<script id="tplComment" type="text/html">
            <span class="unit-comment" data-comment="{{{ comment }}}">
            <span>{{{ comment }}}</span>
            <a href="#" tabindex="-1">&times;</a>
            </span>
        </script>

        <!-- Tags templates -->
        <script id="tplTag" type="text/html">
            <span class="unit-tag" data-tag="{{{ name }}}">
            <span>{{{ name }}}</span>
            <a href="#" tabindex="-1">&times;</a>
            </span>
        </script>
        <script id="tplTagSelect" type="text/html">
            <span class="unit-tag unit-tag-select" data-tag="{{{ name }}}">
            <span>{{{ name }}} <span class="color-gray-light">({{ _media_count_str }})</span></span>
            <span class="unit-tag-chk">
                <input id="tag-{{{ name }}}" class="chk-custom" type="checkbox"/>
                <label for="tag-{{{ name }}}" class="chk-custom"></label>
            </span>
            </span>
        </script>

        <!-- Locations templates -->
        <script id="tplLocation" type="text/html">
            <span class="unit-location" data-id="{{ id }}" data-name="{{{ name }}}" data-latitude="{{ latitude }}" data-longitude="{{ longitude }}">
            <span>{{{ name }}}</span>
            <a href="#" tabindex="-1">&times;</a>
            </span>
        </script>
        <script id="tplLocationSelect" type="text/html">
            <span class="unit-location unit-location-select" data-id="{{ id }}" data-name="{{{ name }}}" data-latitude="{{ latitude }}" data-longitude="{{ longitude }}">
            <span>{{{ name }}} <!--<span class="color-gray-light">( _media_count_str )</span>--></span>
            <span class="unit-location-chk">
                <input id="location-{{ id }}" class="chk-custom" type="checkbox"/>
                <label for="location-{{ id }}" class="chk-custom"></label>
            </span>
            </span>
        </script>

        <!-- Usernames templates -->
        <script id="tplUsername" type="text/html">
            <span class="unit-username unit-username-pic" data-id="{{ id }}" data-username="{{{ username }}}" data-full_name="{{{ full_name }}}" data-profile_picture="{{ profile_picture }}">
            <span>{{{ username }}}</span>
            <img src="{{ profile_picture }}" class="unit-username-avatar" />
            <a href="#" tabindex="-1">&times;</a>
            </span>
        </script>
        <script id="tplUsernameSelect" type="text/html">
            <span class="unit-username unit-username-select" data-id="{{ id }}" data-username="{{{ username }}}" data-full_name="{{{ full_name }}}" data-profile_picture="{{ profile_picture }}">
            <span>{{{ username }}}</span>
            <img src="{{ profile_picture }}" class="unit-username-avatar" />
            <span class="unit-username-chk">
                <input id="username-{{ id }}" class="chk-custom" type="checkbox"/>
                <label for="username-{{ id }}" class="chk-custom"></label>
            </span>
            </span>
        </script>

        <!-- Keywords template -->
        <script id="tplKeyword" type="text/html">
            <span class="unit-keyword" data-keyword="{{{ keyword }}}">
            <span>{{{ keyword }}}</span>
            <a href="#" tabindex="-1">&times;</a>
            </span>
        </script>