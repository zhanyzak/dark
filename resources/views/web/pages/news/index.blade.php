@extends('web.layouts.app')
@section('title', '')
    
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Все новости</h2>
          </div>
  
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="news" class="news">
        <div class="container" data-aos="fade-up">

            <div class="row">
    
                <div class="col-lg-8 entries">
                    @forelse ($news as $news_item)
                    <article class="entry">
        
                        <div class="entry-img">
                            <img src="{{ Voyager::image($news_item->img) }}" alt="" class="img-fluid">
                        </div>
        
                        <h2 class="entry-title">
                            <a href="{{route('dark.showNews', [$locale, $news_item->slug])}}">{{ $news_item->translate($locale)->title ?? '' }}</a>
                        </h2>
        
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> Админ</li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{ $news_item->created_at ?? '' }}</time></li>
                            </ul>
                        </div>
        
                        <div class="entry-content">
                            <p>
                                {{ $news_item->translate($locale)->excerpt ?? '' }}
                            </p>
                            <div class="read-more">
                                <a href="{{route('dark.showNews', [$locale, $news_item->slug])}}">
                                    @switch($locale)
                                        @case('ru')
                                            Далее
                                            @break
                                        @case('kz')
                                            Ары қарай
                                            @break
                                        @case('en')
                                            See more
                                            @break
                                        @default  
                                    @endswitch
                                </a>
                            </div>
                        </div>
        
                    </article><!-- End blog entry -->
                    @empty
        
                    @endforelse
                    
                    <div class="news-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
        
                </div><!-- End blog entries list -->
    
                <div class="col-lg-4">
    
                    <div class="sidebar">
        
                        <h3 class="sidebar-title">Другие новости</h3>
                        <div class="sidebar-item recent-posts">
                            @forelse ($other_news as $news_item)
                            <div class="post-item clearfix">
                                <img src="{{Voyager::image($news_item->img)}}" alt="">
                                <h4><a href="{{route('dark.showNews', [$locale, $news_item->slug])}}">{{ $news_item->translate($locale)->title ?? '' }}</a></h4>
                                <time datetime="2020-01-01">{{ $news_item->created_at ?? ''}}</time>
                            </div>
                            @empty
                                
                            @endforelse
        
                        </div>
        
                    </div><!-- End sidebar -->
    
                </div><!-- End blog sidebar -->
    
            </div>

        </div>
    </section>
@endsection