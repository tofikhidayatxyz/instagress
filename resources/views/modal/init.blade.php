<div id="popup-alert" class="popup popup-small">
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-alert"></a>
    <div class="text"></div>
</div>

<div id="popup-support" class="popup">
    <h3>Support</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-support"></a>
    <div class="color-gray mb20">
        Please use the form below if you have any questions, comments or would like to give us some feedback. Your opinion is very important to us!
    </div>
    <div class="alert alert-info">
        If you have a question or you want to ask about an error, please try to find an answer on the <a href="../faq.html">FAQ</a> page by yourself at first.
    </div>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/contact" class="form-horizontal form-ajax mt20" method="post">
        <input type="hidden" name="token" value="" />
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

                <input type="text" name="email" id="inpSupportEmail" class="form-control" placeholder="Your email" value="" />
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="username">
            <div class="col-md-12">
                <label class="control-label text-align-left" for="inpSupportUsername">Username:</label>
                <input type="text" name="username" id="inpSupportUsername" class="form-control" placeholder="Your Instagram username (optional)" value="" />
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="message">
            <div class="col-md-12">
                <label class="control-label text-align-left" for="inpSupportMessage">Message:</label>
                <textarea name="message" id="inpSupportMessage" rows="4" class="form-control" placeholder="Your message"></textarea>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-plain btn-success" data-loading-text="Sending...">Send</button>
        </div>
    </form>
</div>

<div id="popup-login" class="popup">
    <h3>

        Sign in with Instagram Account

</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-login"></a>
    <div class="alert alert-success">

        <strong>Your account security is very important to us!</strong>
        <br/> We will not store your password after this sign in process. The&nbsp;password is required to establish connection with Instagram. Please, read our <a href="../guide.html">Guide</a> before sign in.

    </div>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/auth/login" id="login-form" class="form-horizontal form-ajax mb0 js-ig-auth-form" method="post">
        <div class="form-group field-wrap" data-field="username">
            <div class="col-md-12">
                <input type="text" name="username" id="inpLoginUsername" class="form-control input-icon input-icon-username" placeholder="Instagram username" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
                <input type="password" name="password" id="inpLoginPassword" class="form-control input-icon input-icon-password" placeholder="Instagram password" />
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <input type="hidden" name="ap1" value="" />
            <input type="hidden" name="ap2" value="" />
            <button type="submit" class="btn btn-plain btn-success mb20" data-loading-text="Signing in...">Sign in</button>
        </div>

        <div class="mb10">
            By signing in, you agree to the
            <a href="../terms.html">Terms of Service</a>.
        </div>

        <div>
            Unable to sign in?
            <a href="demo.html#" class="link-ajax" data-popup-open="#popup-login-help">Sign in help</a>
        </div>

        <hr/>
        <div class="color-gray -mb20">
            <strong>New!</strong> Want to get more benefits from Instagress? Have more than one Instagram account?
            <a href="demo.html#" class="link-ajax" data-popup-close="#popup-login" data-popup-open="#popup-account-signup">
                Sign up for your personal Instagress account</a> to get access to the New Dashboard for multiple accounts — it's free!

        </div>

    </form>
</div>

<div id="popup-login-help" class="popup">
    <h3>Sign in Help</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-login-help"></a>
    <div class="mb20">
        <p>
            Having trouble logging in with your Instagram credentials? These can be the possible reasons:
        </p>
        <ul class="nice-list">
            <li>
                <p><strong>Wrong username or password</strong></p>
                <p>
                    Check that you have not misspelled your username or password. Please, note that you should enter your username without @ symbol before it.
                </p>
            </li>
            <li>
                <p><strong>Integrity checkpoint</strong></p>
                <p>
                    This error means that Instagram is asking you to verify your account. You must be logged in on Instagram website with your Instagram account to do it.
                </p>
            </li>
            <li>
                <p><strong>Instagram login error</strong></p>
                <p>
                    It looks like Instagram requires to additionally verify your account. There could be several verification options. Please, login on Instagram website using your credentials to complete additional verification.
                </p>
            </li>
            <li>
                <p><strong>Instagram password reset</strong></p>
                <p>
                    In rare cases Instagram can reset your password when you're trying to login on third-party website. Go to your email (associated with your Instagram account) and check your inbox/spam folders for a message from Instagram with password reset link.
                </p>
            </li>
        </ul>
        <p>
            If you will continue to receive any login errors, please
            <a href="demo.html#" class="link-ajax" data-popup-open="#popup-support">contact&nbsp;us</a>.
        </p>
    </div>
    <div class="text-align-center">
        <button class="btn btn-plain" data-popup-close="#popup-login-help">Close</button>
    </div>
</div>

<div id="popup-reauth" class="popup">
    <h3>Account Reconnect</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-reauth"></a>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/auth/login?mode=reauth&next=/activity/demo" id="reauth-form" class="form-horizontal form-ajax mb0 js-ig-auth-form" method="post">
        <div class="form-group field-wrap" data-field="username">
            <div class="col-md-12">
                <input type="text" name="username" id="inpReauthUsername" class="form-control input-icon input-icon-username" placeholder="Instagram username" />
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
                <input type="password" name="password" id="inpReauthPassword" class="form-control input-icon input-icon-password" placeholder="Instagram password" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <input type="hidden" name="ap1" value="" />
            <input type="hidden" name="ap2" value="" />
            <button type="submit" class="btn btn-plain btn-success mb20" data-loading-text="Signing in...">Sign in</button>
        </div>
        <div>
            <a href="demo.html#" class="link-ajax" data-popup-open="#popup-login-help">Sign in help</a>
        </div>
    </form>
</div>


<div id="popup-account-required" class="popup">
    <h3>Dashboard Account</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-account-required"></a>
    <p>
        Please, create your personal Instagress Dashboard account because we've switched to a new login system to provide better services and continue to integrate more new features.
    </p>
    <p>
        You will be able to add all your Instagram usernames with your time, settings and all other data to your personal Instagress account.

    </p>
    <p>
        With Instagress account you will be able to use our most notable features:
        <a href="../blog/dashboard.html">Dashboard for multiple usernames</a>,
        <a href="../blog/the-new-payment-system.html">New Payment System</a>,
        <a href="../blog/quantity-discount.html">Quantity Discount</a>,
        <a href="../blog/time-transfer.html">Time Transfer</a>,
        <a href="../blog/protected-time-transfer.html">Protected Time Transfer</a> and more other new and upcoming features.
    </p>
    <p>
        It's completely FREE and easy: just use your email or sign up with Facebook or Google.
    </p>
    <div class="text-align-center mt30">

        <div class="row mb20">
            <div class="col-sm-6 pr10-sm-min">
                <a href="https://instagressalternative.com/account/signin/fb" class="btn btn-plain btn-fb btn-responsive">
                    <i class="fa fa-facebook-square fa-lg mr5"></i> Sign up with Facebook
                </a>
            </div>
            <div class="col-sm-6 pl10-sm-min mt15-xs-max">
                <a href="https://instagressalternative.com/account/signin/gl" class="btn btn-plain btn-gl btn-responsive">
                    <i class="fa fa-google-plus-square fa-lg mr5"></i> Sign up with Google
                </a>
            </div>
        </div>
        <div class="dividing-line dividing-line-popup">
            <hr>
            <span>or</span>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <button class="btn btn-plain btn-success btn-responsive" data-popup-close="#popup-account-required" data-popup-open="#popup-account-signup">Sign up with email</button>
            </div>
        </div>
    </div>
</div>


@include('modal.signup')
@include('modal.login')