

<!--======  footer area =======-->
<footer class="footer-area footer-four">

    <div class="footer-mid-area">
        <div class="container">
            <div class="row footer-four-border">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 footer-border">
                    <div class="single-footer-menu-item footer-item-space">
                        <div class="footer-widget-title">
                            <h4 class="title">TeleAddis</h4>
                        </div>
                        <ul class="footer-widget-menu-list">
                            <li><a href="/terms">Privacy Policy</a></li>
                            <li><a href="/terms">Terms & Conditions</a></li>
                            <li><a href="/faq">Course FAQ’s</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 footer-border">
                    <div class="single-footer-menu-item footer-item-space">
                        <div class="footer-widget-title">
                            <h4 class="title">Categories</h4>
                        </div>
                        <ul class="footer-widget-menu-list">
                            @foreach(\App\Models\BlogCategory::allCategories() as $category)
                            <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 footer-border">
                    <div class="single-footer-menu-item footer-item-space">
                        <div class="footer-widget-title">
                            <h4 class="title">{{__('All')}} {{__('Resource')}}</h4>
                        </div>
                        <ul class="footer-widget-menu-list">
                            <li><a href="/video">__{{__('videos')}}</a></li>
                            <li><a href="/blog">{{__('Articles')}}</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 offset-xl-1 col-md-6 col-sm-6 footer-border">
                    <div class="footer-widget footer-item-space">
                        <div class="footer-logo">
                            <a href="/">
                                <img src="/assets/images/logo/logo-4.png" alt="">
                            </a>
                        </div>
                        <p>
                            About Us
                        </p>
                        <ul class="footer-socail-share">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-skype"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-widget-top">
                        <div class="info-text-box">
                            <h6 class="sub-title">ALL SOLUTION IN ONE</h6>
                            <h3 class="title">Unlimited Advice, Tutorial & Resource</h3>
                        </div>

                        <div class="button-right-box mb-20">
                            <a href="#!" class="btn-primary btn-bg-white btn-large">Share your thinking <i class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right-center">
                        <p>© 2022 <a href="#">teleAddis</a>. Made with ❤️ by <a target="_blank" rel="noopener" href="https://rootsystemset.com">r∞t system</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=====  End of footer area ========-->



