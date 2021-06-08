<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
      <!--Logo Dark-->
      <div class="logo">
        {{-- <h1 class="text-light"><a href="index.html">Flattern</a></h1> --}}
        <a href="{{ url('/') }}"><img src="{{ env('APP_URL').'/storage/'.setting('site.logo') }}" alt="{{ setting('site.description') }}" class="img-fluid"></a>
      </div>
      <!--Navbar-->
      <nav id="navbar" class="navbar">
        <ul>
          @forelse ($categories as $key => $category)
            @if (count($category->childs))
            <li class="dropdown"><a class="{{ $key === '0' ? 'active' : '' }}" href="{{ url('/'.$locale.'/'.$category->slug) }}"><span>{{ $category->translate($locale)->name }}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    @forelse ($category->childs as $child)
                        @if (count($child->childs))
                        <li class="dropdown">
                            <a href="{{ url('/'.$locale.'/'.$child->slug) }}"><span>{{ $child->translate($locale)->name }}</</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @forelse ($child->childs as $item)
                                <li><a href="{{ url('/'.$locale.'/'.$item->slug) }}">{{ $item->translate($locale)->name }}</a></li>   
                                @empty
                                    
                                @endforelse
                            </ul>
                        </li>
                        @else
                        <li><a href="#">{{ $child->translate($locale)->name }}</a></li>
                        @endif  
                    @empty
                        
                    @endforelse
                </ul>
            </li>
            @else
            <li><a class="{{ $key === '0' ? 'active' : '' }}" href="{{ url('/'.$locale.'/'.$category->slug) }}">{{ $category->translate($locale)->name }}</a></li>
            @endif
          @empty
              
          @endforelse
          <li class="dropdown">
            <a href="#"><span>@if($locale == 'ru') Русский @elseif($locale == 'kz') Қазақша @elseif($locale == 'en') English @endif</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @forelse (config('app.locales') as $key => $locale)
                <li><a href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), [$key, request('slug') ?? ''])}}">{{ $locale }}</a></li>   
                @empty
                    
                @endforelse
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
</header>