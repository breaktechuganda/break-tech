<!-- app/Views/pages/home.php -->
<?= $this->extend('layout') ?>


<?= $this->section('content') ?>
            <?= view('sections/main-slider')?>
            <?= view('sections/counter-one')?>
            <?= view('sections/testimonials-one')?>
            <?= view('sections/gray-boxed-wrapper')?>
            <?= view('sections/news/video-gallery')?>
            <?= view('sections/contact-two')?>
<?= $this->endSection() ?>
