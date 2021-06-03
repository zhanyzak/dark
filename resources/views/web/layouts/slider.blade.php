<section id="slider">
    <div id="sliderCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner" role="listbox">
        @forelse ($sliders as $key => $slider)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{ Voyager::image($slider->img) }}); opacity: .8;">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>{{ $slider->translate($locale)->title ?? '' }}</h2>
              <p>{{ $slider->translate($locale)->text ?? '' }}</p>
              <div class="text-center">
                <a href="{{ $slider->link ?? '' }}" class="btn-get-started">
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

      <a class="carousel-control-prev" href="#sliderCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#sliderCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="slider-carousel-indicators"></ol>

    </div>
</section>