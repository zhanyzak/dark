<!-- ======= News Section ======= -->
<section id="news" class="news">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2><a href="{{route('dark.news', $locale)}}">Все новости</a> <strong>ДАРК</strong></h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="entries">
        <div class="row">
          @forelse ($news as $news_item)
          <article class="entry col-lg-4 col-md-12 col-sm-12">

            <div class="entry-img">
              <img src="{{ Voyager::image($news_item->img ?? '') }}" alt="{{ $news_item->translate($locale)->title ?? '' }}" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">{{ $news_item->translate($locale)->title ?? '' }}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $news_item->created_at ?? '' }}</time></a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                {!! $news_item->translate($locale)->excerpt !!}
              </p>
              <div class="read-more">
                <a href="blog-single.html">
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
        </div>
      </div>

    </div>
</section>
<!-- End News Section -->