<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <?= $this->put('partials.head.meta') ?>

    <?= $this->put('partials.head.title') ?>

    <?= $this->section('css') ?>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link rel="stylesheet" href="<?= asset('css/dashboard.css') ?>">
    <?= $this->show() ?>
  </head>
  <body>
    <?= $this->put('partials.header.dashboard') ?>

    <div class="container-fluid">
      <div class="row">
        <?= $this->component('partials.sidebar.dashboard') ?>
          <?= $this->get('sidebar') ?>
        <?= $this->endcomponent() ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <?= $this->get('content') ?>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
