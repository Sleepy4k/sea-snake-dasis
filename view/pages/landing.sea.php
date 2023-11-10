<?= $this->extend('layouts.landing') ?>

<?= $this->section('content') ?>
  <div class="container">
    <div class="title">
      <h1><?= config('bin', 'name') ?></h1>
      <p>Innovative, Trusthworthy, Teamwork, Professional</p>
    </div>
    <div class="route">
      <a href="<?= route('login.index') ?>">Admin</a>
      <a href="#">Dosen</a>
      <a href="#">Wali Siswa</a>
      <a href="#">Siswa</a>
      <a href="#">Aktifasi SSO</a>
    </div>
  </div>
<?= $this->stop() ?>
