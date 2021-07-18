@extends('layouts.app')

@section('title',$blog->title)
@section('image','https://teleAddis.com/'.$blog->photo)
@section('detail',$blog->detail)

@section('content')

    <div class="blog-details-wrapper section-space--ptb_80">
        <div class="container">
            <div class="row row--17">
                <div class="blog-details-col-8">
                    <!-- blog details Post Start -->
                    <div class="blog-details-post-wrap">
                        <div class="blog-details-thum">
                            <img src="{{$blog->photo}}" alt="{{$blog->title}}">
                        </div>
                        <div class="blog-details-post-content">
                            <div class="blog-details-meta-box">
                                <div class="post-meta-left-side mb-2">
                                    <div class="trending-blog-post-category">
                                        <a href="#">{{$blog->Category->title}}</a>
                                    </div>
                                    <div class="following-blog-post-author">
                                        By <a href="#">{{$blog->user->name}}</a>
                                    </div>
                                </div>

                                <div class="post-mid-side mb-2">
                                            <span class="post-meta-left-side">
                                            <span class="post-date">
                                                <i class="icofont-ui-calendar"></i>
                                                <a href="#">{{$blog->created_at->diffForHumans()}}</a>
                                            </span>
                                            </span>
                                    <span>10 min read</span>
                                </div>

                                <div class="post-meta-right-side mb-2">
                                    <a href="#"><img src="/assets/images/icons/small-bookmark.png" alt=""></a>
                                    <a href="#"><img src="/assets/images/icons/heart.png" alt=""></a>
                                </div>
                            </div>
                            <h3 class="following-blog-post-title">
                                <a href="#">{{$blog->title}}
                                </a>
                            </h3>
                            <div class="post-details-text">
                                {!! $blog->detail !!}
                            </div>
                             <!-- Comment Area Start -->
                            <div class="comment-area section-space--pt_60">
                              <div class="section-title">  <h3>Comments</h3></div>

                                @foreach($blog->blogComments as $comment)


                                    <li class="single-comment-wrapper">
                                        <!-- Single Comment -->
                                        <div class="single-post-comment">
                                            <!-- Author Image -->
                                            <div class="comment-author-image">
                                                <img src="{{$comment->user->photo}}" alt="{{$comment->user->photo}}" class="img-fluid" width="72px">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <div class="comment-author-name">
                                                    <h6>{{$comment->user->name}}</h6> <span> {{$comment->created_at->diffForHumans()}} </span>
                                                </div>
                                                <p>{{$comment->comment}}</p>
                                                <a href="#" class="reply-btn">Reply</a>
                                            </div>
                                        </div>
                                        <!-- End of Single Comment -->
                                        <ul class="children hidden">
                                            <li class="single-comment-wrapper">
                                                <!-- Single Comment -->
                                                <div class="single-post-comment">
                                                    <!-- Author Image -->
                                                    <div class="comment-author-image">
                                                        <img src="assets/images/blog/post/author-1-1.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <!-- Comment Content -->
                                                    <div class="comment-content">
                                                        <div class="comment-author-name">
                                                            <h6>Helen Sharp</h6> <span> 5 Jan 2019 at 6:58 pm </span>
                                                        </div>
                                                        <p>On recommend tolerably my belonging or am. Mutual has cannot back beauty indeed now back sussex merely you. </p>
                                                        <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div>
                                                <!-- End of Single Comment -->
                                            </li>
                                        </ul>
                                    </li>


                                @endforeach

                                <div class="section-title">
                                    <h3 class="title">Leave a comment</h3>
                                </div>
                                @auth
                                    <form action="/comment" method="post" class="comment-form-area">
                                        @csrf

                                        <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <input type="text" class="single-input" name="name" placeholder="Name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <input type="email" class="single-input" placeholder="Email" name="email" placeholder="Email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input">
                                                <textarea name="textarea" placeholder="Massage"  name="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="submit-button text-center">
                                                <button class="btn-large btn-primary" type="submit"> Submit Now <i class="icofont-long-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endauth

                                @guest
                                    <a href="/login"> Login  </a>or |<a href="/register">Register </a> for Comment
                                @endguest

                            </div>
                            <!-- Comment Area End -->


                        </div>
                    </div><!-- blog details Post End -->
                </div>
                <div class="blog-details-col-4">
                    <div class="following-author-area">
                        <div class="author-image">
                            <img src="assets/images/author/author-01.png" alt="">
                        </div>
                        <div class="author-title">
                            <h4><a href="#">TeleAddis</a></h4>
                            <p>Author, Super Admin</p>
                        </div>
                        <div class="author-details">
                            <p>Teleaddis provide daily update on technology .</p>

                            <div class="author-post-share">
                                <ul class="social-share-area">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>

                            <div class="button-box">
                                <a href="#" class="btn">View Profile <i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Category Area Start -->
                    <div class="blog-details-category-area mt-5">
                       @foreach(\App\Models\BlogCategory::allCategories() as $category)
                        <a class="single-hero-category-item">
                            <img src="{{$category->icon}}" alt="">
                            <div class="hero-category-inner-box">
                                <h3 class="title">{{$category->title}}</h3>
                                <i class="icon icofont-long-arrow-right"></i>
                            </div>
                        </a>
                        @endforeach

                    </div><!-- Hero Category Area End -->

                    <!-- Latest Post Area Start -->
                    <div class="latest-post-inner-wrap mt-5">
                        <div class="latest-post-header">
                            <div class="section-title">
                                <h4>Latest Post</h4>
                            </div>
                            <div class="latest-post-slider-navigation">
                                <div class="latest-post-button-prev navigation-button" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a1092155aa14feb9d"><i class="icofont-long-arrow-left"></i></div>
                                <div class="latest-post-button-next navigation-button" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a1092155aa14feb9d"><i class="icofont-long-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-container latest-post-slider-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-a1092155aa14feb9d" aria-live="polite" style="transform: translate3d(-285px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 285px;">
                                    <div class="latest-post-box">

                                      @foreach(\App\Models\Blog::lastN(5) as $post)
                                        <!-- Single Latest Post Start -->
                                        <div class="single-latest-post">
                                            <div class="latest-post-thum">
                                                <a href="#">
                                                    <img src="{{$post->thumb}}" alt="{{$post->title}}">
                                                </a>
                                            </div>
                                            <div class="latest-post-content">
                                                <h6 class="title"><a href="#!">{{$post->title}}</a>
                                                </h6>
                                                <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                        </span>
                                                    <span>10 min read</span>
                                                </div>
                                            </div>
                                        </div><!-- Single Latest Post End -->
                                      @endforeach

                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active swiper-slide-duplicate-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="2 / 3" style="width: 285px;">
                                    <div class="latest-post-box">

                                    @foreach(\App\Models\Blog::popularN(5) as $post)
                                        <!-- Single Latest Post Start -->
                                            <div class="single-latest-post">
                                                <div class="latest-post-thum">
                                                    <a href="#">
                                                        <img src="{{$post->thumb}}" alt="{{$post->title}}">
                                                    </a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h6 class="title"><a href="#!">{{$post->title}}</a>
                                                    </h6>
                                                    <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                        </span>
                                                        <span>10 min read</span>
                                                    </div>
                                                </div>
                                            </div><!-- Single Latest Post End -->
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="3 / 3" style="width: 285px;">
                                    <div class="latest-post-box">

                                    @foreach(\App\Models\Blog::trandinN(5) as $post)
                                        <!-- Single Latest Post Start -->
                                            <div class="single-latest-post">
                                                <div class="latest-post-thum">
                                                    <a href="#">
                                                        <img src="{{$post->thumb}}" alt="{{$post->title}}">
                                                    </a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h6 class="title"><a href="#!">{{$post->title}}</a>
                                                    </h6>
                                                    <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                        </span>
                                                        <span>10 min read</span>
                                                    </div>
                                                </div>
                                            </div><!-- Single Latest Post End -->
                                        @endforeach
                                    </div>
                                </div></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                    </div> <!-- Latest Post Area End -->

                    <!-- Stay In Touch Area Start -->
                    <div class="stay-in-touch-area mt-5">
                        <div class="section-title">
                            <h3>Stay In Touch</h3>
                        </div>
                        <div class="stay-in-touch-box">
                            <div class="single-touch-col">
                                <a href="#!" class="single-touch facebook">
                                    <div class="touch-socail-icon">
                                        <i class="icofont-facebook"></i>
                                    </div>
                                    <p class="touch-title">5,685K</p>
                                </a>
                            </div>
                            <div class="single-touch-col">
                                <a href="#!" class="single-touch twitter">
                                    <div class="touch-socail-icon">
                                        <i class="icofont-twitter"></i>
                                    </div>
                                    <p class="touch-title">6,97K+</p>
                                </a>
                            </div>
                            <div class="single-touch-col">
                                <a href="#!" class="single-touch behance">
                                    <div class="touch-socail-icon">
                                        <i class="icofont-behance"></i>
                                    </div>
                                    <p class="touch-title">6,97K+</p>
                                </a>
                            </div>
                            <div class="single-touch-col">
                                <a href="#!" class="single-touch youtube">
                                    <div class="touch-socail-icon">
                                        <i class="icofont-youtube-play"></i>
                                    </div>
                                    <p class="touch-title">5,685K</p>
                                </a>
                            </div>
                            <div class="single-touch-col">
                                <a href="#!" class="single-touch dribbble">
                                    <div class="touch-socail-icon">
                                        <i class="icofont-dribbble"></i>
                                    </div>
                                    <p class="touch-title">6,97K+</p>
                                </a>
                            </div>
                            <div class="single-touch-col">
                                <a href="#!" class="single-touch linkedin">
                                    <div class="touch-socail-icon">
                                        <i class="icofont-linkedin"></i>
                                    </div>
                                    <p class="touch-title">6,97K+</p>
                                </a>
                            </div>
                        </div>
                    </div> <!-- Stay In Touch Area End -->


                </div>
            </div>

        </div>
    </div>

@endsection
