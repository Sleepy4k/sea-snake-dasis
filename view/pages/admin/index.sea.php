<?= $this->extend('layouts.dashboard') ?>

<?= $this->share('title', 'Dashboard') ?>

<?= $this->section('content') ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="greet">Hello, <?= $get('username') ?></h1>
  </div>
<?= $this->stop() ?>