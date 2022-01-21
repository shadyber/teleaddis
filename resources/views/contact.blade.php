@extends('layouts.app')
@section('title','Contact Us')
@section('content')
    <section class="full-screen fw-main-row fixed-height" style="background-image: url('/images/01.jpg');height:450px;">
        <div class="fw-container centered-container tac">
            <div class="container tac">
                <h2 class="h1 big"><span class="blue-color">Helping You</span><br>Stay Happy One</h2>
                <p>Check Out Our Services!</p>
                <a href="javascript:void(0);" class="button-style1"><span>CHECK OUT</span></a><a href="javascript:void(0);" class="button-style1 dark"><span>more info</span></a>
            </div>
        </div>
    </section>




    <section class="fw-main-row pt40 pb30">
        <div class="fw-container">
            <h2 class="heading-decor">Contacts</h2>
            <div class="fw-row pt10">
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-placeholder-1"></div>
                    <p>4321 Your Address,<br>Country, Postcode</p>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-telephone-1"></div>
                    <p><a href="tel:880023367811">8 800 2336 7811</a><br><a href="tel:898827371132">8 988 2737 1132</a></p>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-envelope"></div>
                    <p><a href="mailto:support@promo-themes.com">support@promo-themes.com</a></p>
                </div>
            </div>
        </div>
    </section>





    <section class="fw-main-row pt40 pb50" style="background-image: url(http://placehold.it/1980x900)">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Working Hours</h2>
            <!-- Week days -->
            <div class="fw-row seven-cols pt20 pb40">
                <div class="fw-col-xs-6 fw-col-sm-14 day-item style1 closed">
                    <div class="circle">
                        <div class="cell">sun</div>
                    </div>
                    <p>Closed</p>
                </div>
                <div class="fw-col-xs-6 fw-col-sm-14 day-item style2">
                    <div class="circle">
                        <div class="cell">mon</div>
                    </div>
                    <p>8:00 AM - 5:00 pM</p>
                </div>
                <div class="fw-col-xs-6 fw-col-sm-14 day-item style3">
                    <div class="circle">
                        <div class="cell">tue</div>
                    </div>
                    <p>8:00 AM - 6:00 pM</p>
                </div>
                <div class="fw-col-xs-6 fw-col-sm-14 day-item style4">
                    <div class="circle">
                        <div class="cell">wed</div>
                    </div>
                    <p>9:30 AM - 5:00 pM</p>
                </div>
                <div class="fw-col-xs-6 fw-col-sm-14 day-item style5">
                    <div class="circle">
                        <div class="cell">thu</div>
                    </div>
                    <p>8:00 AM - 5:00 pM</p>
                </div>
                <div class="fw-col-xs-6 fw-col-sm-14 day-item style6">
                    <div class="circle">
                        <div class="cell">fri</div>
                    </div>
                    <p>9:30 AM - 3:00 pM</p>
                </div>
                <div class="fw-col-xs-6 fw-col-sm-14 day-item style7 closed">
                    <div class="circle">
                        <div class="cell">sat</div>
                    </div>
                    <p>Closed</p>
                </div>
            </div>
            <!-- END Week days -->
        </div>
    </section>




    <section class="fw-main-row pt30 pb45">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Request a Consultation</h2>
            <form action="javascript:void(0);" class="form fw-row">
                <div class="fw-col-sm-6 fw-col-md-3"><input type="text" placeholder="Your Name *" class="style1"></div>
                <div class="fw-col-sm-6 fw-col-md-3"><input type="text" placeholder="Phone number *" class="style1"></div>
                <div class="fw-col-sm-6 fw-col-md-3"><input type="text" placeholder="Your Email *" class="style1"></div>
                <div class="fw-col-sm-6 fw-col-md-3"><input type="text" placeholder="Date &amp; Time for call" class="style1"></div>
                <div class="fw-col-md-12">
                    <textarea placeholder="What is the nature of your appointment and who would you like to see? *" class="style1"></textarea>
                    <div class="tac"><button type="submit" class="button-style1"><span>send request</span></button></div>
                </div>
            </form>
        </div>
    </section>


@endsection
