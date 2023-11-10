<?= $this->extend('layouts.dashboard', ['title' => 'Dashboard']) ?>

<?= $this->append('css') ?>
  <link rel="stylesheet" href="<?= asset('css/dashboard-custom.css') ?>">
<?= $this->stop() ?>

<?= $this->section('sidebar') ?>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="<?= route('admin.dashboard.index') ?>">
        <span data-feather="home" class="align-text-bottom"></span>
        Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="<?= route('admin.dashboard.index') ?>">
        <span data-feather="home" class="align-text-bottom"></span>
        Kelas
      </a>
    </li>
  </ul>
<?= $this->stop() ?>

<?= $this->section('content') ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="greet">Hello, <?= $get('username') ?></h1>
  </div>
<?= $this->stop() ?>
