@extends('web.layouts.app')
@section('title', '')
    
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $news_item->translate($locale)->title ?? '' }}</h2>
          </div>
  
        </div>
    </section>
  
    <!-- ======= Section ======= -->
    <section id="news" class="news">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
  
              <article class="entry entry-single">
  
                <div class="entry-img">
                  <img src="{{Voyager::image($news_item->img)}}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="blog-single.html">{{ $news_item->translate($locale)->title ?? '' }}</a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> Админ</li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{ $news_item->created_at ?? '' }}</time></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                    <p>{{ $news_item->translate($locale)->body ?? '' }}</p>
                </div>
  
                {{-- <div class="entry-footer">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>
  
                  <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div> --}}
  
              </article><!-- End blog entry -->
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
  
                <h3 class="sidebar-title">Другие новости</h3>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                </div>
  
              </div><!-- End sidebar -->
  
            </div><!-- End sidebar -->
  
          </div>
  
        </div>
    </section><!-- End Section -->
@endsection