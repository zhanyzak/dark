<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{ setting('site.description') }}</h3>
            <p>
              {{ setting('site.address') }} <br>
              {{ setting('site.index') }}<br><br>
              <strong>Тел:</strong> {{ setting('site.phone') }}<br>
              <strong>Факс:</strong> {{ setting('site.fax') }}<br>
              <strong>Эл.адрес:</strong> {{ setting('site.email') }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Категория</h4>
            <ul>
              @forelse ($categories as $category)
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/'.$locale.'/'.$category->slug) }}">{{ $category->translate($locale)->name ?? '' }}</a></li>  
              @empty
                  
              @endforelse
            </ul>
          </div>

          <div class="col-lg-6 col-md-12 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; 2021 <strong><span></span></strong>. Все права защищены
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
</footer>