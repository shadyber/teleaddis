
<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="/">
                                <img src="assets/images/logo/logo.png" class="img-fluid" alt="">
                                <p class="text-white">MT ICT Technology Plc.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-end">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="/">{{__('Home')}}</a>

                    </li>
                    <li><a href="/about"><span>{{__('About')}}</span></a></li>
                    <li class="has-children">
                        <a href="#">{{__('Articles')}}</a>
                        <ul class="sub-menu">
                            @foreach(\App\Models\BlogCategory::allCategories() as $cat)
                            <li><a href="/cat/{{$cat->slug}}"><span>{{$cat->title}}</span></a> </li>
                                @endforeach

                        </ul>
                    </li>

                    <li><a href="/contact"><span>{{__('Contact')}} </span></a></li>
                    <li class="has-children">
                        <a class="has-children" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <ul class="sub-menu">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->

