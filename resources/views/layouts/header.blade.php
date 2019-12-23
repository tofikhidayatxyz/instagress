<header>

    <div class="container navbar-main">
    <a href="{{ URL::to('/') }}" class="logo-new">
            <img src="{{ asset('img/instagress-logo-v=203.png') }}" srcset="{{ asset('/img/instagress-logo-2x.png?v=203 2x') }}" alt="Instagress" />
        </a>

        <a href="demo.html#" class="btn-navbar-menu" data-ui-menu-toggle="navbar-menu"></a>
        <a href="demo.html#" class="btn-navbar-menu-login" data-ui-menu-toggle="navbar-menu-login"></a>

        <div class="navbar-mobile-menu" data-ui="navbar-menu">
            <ul>

                <li class="">
                    <a href="../about.html">About</a>

                </li>

                <li class="">
                    <a href="../prices.html">Prices</a>

                </li>

                <li class="">
                    <a href="../blog.html">Blog</a>

                </li>

                <li class="more">
                    <a href="../guide.html">Guide</a>

                </li>

                <li class="more">
                    <a href="../faq.html">FAQ</a>

                </li>

                <li class="">
                    <a href="demo.html#" data-popup-open="#popup-support">Support</a>

                </li>

                <li class="toggle-more">
                    <a href="demo.html#" class="btn-navbar-menu-more" data-ui-menu-toggle="navbar-menu-more" data-ui-role="dropdown"></a>
                    <div class="navbar-popup-menu" data-ui="navbar-menu-more">
                        <ul>

                            <li class="">
                                <a href="../guide.html">Guide</a>

                            </li>

                            <li class="">
                                <a href="../faq.html">FAQ</a>

                            </li>

                        </ul>

                    </div>
                </li>
            </ul>

        </div>
        <div class="navbar-mobile-menu" data-ui="navbar-menu-login">

            <ul>
                <li><a href="demo.html#" data-popup-open="#popup-account-login">Log in</a></li>
                <li class="visible-xs visible-sm">
                    <a href="demo.html#" data-popup-open="#popup-account-signup">Sign up</a>
                </li>
                <li class="hidden-xs hidden-sm">
                    <button class="btn btn-plain btn-danger" data-popup-open="#popup-account-signup">Sign up</button>
                </li>
            </ul>

        </div>

        <div class="navbar-desktop-menu">
            <ul>

                <li class="">
                    <a href="../about.html">About</a>

                </li>

                <li class="">
                    <a href="../prices.html">Prices</a>

                </li>

                <li class="">
                    <a href="../blog.html">Blog</a>

                </li>

                <li class="more">
                    <a href="../guide.html">Guide</a>

                </li>

                <li class="more">
                    <a href="../faq.html">FAQ</a>

                </li>

                <li class="">
                    <a href="demo.html#" data-popup-open="#popup-support">Support</a>

                </li>

                <li class="toggle-more">
                    <a href="demo.html#" class="btn-navbar-menu-more" data-ui-menu-toggle="navbar-menu-more" data-ui-role="dropdown"></a>
                    <div class="navbar-popup-menu" data-ui="navbar-menu-more">
                        <ul>

                            <li class="">
                                <a href="../guide.html">Guide</a>

                            </li>

                            <li class="">
                                <a href="../faq.html">FAQ</a>

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
                    <li><a href="{{ route('logout') }} " class="btn-plain btn-danger" >Signout</a></li>
                @endauth
            </ul>

        </div>
    </div>
</header>