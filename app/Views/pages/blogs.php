<!-- app/Views/pages/about.php -->
<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <?= view('sections/page-header') ?>
    <?= view('sections/news/news-grid') ?>
<?= $this->endSection() ?>
