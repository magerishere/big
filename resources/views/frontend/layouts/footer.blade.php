  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start mt-5">
      <!-- Grid container -->
      <div class="container p-4">
          <!--Grid row-->
          <div class="row">
              <!--Grid column-->
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5 class="text-uppercase">محتواهای اضافی</h5>

                  <p>
                      طرح‌نما یا لورم ایپسوم به نوشتاری آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و
                      طراحی گرافیک گفته می‌شود. طراح گرافیک از این نوشتار به‌عنوان عنصری از ترکیب‌بندی برای پُر کردن
                      صفحه و ارائهٔ اولیهٔ شکل ظاهری و کلیِ طرح سفارش‌گرفته‌شده‌استفاده می‌کند، تا ازنظر گرافیکی
                      نشانگر چگونگی نوع و اندازهٔ قلم و ظاهرِ متن باشد
                  </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase">لینک دیگر سایت ها</h5>

                  <ul class="list-unstyled mb-0">

                      <li>
                          <a href="#!" class="text-dark">لینک 1</a>
                      </li>
                      <li>
                          <a href="#!" class="text-dark">لینک 2</a>
                      </li>
                      <li>
                          <a href="#!" class="text-dark">لینک 3</a>
                      </li>
                      <li>
                          <a href="#!" class="text-dark">لینک 4</a>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase mb-0">لینک دیگر سایت ها</h5>

                  <ul class="list-unstyled">
                      <li>
                          <a href="#!" class="text-dark">لینک 1</a>
                      </li>
                      <li>
                          <a href="#!" class="text-dark">لینک 2</a>
                      </li>
                      <li>
                          <a href="#!" class="text-dark">لینک 3</a>
                      </li>
                      <li>
                          <a href="#!" class="text-dark">لینک 4</a>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->
          </div>
          <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © تمامی حقوق مادی و معنوی این سایت متعلق به :
          <a class="text-dark" href="https://mdbootstrap.com/">علی خوشکار</a>
          میباشد
      </div>
      <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script>
      $('.dropdown').hover(function() {
          $(this).children('li').toggleClass('bg-primary');
          $(this).children('li').toggleClass('text-light');
          $(this).children('ul').toggleClass('show');
      });

  </script>
  @yield('footer')
  </body>

  </html>
