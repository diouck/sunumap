 
 
                                <div class="post_content">
                                    <div class="post_meta">
                                        <h2>
                                            <a href="{{ url('posts/' . $post->slug) }}">{{ $post->title }}</a>
                                        </h2>
                                        <div class="metaInfo"> 
                                             @foreach ($post->categories as $category)
                                                <span><i class="fa fa-star"><a href="{{ route('category', [$category->slug]) }}">{{ $category->title }}</i></a></span>
                                              @endforeach
                                             @if ($post->tags->count())  
                                                @foreach($post->tags as $tag)
                                                  <span><i class="fa fa-tag"></i>  <a href="{{ route('posts.tag', [$tag->id]) }}">{{ $tag->tag }}</a></span>
                                                @endforeach 
                                             @endif 
                                        </div>
                                    </div>
                                       
                                    <div class="post_img">
                                            <a href="{{ url('posts/' . $post->slug) }}" class="thumb-link"><img src="{{ $post->image }}"></a>
                                        </div>

                                         

                                        <br><br>
                                     
                                    <blockquote class="default">
                                         {{ $post->excerpt }}
                                    </blockquote>
                                    
                                   
                                </div>
                                <hr>
 