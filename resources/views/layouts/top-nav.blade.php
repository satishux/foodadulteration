<div class="right-sec clearfix">
    <div class="menu-container">
        <nav class="main-nav style5 active-style4 red-active">
            <ul class="clearfix">
                <li class="{{ Active::route('pages.home', 'active') }}">
                    <a href="{{ route('pages.home') }}">Home</a>
                </li>
                <li class="{{ Active::route('pages.browse', 'active') }}">
                    <a href="{{ route('pages.browse') }}">Browse</a>
                </li>
                <li class="{{ Active::route('pages.submission', 'active') }}">
                    <a href="{{ route('pages.submission') }}">Submission</a>
                </li>
                <li class="{{ Active::route('pages.about', 'active') }}">
                    <a href="{{ route('pages.about') }}">About Us</a>
                </li>
                <li class="{{ Active::route('pages.contact', 'active') }}">
                    <a href="{{ route('pages.contact') }}">Contact Us</a>
                </li>
                <li class="{{ Active::route('auth.login', 'active') }}">
                    <a href="{{ route('auth.login') }}">Login</a>
                </li>
            </ul>
        </nav>
    </div><!-- /menu-container -->
</div>