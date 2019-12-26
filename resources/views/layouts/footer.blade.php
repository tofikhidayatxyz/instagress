<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ URL::to('/') }}" class="logo-footer-new">
                    <img src="{{ asset('img/instagress-logo-footer-v=203.png') }}" alt="Instagress" />
                </a>
                <div class="copyright">&copy; 2013-2016</div>
            </div>
            <div class="col-md-6 menu-cont">
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

                <ul class="menu-cont-second">

                    <li class="">
                        <a href="{{ route('page.terms') }}">Terms of Service</a>

                    </li>

                    <li class="">
                        <a href="{{ route('page.privacy') }}">Privacy Policy</a>

                    </li>

                </ul>
            </div>
            <div class="col-md-3">
                <div class="social-icons clearfix">
                    <a href="" class="mr5" target="_blank" title="Follow us on Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="" class="mr5" target="_blank" title="Follow us on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="" class="mr5" target="_blank" title="Follow us on Google+">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="" target="_blank" title="Follow us on Tumblr">
                        <i class="fa fa-tumblr"></i>
                    </a>
                </div>
                <div class="support">
                    <a href="mailto:support@instagressalternative.com">support@instagressalternative.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>