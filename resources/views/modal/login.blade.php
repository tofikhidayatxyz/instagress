<div id="popup-account-login" class="popup">
    <h3>Log in</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-account-login"></a>
    @if(\Session::has('login.error'))
    <div class="alert alert-danger">
        {{  \Session::get('login.error') }}
    </div> 
    @endif   
    <form action="{{ route('login') }}"  class="form-horizontal mb0" method="post">
        @csrf
        <div class="form-group field-wrap" data-field="email">
            <div class="col-md-12">
            <input type="email" name="email" id="inpAccountLoginEmail" class="form-control input-icon input-icon-email" placeholder="Email" autofocus value="{{  old('email') }}" />
            @error('email')
            <span class="help-block text-danger text-error">{{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
            <input type="password" name="password" id="inpAccountLoginPassword" class="form-control input-icon input-icon-password" placeholder="Password" />
            @error('password')
            <span class="help-block text-danger text-error">{{ $message }}</span>
            @enderror
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-plain btn-success mb20" data-loading-text="Logging in...">Log in</button>
        </div>
        <div class="mb10">
        <a href="{{ route('password.request') }}">Password reset</a>
        </div>
        <div>
            Don't have an account?
            <a href="#signup" class="link-ajax link-ajax-manifest" data-popup-close="#popup-account-login" data-popup-open="#popup-account-signup">Sign up</a>
        </div>

    </form>
</div>

<div id="popup-account-password-reset" class="popup">
    <h3>Password Reset</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-account-password-reset"></a>
    <div class="color-gray mb20">
        If you forgot your password, request a new one by entering your email address in this form.
    </div>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/account/password/reset" id="account-password-reset-form" class="form-horizontal form-ajax mb0" method="post">
        <div class="form-group field-wrap" data-field="email">
            <div class="col-md-12">
                <input type="email" name="email" id="inpAccountPasswordResetEmail" class="form-control input-icon input-icon-email" placeholder="Email" value="" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-plain btn-success" data-loading-text="Sending request...">Send request</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(() => {
        let hash = window.location.hash
        if(hash === '#login') {
             $('*[data-popup-open="#popup-account-login"]').trigger('click')
        } else if (hash === '#signup') {
            $('*[data-popup-open="#popup-account-signup"]').trigger('click')
        }
    })

    $('.btn-close-x').click(() => {
        $('#popup-shadow').remove();
        window.location.hash = ''
    })
    $('.link-ajax-manifest').click(event => {
        event.preventDefault;
        let rel = event.currentTarget.getAttribute('data-popup-open');
        window.location.hash = rel
    })


</script>