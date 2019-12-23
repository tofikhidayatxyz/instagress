<div id="popup-login" class="popup">
    <h3>

        Sign in with Instagram Account

</h3>
    <a href="index.html#" class="btn-close-x" data-popup-close="#popup-login"></a>
    <div class="alert alert-success">

        <strong>Your account security is very important to us!</strong>
        <br/> We will not store your password after this sign in process. The&nbsp;password is required to establish connection with Instagram. Please, read our <a href="guide.html">Guide</a> before sign in.

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
            <a href="terms.html">Terms of Service</a>.
        </div>

        <div>
            Unable to sign in?
            <a href="index.html#" class="link-ajax" data-popup-open="#popup-login-help">Sign in help</a>
        </div>

        <hr/>
        <div class="color-gray -mb20">
            <strong>New!</strong> Want to get more benefits from Instagress? Have more than one Instagram account?
            <a href="index.html#" class="link-ajax" data-popup-close="#popup-login" data-popup-open="#popup-account-signup">
                Sign up for your personal Instagress account</a> to get access to the New Dashboard for multiple accounts — it's free!

        </div>

    </form>
</div>