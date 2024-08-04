<!-- app/Views/pages/home.php -->
<?= $this->extend('layout') ?>


<?= $this->section('content') ?>
            <?= view('sections/main-slider')?>
            <?= view('sections/counter-one')?>
            <?= view('sections/about_us/about-one')?>
            <?= view('sections/service-two')?>
            <?= view('sections/call-to-action__three')?>
            <?= view('sections/testimonials-one')?>
            <?= view('sections/gray-boxed-wrapper')?>
            <?= view('sections/news/video-gallery')?>
            <?= view('sections/contact-two')?>
<?= $this->endSection() ?>
