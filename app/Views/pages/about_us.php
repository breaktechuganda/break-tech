<!-- app/Views/pages/about.php -->
<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <?= view('sections/page-header') ?>
    <?= view('sections/about_us/service-one') ?>
    <?= view('sections/about_us/team-one') ?>
    <?= view('sections/testimonials-one')?>
    <?= view('sections/about_us/about-one') ?>
    <?= view('sections/about_us/call-to-action') ?>

<?= $this->endSection() ?>
