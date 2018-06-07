 
    <div class="post_date">
                                    <span class="day">28</span>
                                    <span class="month">Nov</span>
                                </div>
                                <div class="post_content">
                                    <div class="post_meta">
                                        <h2>
                                            <a href="{{ url('posts/' . $post->slug) }}">{{ $post->title }}</a>
                                        </h2>
                                        <div class="metaInfo">
                                            <span><i class="fa fa-calendar"></i> <a href="#">Nov 28, 2015</a> </span>
                                            <span><i class="fa fa-user"></i> By <a href="#">Louis</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Emin</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </div>
                                      <div class="entry-thumb">
                                            <a href="{{ url('posts/' . $post->slug) }}" class="thumb-link"><img src="{{ $post->image }}"></a>
                                        </div>
                                        <br><br>
                                     
                                    <blockquote class="default">
                                         {{ $post->excerpt }}
                                    </blockquote>
                                    
                                   
                                </div>
                                <hr>
 