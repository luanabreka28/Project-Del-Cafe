<header class="header clearfix element_to_stick">
    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
    <div class="container-fluid">
        <div id="logo">
            <a href="{{ route('user.home.index') }}">
                <img src="{{asset('img/logo.png')}}" alt="" class="logo_normal">
                <img src="{{asset('img/logo.png')}}"  alt="" class="logo_sticky">
            </a>
        </div>
        <!-- /top_menu -->
        <a href="#0" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a>
        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <a href="{{ route('user.home.index') }}"><img src="{{asset('img/logo.png')}}"  width="150" height="80" alt=""></a>
            </div>
            <ul>
                <li><a href="{{ route('user.home.index') }}">Home</a></li>
                <li><a href="{{ route('user.comment.index') }}">Komentar</a></li>
                <li><a href="{{ route('user.about.index') }}">Profil</a></li>
                <li><a href="{{ route('user.voucher.index') }}">Voucher</a></li>
                <li><a href="{{ route('user.auth.logout') }}" class="btn_top">Log Out</a></li>
            </ul>
        </nav>
    </div>
</header>