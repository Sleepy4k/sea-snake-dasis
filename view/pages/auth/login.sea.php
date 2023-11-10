<?= $this->extend('layouts.auth') ?>

<?= $this->share('title', 'Login') ?>

<?= $this->section('content') ?>
  <div class="container d-flex justify-content-center align-items-center my-3">
    <form action="<?= route('login.store') ?>" method="post">
        <div class="mb-3">
          <label for="username" class="form-label"><?= $get('formTitle', 'Username') ?></label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Your <?= $get('formTitle', 'Username') ?>">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?= route('landing') ?>" class="btn btn-secondary">Back</a>
    </form>
  </div>
<?= $this->stop() ?>
