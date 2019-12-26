<header>

    <div class="container navbar-main">
    <a href="{{ URL::to('/') }}" class="logo-new">
            <img src="{{ asset('img/instagress-logo-v=203.png') }}"  alt="Instagress" />
        </a>

        <a href="demo.html#" class="btn-navbar-menu" data-ui-menu-toggle="navbar-menu"></a>
        <a href="demo.html#" class="btn-navbar-menu-login" data-ui-menu-toggle="navbar-menu-login"></a>

        <div class="navbar-mobile-menu" data-ui="navbar-menu">
            <ul>

                <li class="">
                    <a href=".{{ route('page.about') }}">About</a>

                </li>

                <li class="">
                    <a href=".{{ route('page.prices') }}">Prices</a>

                </li>

                <li class="">
                    <a href="{{ route('page.blog') }}">Blog</a>

                </li>

                <li class="more">
                    <a href="{{ route('page.guide') }}">Guide</a>

                </li>

                <li class="more">
                    <a href="{{ route('page.faq') }}">FAQ</a>

                </li>

                <li class="">
                    <a href="demo.html#" data-popup-open="#popup-support">Support</a>

                </li>

                <li class="toggle-more">
                    <a href="demo.html#" class="btn-navbar-menu-more" data-ui-menu-toggle="navbar-menu-more" data-ui-role="dropdown"></a>
                    <div class="navbar-popup-menu" data-ui="navbar-menu-more">
                        <ul>

                            <li class="">
                                <a href="{{ route('page.guide') }}">Guide</a>

                            </li>

                            <li class="">
                                <a href="{{ route('page.faq') }}">FAQ</a>

                            </li>

                        </ul>

                    </div>
                </li>
            </ul>

        </div>
        <div class="navbar-mobile-menu" data-ui="navbar-menu-login">

            <ul>
                @guest
                <li><a href="demo.html#" data-popup-open="#popup-account-login">Log in</a></li>
                <li class="visible-xs visible-sm">
                    <a href="demo.html#" data-popup-open="#popup-account-signup">Sign up</a>
                </li>
                <li class="hidden-xs hidden-sm">
                    <button class="btn btn-plain btn-danger" data-popup-open="#popup-account-signup">Sign up</button>
                </li>
                @endguest
                @auth
                <li><a href="{{ Auth::user()->hasRole('admin') ?  route('admin.index') : route('activity.index') }}">Dashboard</a></li>

                <li><a href="{{ route('logout') }}">Log in</a></li>
                @endauth
            </ul>

        </div>

        <div class="navbar-desktop-menu">
            <ul>

                <li class="">
                    <a href="{{ route('page.about') }}">About</a>

                </li>

                <li class="">
                    <a href="{{ route('page.prices') }}">Prices</a>

                </li>

                <li class="">
                    <a href="{{ route('page.blog') }}">Blog</a>

                </li>

                <li class="more">
                    <a href="{{ route('page.guide') }}">Guide</a>

                </li>

                <li class="more">
                    <a href="{{ route('page.faq') }}">FAQ</a>

                </li>

                <li class="">
                    <a href="demo.html#" data-popup-open="#popup-support">Support</a>

                </li>

                <li class="toggle-more">
                    <a href="demo.html#" class="btn-navbar-menu-more" data-ui-menu-toggle="navbar-menu-more" data-ui-role="dropdown"></a>
                    <div class="navbar-popup-menu" data-ui="navbar-menu-more">
                        <ul>

                            <li class="">
                                <a href="{{ route('page.guide') }}">Guide</a>

                            </li>

                            <li class="">
                                <a href="{{ route('page.faq') }}">FAQ</a>

                            </li>

                        </ul>

                    </div>
                </li>
            </ul>

        </div>
        <div class="navbar-desktop-menu navbar-desktop-menu-right">

            <ul>
                @guest
                    <li><a href="demo.html#" data-popup-open="#popup-account-login">Log in</a></li>
                    <li class="visible-xs visible-sm">
                        <a href="demo.html#" data-popup-open="#popup-account-signup">Sign up</a>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <button class="btn btn-plain btn-danger" data-popup-open="#popup-account-signup">Sign up</button>
                    </li>
                @endguest
                @auth
                    <li><a href="{{ Auth::user()->hasRole('admin') ?  route('admin.index') : route('activity.index') }}">Dashboard</a></li>
                    <li><a href="{{ route('logout') }} " class="btn-plain btn-danger" >Signout</a></li>
                @endauth
            </ul>

        </div>
    </div>
</header>


<div id="popup-support" class="popup">
	<h3>Support</h3>
	<a href="about.html#" class="btn-close-x" data-popup-close="#popup-support"></a>
	<div class="color-gray mb20">
		Please use the form below if you have any questions, comments
		or would like to give us some feedback. Your opinion is very important to us!
	</div>
	<div class="alert alert-info">
		If you have a question or you want to ask about an error,
		please try to find an answer on the <a href="faq.html">FAQ</a> page by yourself at first.
	</div>
	<div class="alerts">
		<div class="alert alert-danger alert-error"></div>
		<div class="alert alert-success"></div>
	</div>
	<form action="/contact" class="form-horizontal form-ajax mt20" method="post">
		<input type="hidden" name="token" value=""/>
		<div class="form-group field-wrap" data-field="subject">
			<div class="col-md-12">
				<label class="control-label text-align-left" for="inpSupportSubject">Subject:</label>
				<select name="subject" id="inpSupportSubject" class="form-control" autofocus>
					
						<option value="question">Question</option>
					
						<option value="error">Error</option>
					
						<option value="idea">Idea</option>
					
						<option value="payment">Payment</option>
					
						<option value="refund">Refund</option>
					
						<option value="discount">Discount</option>
					
						<option value="security">Security</option>
					
						<option value="other">Other</option>
					
				</select>
				<span class="help-block text-danger text-error hidden"></span>
			</div>
		</div>
		<div class="form-group field-wrap" data-field="email">
			<div class="col-md-12">
				<label class="control-label text-align-left" for="inpSupportEmail">Email:</label>
				
				<input type="text" name="email" id="inpSupportEmail"
					   class="form-control" placeholder="Your email"
					   value=""/>
				<span class="help-block text-danger text-error hidden"></span>
			</div>
		</div>
		<div class="form-group field-wrap" data-field="username">
			<div class="col-md-12">
				<label class="control-label text-align-left" for="inpSupportUsername">Username:</label>
				<input type="text" name="username" id="inpSupportUsername"
					   class="form-control" placeholder="Your Instagram username (optional)"
					   value=""/>
				<span class="help-block text-danger text-error hidden"></span>
			</div>
		</div>
		<div class="form-group field-wrap" data-field="message">
			<div class="col-md-12">
				<label class="control-label text-align-left" for="inpSupportMessage">Message:</label>
				<textarea name="message" id="inpSupportMessage" rows="4"
						  class="form-control" placeholder="Your message"></textarea>
				<span class="help-block text-danger text-error hidden"></span>
			</div>
		</div>
		<div>
			<button type="submit" class="btn btn-plain btn-success" data-loading-text="Sending...">Send</button>
		</div>
	</form>
</div>