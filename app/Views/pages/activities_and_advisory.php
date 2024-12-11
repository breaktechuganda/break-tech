<!-- app/Views/pages/about.php -->
<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <?= view('sections/page-header') ?>
    <?= view('sections/activities_and_advisory/overview') ?>
    <?= view('sections/activities_and_advisory/corporate-social-responsibility') ?>
    <?= view('sections/about_us/our-partners-and-collaborations')?>
<?= $this->endSection() ?>
