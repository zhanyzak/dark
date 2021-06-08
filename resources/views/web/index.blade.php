@extends('web.layouts.app')

@section('title', '')


@section('content')
    <!-- ======= Slider Section ======= -->
    @include('web.layouts.slider')
    <!-- End Slider Section-->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h3><span>99</span> years, <span>4</span> months, <span>11</span> days ago</h3>
            <p>Leonard Thompson received the first successful injection of insulin.</p>
          </div>
          {{-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Request a quote</a>
          </div> --}}
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    @includeWhen(count($news) > 0, 'web.sections.news', ['news' => $news])

    @includeWhen(count($events) > 0, 'web.sections.events', ['events' => $events])

    @includeWhen(count($faq_lists) > 0, 'web.sections.faq', ['faq_lists' => $faq_lists])
@endsection

  

 