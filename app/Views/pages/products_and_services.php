<!-- app/Views/pages/home.php -->
<?= $this->extend('layout') ?>


<?= $this->section('content') ?>
    <?= view('sections/page-header') ?>
    <?= view('sections/service-two')?>
    <?= view('sections/products_and_services/products')?>
    <?= view('sections/about_us/about-two') ?>





<?= $this->endSection() ?>
