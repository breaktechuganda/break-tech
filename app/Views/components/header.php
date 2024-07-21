    <div class="preloader">
      <img
        class="preloader__image"
        width="55"
        src="<?= base_url('assets/images/loader.png'); ?>"
        alt=""
      />
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
      <header class="main-header">
        <div class="topbar">
          <div class="container">
            <div class="topbar__left">
              <div class="topbar__social">
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
              </div>
              <!-- /.topbar__social -->
              <p>Welcome to Agriculture HTML Template</p>
            </div>
            <!-- /.topbar__left -->
            <div class="topbar__right">
              <a href="#"
                ><i class="agrikon-icon-email"></i>needhelp@company.com</a
              >
              <a href="#"
                ><i class="agrikon-icon-clock"></i>Mon - Sat 8:00 - 6:30, Sunday
                - CLOSED</a
              >
            </div>
            <!-- /.topbar__right -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.topbar -->
        <nav class="main-menu">
          <div class="container">
            <div class="logo-box">
              <a href="<?= base_url('/'); ?>" aria-label="logo image"
                ><img src="<?= base_url('assets/images/logo-dark.png'); ?>" width="153" alt=""
              /></a>
              <span class="fa fa-bars mobile-nav__toggler"></span>
            </div>
            <!-- /.logo-box -->
            <ul class="main-menu__list">
              <?php foreach ($menuItems as $item): ?>
                <li>
                  <a href="<?= base_url($item['url']) ?>"><?= $item['label'] ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
            <!-- /.main-menu__list -->

            <div class="main-header__info">
              <a href="<?= base_url($contactItem['url']); ?>" class="main-header__info-phone">
                <!-- <i class="agrikon-icon-phone-call"></i> -->
                <span class="main-header__info-phone-content">
                  <span class="main-header__info-phone-title"
                    ><?= $contactItem['label'] ?></span
                  > </span
                ><!-- /.main-header__info-phone-content --> </a
              ><!-- /.main-header__info-phone -->
            </div>
            <!-- /.main-header__info -->
          </div>
          <!-- /.container -->
        </nav>
        <!-- /.main-menu -->
      </header>
      <!-- /.main-header -->
      <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="<?= base_url('/'); ?>" aria-label="logo image"><img src="<?= base_url('assets/images/logo-light.png'); ?>" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:needhelp@agrikon.com">needhelp@agrikon.com</a>
                </li>
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="<?= base_url('assets/images/resources/flag-1-1.jpg'); ?>" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
      <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
      </div>
      <!-- /.stricky-header -->