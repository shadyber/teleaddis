

<!--======  footer area =======-->
<footer class="footer-area footer-four">

    <div class="footer-mid-area">
        <div class="container">
            <div class="row footer-four-border">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 footer-border">
                    <div class="single-footer-menu-item footer-item-space">
                        <div class="footer-widget-title">
                            <h4 class="title">Company</h4>
                        </div>
                        <ul class="footer-widget-menu-list">
                            <li><a href="/privacy.html">Privacy Policy</a></li>
                            <li><a href="#!">Discussion</a></li>
                            <li><a href="/terms">Terms & Conditions</a></li>
                            <li><a href="/support">Customer Support</a></li>
                            <li><a href="/faq">Course FAQ’s</a></li>
                            <li><a href="/aboutus">About Us</a></li>
                            <li><a href="/contactus">Contact Us</a></li>
                            <li><a href="/adspolicy">Local Print Ads</a></li>
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
                            <h4 class="title">All Resource</h4>
                        </div>
                        <ul class="footer-widget-menu-list">
                            <li><a href="#!">Basic Features</a></li>
                            <li><a href="#!">Advanced Features</a></li>
                            <li><a href="#!">Enterprise Hosting</a></li>
                            <li><a href="#!">Agency Hosting</a></li>
                            <li><a href="#!">Multisite Hosting</a></li>
                            <li><a href="#!">WordPress Hosting</a></li>
                            <li><a href="#!">Magento Hosting</a></li>
                            <li><a href="#!">Laravel Hosting</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 offset-xl-1 col-md-6 col-sm-6 footer-border">
                    <div class="footer-widget footer-item-space">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo-4.png" alt="">
                            </a>
                        </div>
                        <p>Lorem Ipsum is simply dummy text
                            the printing and typesetting industry
                            has been the industry's standard
                            text ever since.
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
                        <p>© 2021 <a href="#">teleAddis</a>. Made with ❤️ by <a target="_blank" rel="noopener" href="https://rootsystem.info/">teleAddiss</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=====  End of footer area ========-->


