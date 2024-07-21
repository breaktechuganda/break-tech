<!-- app/Views/pages/about.php -->
<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <?= view('sections/page-header') ?>
    <?= view('sections/contact/main-contact') ?>
    <?= view('sections/contact/contact-info-with-location') ?>
<?= $this->endSection() ?>
