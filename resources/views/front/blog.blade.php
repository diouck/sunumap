@extends('front.layout')

@section('main')

     <!--start wrapper-->
    <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Blog</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Accueil</a>/</li>
                                <li>Blog</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


 <section class="content blog masonry_blog">
        <div class="container">
            <div class="mixed-container masonry_wrapper_blog row wow fadeInUp">

@foreach ($post->categories as $category)
                                                <span><i class="fa fa-star"><a href="{{ route('category', [$category->slug]) }}">{{ $category->title }}</i></a></span>
                                              @endforeach


                                              



            <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                            <img src="http://sunumap.oo/images/blog/blog_1.png" alt="" class="img-responsive">
                        </div>
                        <div class="metaInfo">
                            <span><i class="fa fa-calendar"></i> <a href="#">Nov 01, 2015</a> </span>
                            <span><i class="fa fa-tag"></i> <a href="#">Design</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">18 Comments</a></span>
                        </div><!-- end meta -->

                        <div class="blog-title">
                            <h2><a href="blog-post.html" title="">Vivamus gravida vitae turpis nec tempor. </a></h2>
                        </div><!-- end title -->

                        <div class="blog-desc">
                            <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>

                        </div><!-- end desc -->

                        <div class="blog-button">
                            <a class="btn btn-small btn-default" href="blog-post.html">Read More</a>
                        </div><!-- end button -->
                    </div><!-- end blog -->
                </div><!-- end item -->

              </div>
            </div>
             <div class="text-center"> {!! $posts->render()!!}</div>
          </section>
        </section>

 
            
    

@endsection
