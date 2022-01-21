@extends('layouts.app')
@section('content')
    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-12 align-content-between">
                    <form action="javascript:void(0);" class="form-subsription">


                        <div class="fw-col-sm-6 fw-col-md-12"><input type="text" placeholder="Your Name *" class="style1"></div>
                        <div class="fw-col-sm-6 fw-col-md-12"><input type="text" placeholder="Your Tel *" class="style1"></div>
                        <div class="fw-col-sm-6 fw-col-md-12"><input type="text" placeholder="Your Email" class="style1"></div>

                        <div class="fw-col-sm-6 fw-col-md-12">
                            <input type="submit" value="Subscribe">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
