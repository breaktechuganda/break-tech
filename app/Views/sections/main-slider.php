<section class="main-slider">
        <div
          class="swiper-container thm-swiper__slider"
          data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'
        >
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(assets/images/main-slider/main-slider-1-1.jpg);
                "
              ></div>
              <!-- /.image-layer -->
              <div class="container">
                <div class="row">
                  <div class="col-xl-7 col-lg-7">
                    <h2>
                      <span>Modernizing</span> <br />
                      Agriculture
                    </h2>
                    <p>
                    We aim in harnessing technology to transform the whole agriculture landscape engine of uganda by empowering farmers.
                     </p>
                    <a href="<?= base_url('products_and_services'); ?>" class="thm-btn">Discover More</a>
                    <!-- /.thm-btn dynamic-radius -->
                  </div>
                  <!-- /.col-lg-7 text-right -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(<?= base_url('assets/images/main-slider/main-slider-1-2.jpg'); ?>);
                "
              ></div>
              <!-- /.image-layer -->
              <div class="container">
                <div class="row">
                  <div class="col-xl-7 col-lg-7">
                    <h2>
                      <span>Modernizing</span> <br />
                      Agriculture
                    </h2>
                    <p>
                       We aim in harnessing technology to transform the
                        whole agriculture landscape engine of uganda by empowering farmers.
                     </p>
                    <a href="<?= base_url('products_and_services'); ?>" class="thm-btn">Discover More</a>
                    <!-- /.thm-btn dynamic-radius -->
                  </div>
                  <!-- /.col-lg-7 text-right -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->

          <!-- If we need navigation buttons -->
          <div class="main-slider__nav">
            <div
              class="swiper-button-prev"
              id="main-slider__swiper-button-next"
            >
              <i class="agrikon-icon-left-arrow"></i>
            </div>
            <div
              class="swiper-button-next"
              id="main-slider__swiper-button-prev"
            >
              <i class="agrikon-icon-right-arrow"></i>
            </div>
          </div>
          <!-- /.main-slider__nav -->
        </div>
        <!-- /.swiper-container thm-swiper__slider -->
      </section>
      