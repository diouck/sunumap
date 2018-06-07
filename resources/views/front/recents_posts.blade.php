<div class="widget_content">
                       <ul class="links">
                         @foreach ($posts as $post) 
                            <li><a href="{{ url('posts/' . $post->slug) }}">{{ $post->title }}<span>November 07, 2015</span></a> 
                          @endforeach       
                        </ul>
                    </div>