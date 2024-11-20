<!-- app/Views/layout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break Tech hds || <?= $title ?></title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
     href="<?= base_url('assets/images/favicons/apple-touch-icon.png'); ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
     href="<?= base_url('assets/images/favicons/favicon-32x32.png'); ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
     href="<?= base_url('assets/images/favicons/favicon-16x16.png'); ?>"
    />
    <link rel="manifest" href="<?= base_url('assets/images/favicons/site.webmanifest'); ?>" />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/swiper.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/odometer.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/jarallax.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-select.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/agrikon-icons.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/nouislider.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/nouislider.pips.css'); ?>" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>" />
</head>
<body>
    <?= view('components/header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= view('components/footer') ?>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/swiper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.ajaxchimp.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/wow.js'); ?>"></script>
    <script src="<?= base_url('assets/js/odometer.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.appear.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jarallax.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/circle-progress.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/wNumb.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/nouislider.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/theme.js'); ?>"></script>
</body>
</html>
