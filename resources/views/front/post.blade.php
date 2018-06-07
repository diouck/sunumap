@extends('front.layout')

@section('css')
    @if (Auth::check())
        <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
    @endif
@endsection

@section('main')

   <!--start wrapper-->
    <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Sidebar Right</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a>/</li>
                                <li>Pages</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="content right_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="blog_large">
                            <article class="post">
                                 @isset($info)
                @component('front.components.alert')
                    @slot('type')
                        info
                    @endslot
                    {!! $info !!}
                @endcomponent
            @endisset
            @if ($errors->has('search'))
                @component('front.components.alert')
                    @slot('type')
                        error
                    @endslot
                    {{ $errors->first('search') }}
                @endcomponent
            @endif  
       

               

                    @include('front.brick2-standard', compact('$post'))


                




                                 
                            </article>
                        </div>
                    </div>
                    
                    <!--Sidebar Widget-->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="sidebar">
                            <div class="widget widget_search">
                                <div class="site-search-area">
                                   <form method="get" id="site-searchform" action="{{ route('posts.search') }}">
                                        <div>
                                            <input class="input-text" name="search" id="s" placeholder="@lang('Type Your Keywords')" type="text" />
                                            <input id="searchsubmit" value="Search" type="submit" />
                                        </div>
                                    </form>
                                </div><!-- end site search -->
                            </div>
                            
                            <div class="widget widget_categories">
                                <div class="widget_title">
                                    <h4><span>Categories</span></h4>
                                    </div>
                                <ul class="arrows_list list_style">
                                    <li><a href="/category/sig-teledetection"> SIG & Télédétéction</a></li>
                                    <li><a href="/category/conseils-communication"> Conseils & Communication  </a></li> 
                                    <li><a href="/category/applications-en-ligne"> Applications en ligne </a></li>
                                    <li><a href="/category/formation"> Formation</a></li>
                                    <li><a href="/category/autres"> Autres</a></li>
                                </ul>
                            </div>
                            
                            <div class="widget widget_about">
                                <div class="widget_title">
                                    <h4><span>Basic Text Widget</span></h4>
                                    </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <div class="widget widget_tab">
                                <div class="velocity-tab sidebar-tab">
                                    <ul  class="nav nav-tabs">
                                        <li class="active"><a href="#Popular" data-toggle="tab">Popular</a></li>
                                        <li class=""><a href="#Recent" data-toggle="tab">Recent</a></li>
                                        <li class="last-tab"><a href="#Comment" data-toggle="tab"><i class="fa fa-comments-o"></i></a></li>
                                    </ul>

                                    <div  class="tab-content clearfix">
                                        <div class="tab-pane fade active in" id="Popular">
                                            <ul class="recent_tab_list">
                                                <li>
                                                    <span><a href="#"><img src="images/content/recent_1.png" alt="" /></a></span>
                                                    <a href="#">Publishing packag esanse web page editos</a>
                                                    <i>October 09, 2015</i>
                                                </li>
                                                <li>
                                                    <span><a href="#"><img src="images/content/recent_2.png" alt="" /></a></span>
                                                    <a href="#">Sublishing packag esanse web page editos</a>
                                                    <i>October 08, 2015</i>
                                                </li>
                                                <li class="last-tab">
                                                    <span><a href="#"><img src="images/content/recent_3.png" alt="" /></a></span>
                                                    <a href="#">Mublishing packag esanse web page editos</a>
                                                    <i>October 07, 2015</i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="Recent">
                                            <ul class="recent_tab_list">
                                                <li>
                                                    <span><a href="#"><img src="images/content/recent_4.png" alt="" /></a></span>
                                                    <a href="#">Various versions has evolved over the years</a>
                                                    <i>October 18, 2015</i>
                                                </li>
                                                <li>
                                                    <span><a href="#"><img src="images/content/recent_5.png" alt="" /></a></span>
                                                    <a href="#">Rarious versions has evolve over the years</a>
                                                    <i>October 17, 2015</i>
                                                </li>
                                                <li class="last-tab">
                                                    <span><a href="#"><img src="images/content/recent_6.png" alt="" /></a></span>
                                                    <a href="#">Marious versions has evolven over the years</a>
                                                    <i>October 16, 2015</i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="Comment">
                                            <ul class="comments">
                                                <li class="comments_list clearfix">
                                                    <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_3.png" alt="#"></a>
                                                    <p><strong><a href="#">Prambose</a> <i>says: </i> </strong> Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                                </li>
                                                <li class="comments_list clearfix">
                                                    <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_1.png" alt="#"></a>
                                                    <p><strong><a href="#">Makaroni</a> <i>says: </i> </strong> Tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                                </li>
                                                <li class="comments_list clearfix">
                                                    <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_2.png" alt="#"></a>
                                                    <p><strong><a href="#">Prambanan</a> <i>says: </i> </strong> Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget widget_tag">
                                <div class="widget_title">
                                    <h4><span>Tags Widget</span></h4>
                                    </div>
                                
                                <ul class="tags">
                                 @if ($post->tags->count()) 
                                      @foreach($post->tags as $tag)
                                          <li><a href="{{ route('posts.tag', [$tag->id]) }}"><b>{{ $tag->tag }}</b></a></li>
                                         @endforeach 
                                   @endif
 
                                </ul>
                            </div>
                            
                            <div class="widget widget_archives">
                                <div class="widget_title">
                                    <h4><span>Archives</span></h4>
                                    </div>
                                <ul class="archives_list list_style">
                                    <li><a href="#"> November 2015</a></li>
                                    <li><a href="#"> October 2015</a></li>
                                    <li><a href="#"> September 2015</a></li>
                                    <li><a href="#"> August 2015</a></li>
                                    <li><a href="#"> July 2015</a></li>
                                    <li><a href="#"> June 2015</a></li>
                                    <li><a href="#"> May 2015</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div> <!--/.container-->
        </section>
    </section>
    <!--end wrapper-->
     <!-- content-->
    

@endsection

@section('scripts')
    @if (auth()->check())
        <script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script>
        <script>

            var post = (function () {

                var onReady = function () {
                    $('body').on('click', 'a.deletecomment', deleteComment)
                        .on('click', 'a.editcomment', editComment)
                        .on('click', '.btnescape', escapeComment)
                        .on('submit', '.comment-form', submitComment)
                        .on('click', 'a.reply', replyCreation)
                        .on('click', '.btnescapereply', escapeReply)
                        .on('submit', '.reply-form', submitReply)
                }

                var toggleEditControls = function (id) {
                    $('#comment-edit' + id).toggle()
                    $('#comment-body' + id).toggle('slow')
                    $('#comment-form' + id).toggle('slow')
                }

                // Delete comment
                var deleteComment = function (event) {
                    event.preventDefault()
                    var that = $(this)
                    swal({
                        title: "{!! __('Really delete this comment ?') !!}",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "{!! __('Yes') !!}",
                        cancelButtonText: "{!! __('No') !!}"
                    }).then(function () {
                        that.next('form').submit()
                    })
                }

                // Set comment edition
                var editComment = function (event) {
                    event.preventDefault()
                    var i = $(this).attr('id').substring(12);
                    $('form.comment-form textarea#message' + i).val($('#comment-body' + i).text())
                    toggleEditControls(i)
                }

                // Escape comment edition
                var escapeComment = function (event) {
                    event.preventDefault()
                    var i = $(this).attr('id').substring(14)
                    toggleEditControls(i)
                    $('form.comment-form textarea#message' + i).prev().text('')
                }

                // Submit comment
                var submitComment = function (event) {
                    event.preventDefault();
                    $.ajax({
                        method: 'put',
                        url: $(this).attr('action'),
                        data: $(this).serialize()
                    })
                        .done(function (data) {
                            $('#comment-body' + data.id).text(data.message)
                            toggleEditControls(data.id)
                        })
                        .fail(function(data) {
                            var errors = data.responseJSON
                            $.each(errors, function(index, value) {
                                value = value[0].replace(index, '@lang('message')')
                                $('form.comment-form textarea[name="' + index + '"]').prev().text(value)
                            });
                        });
                }

                // Set reply creation
                var replyCreation = function (event) {
                    event.preventDefault()
                    var i = $(this).attr('id').substring(12)
                    $('form.reply-form textarea#message' + i).val('')
                    $('#reply-form' + i).toggle('slow')
                }

                // Escape reply creation
                var escapeReply = function (event) {
                    event.preventDefault()
                    var i = $(this).attr('id').substring(12)
                    $('#reply-form' + i).toggle('slow')
                }

                // Submit reply
                var submitReply = function (event) {
                    event.preventDefault()
                    $.ajax({
                        method: 'post',
                        url: $(this).attr('action'),
                        data: $(this).serialize()
                    })
                        .done(function (data) {
                            document.location.reload(true)
                        })
                        .fail(function(data) {
                            var errors = data.responseJSON
                            $.each(errors, function(index, value) {
                                value = value[0].replace(index, '@lang('message')')
                                $('form.reply-form textarea[name="' + index + '"]').prev().text(value)
                            });
                        });
                }

                return {
                    onReady: onReady
                }

            })()

            $(document).ready(post.onReady)

        </script>
    @endif

    <script>
        $(function() {
            // Get next comments
            $('#nextcomments').click (function(event) {
                event.preventDefault()
                $('#morebutton').hide()
                $('#moreicon').show()
                $.get($(this).attr('href'))
                .done(function(data) {
                    $('ol.commentlist').append(data.html)
                    if(data.href !== 'none') {
                        $('#nextcomments').attr('href', data.href)
                        $('#morebutton').show()
                    }
                    $('#moreicon').hide()
                })
            })
        })
    </script>
@endsection
