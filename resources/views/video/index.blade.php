@extends('layouts.app')
@section('title','Videos Index')
@section('content')

    <div class="container pt-120 pb-90">


        @foreach($videos->chunk(3) as $chunk)

            <div class="row">
                @foreach($chunk as $video)
                    <div class="col-md-4 col-sm-6">
                        <!-- Post -->
                        <div class="post-default">
                            <div class="post-thumb">
                                <a href="/video/{{$video->slug}}">
                                    <img src="{{$video->thumb_small}}" alt="{{$video->title}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-data">
                                <!-- Category -->
                                <div class="cats"><a href="/category/{{$video->category->slug}}"> {{$video->category->title}} </a></div>
                                <!-- Title -->
                                <div class="title">
                                    <h2><a href="/video/{{$video->slug}}">{{$video->title}}</a></h2>
                                </div>
                                <!-- Post Desc -->
                                <div class="desc">
                                    <p>
                                        {{ substr(strip_tags($video->detail),0,70 ) }}...
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End of Post -->
                    </div>

                @endforeach
            </div>
    @endforeach



    <!-- Post Pagination -->
        <div class="post-pagination d-flex justify-content-center">

            {{ $videos->links('vendor.pagination.bootstrap-4') }}

        </div>
        <!-- End of Post Pagination -->
    </div>




@endsection
