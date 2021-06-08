<!-- ======= Events Section ======= -->
<section id="events" class="events section-bg">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2><a href="{{route('dark.news', $locale)}}">Все события</a> <strong>ДАРК</strong></h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    <div class="row">
      @forelse ($events as $event)
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card" style='background-image: url("{{ Voyager::image($event->img) }}");' data-aos="fade-up" data-aos-delay="100">
          <div class="card-body">
            <h5 class="card-title"><a href="">{{ $event->translate($locale)->name ?? '' }}</a></h5>
            <p class="card-text">{{ $event->translate($locale)->body ?? '' }}</p>
            <div class="read-more">
              <a href="#">
                <i class="bi bi-arrow-right"></i>
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
        </div>
      </div> 
      @empty
          
      @endforelse
    </div>
  </div>
</section><!-- End Events Section -->