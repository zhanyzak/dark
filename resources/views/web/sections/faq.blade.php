<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Ответы на вопросы</h2>
        <p>Ответы на часто задаваемые вопросы</p>
      </div>

      <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
        @forelse ($faq_lists as $key => $faq_item)
        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{ $key }}">{{ $faq_item->translate($locale)->question ?? '' }}? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq{{ $key }}" class="collapse" data-bs-parent=".faq-list">
            <p>
              {{ $faq_item->translate($locale)->answer ?? '' }}.
            </p>
          </div>
        </li>  
        @empty
            
        @endforelse

      </ul>

    </div>
</section><!-- End F.A.Q Section -->