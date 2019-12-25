
<div id="popup-account-signup" class="popup">
    <h3>Sign up</h3>
    <a href="demo.html#" class="btn-close-x" data-popup-close="#popup-account-signup"></a>
    <form action="{{ route('register') }}" class="form-horizontal mb0" method="post">
        @csrf
        <div class="form-group field-wrap" data-field="email">
            <div class="col-md-12">
            <input type="email" name="email" id="inpAccountSignupEmail" class="form-control input-icon input-icon-email" placeholder="Email" autofocus value="{{ old('email') }}"/>
                @error('email')
                <span class="help-block text-danger text-error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group field-wrap" data-field="name">
            <div class="col-md-12">
                <input type="text" name="name" id="name" class="form-control input-icon input-icon-email" placeholder="Username" autofocus value="{{ old('name') }}"/>
                @error('name')
                <span class="help-block text-danger text-error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
                <input type="password" name="password" id="inpAccountSignupPassword" class="form-control input-icon input-icon-password" placeholder="Password" />
                @error('password')
                <span class="help-block text-danger text-error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password_confirmation">
            <div class="col-md-12">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-icon input-icon-password" placeholder="Password Confirmation" />
                @error('password_confirmation')
                <span class="help-block text-danger text-error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-plain btn-success mb20" data-loading-text="Signing up...">Sign up</button>
        </div>
        <div class="mb10">
            By signing up, you agree to the <a href="{{ route('page.terms') }}">Terms of Service</a>.
        </div>
        <div>
            Already have an account?
            <a href="demo.html#" class="link-ajax" data-popup-close="#popup-account-signup" data-popup-open="#popup-account-login">Log in</a>
        </div>

    </form>
</div>

