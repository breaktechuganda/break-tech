<!-- app/Views/pages/home.php -->
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <?= view('sections/page-header') ?>
    <?= view('sections/products_and_services/detail_section') ?>
<?= $this->endSection() ?>
