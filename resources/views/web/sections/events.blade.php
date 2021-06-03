<!-- ======= Events Section ======= -->
<section id="events" class="events">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2><a href="{{route('dark.events', $locale)}}">Все события</a></h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
          <ul class="nav nav-tabs flex-column">
            @forelse ($events as $key => $event)
            <li class="nav-item">
                <a class="nav-link {{ $key === 0 ? 'active' : '' }} show" data-bs-toggle="tab" href="#tab-{{ $key++ }}">
                  <h4>{{ $event->translate($locale)->name }}</h4>
                  <p><strong>Дата:</strong> {{ $event->start_date ?? '' }}</p>
                  <p><strong>Время:</strong> {{ $event->start_time ?? '' }}</p>
                </a>
            </li> 
            @empty
                
            @endforelse
          </ul>
        </div>
        <div class="col-lg-8 ml-auto" data-aos="fade-left" data-aos-delay="100">
          <div class="tab-content">
              @forelse ($events as $key => $event)
              <div class="tab-pane {{ $key === 0 ? 'active' : ''}} show" id="tab-{{ $key++ }}">
                <figure>
                  <img src="{{ Voyager::image($event->img) }}" alt="" class="img-fluid">
                </figure>
              </div> 
              <div class="tab-bottom">
                <a href="">
                  <h4>
                    {{ $event->translate($locale)->name ?? '' }}
                  </h4>
                </a>
              </div> 
              @empty
                  
              @endforelse
          </div>
        </div>
      </div>
      

    </div>
</section>
<!-- End Events Section -->
