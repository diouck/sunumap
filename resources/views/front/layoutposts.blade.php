@foreach ($categories as $category)
                            <li><a href="{{ route('category', [$category->slug ]) }}">{{ $category->title }}</a></li>
                        @endforeach