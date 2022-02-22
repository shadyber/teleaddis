


<!--========  header area =========-->
<header class="header-four position--absolute">

    <div class="header-bottom-area">
        <div class="container">
            <div class="header-style-center">
                <div class="logo">
                    <a href="/">
                        <img src="/assets/images/logo/logo-4.png" alt="" />
                    </a>
                </div>
                <div class="main-menu-area text-center">
                    <nav class="navigation-menu navigation-menu-white">
                        <ul>
                            <li class="active">
                                <a href="/"><span>{{__('Home')}}</span></a>

                            </li>
                            <li>
                                <a href="/about"><span>{{__('About')}}</span></a>
                            </li>
                            <li class="has-children"><a href="/blog"><span>{{__('Articles')}}</span></a>
                                <ul class="submenu">
                                    <li><a href="/blog"><span>{{__('All')}} {{__('Articles')}}</span></a> </li>
                                    @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                    <li><a href="/category/{{$category->slug}}"><span>{{$category->title}}</span></a> </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="">
                                <a href="/video"><span>{{__('Videos')}}</span></a>

                            </li>
                            <li><a href="/contact"><span>{{__('Contact')}} </span></a></li>
                            <li class="has-children">
                                <a class="" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Config::get('languages')[App::getLocale()] }}
                                </a>
                                <div class="submenu"  >
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-four-right-side">
                    <div class="d-sm-block d-none">
                        <a href="#!" class="single-action-item">
                            <span class="new-notification"></span>
                            <img src="/assets/images/icons/notification-white.png" alt="">
                        </a>
                    </div>

                    @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/home') }}" class="sign-up-action-button btn-medium btn">{{__('Home')}}</a>
                            <a href="{{route('logout')}}"><span class="fa-power-off"></span></a>
                        @else
                            <a href="{{ route('login') }}" class="sign-up-action-button btn-medium btn">{{__('Login')}}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="sign-up-action-button btn-medium btn">{{__('Register')}}</a>
                        @endif
                    @endauth

                @endif

                <!-- mobile menu -->
                    <div class="mobile-navigation-icon icon-white d-block d-lg-none" id="mobile-menu-trigger">
                        <i></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--======== End of header area  =========-->


