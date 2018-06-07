  
                                
                                <div class="post_content">
                                    <div class="post_meta">
                                        <h2>
                                            <a href="{{ url('posts/' . $post->slug) }}">{{ $post->title }}</a>
                                        </h2>
                                        <div class="metaInfo">
                                            <span><i class="fa fa-calendar"></i> <a href="#">{{ ucfirst (utf8_encode ($post->created_at->formatLocalized('%A %d %B %Y'))) }}</a> </span>
                                            <span><i class="fa fa-user"></i> By <a href="#">{{$post->user->name}}</a> </span>
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
                                      <div class="entry-thumb">
                                            <a href="{{ url('posts/' . $post->slug) }}" class="thumb-link"><img src="{{ $post->image }}"></a>
                                        </div>
                                        <br><br>
                                    
                                     
                                     {!! $post->body !!}
                                    
                                      <nav aria-label="Page navigation example">
                      <ul class="pagination">
                         @if ($post->previous)
                        <li class="page-item"><a class="page-link" href="{{ url('posts/' . $post->previous->slug) }}">@lang('Previous')</a></li>
                         
                        <li class="page-item"><a class="page-link" href="{{ url('posts/' . $post->previous->slug) }}"> {{ $post->previous->title }}</a></li>
                        @endif
                        <hr>
                        @if ($post->next)   
                        <li class="page-item"><a class="page-link" href="{{ url('posts/' . $post->next->slug) }}">@lang('Next')</a></li>
                         <li class="page-item"><a class="page-link" href="{{ url('posts/' . $post->next->slug) }}">{{ $post->next->title }}</a></li>
                          @endif
                      </ul>
                    </nav> 
                               
                                <hr>

                                 <ul class="shares">
                                    <li class="shareslabel"><h3>Share This Story</h3></li>
                                    <li><a class="twitter" href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"></a></li>
                                    <li><a class="facebook" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"></a></li>
                                    <li><a class="gplus" href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"></a></li>
                                    <li><a class="pinterest" href="#" data-placement="bottom" data-toggle="tooltip" title="Pinterest"></a></li>
                                    <li><a class="yahoo" href="#" data-placement="bottom" data-toggle="tooltip" title="Yahoo"></a></li>
                                    <li><a class="linkedin" href="#" data-placement="bottom" data-toggle="tooltip" title="LinkedIn"></a></li>
                 </ul> 
                 <hr>
                </div>
                         


 



                   
                          

