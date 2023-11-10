<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6"><?= config('bin', 'name') ?></a>

  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="" aria-label="" disabled />

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#" onclick="event.preventDefault();document.getElementById('logout').submit();">Keluar</a>
      <form action="<?= route('logout') ?>" method="POST" class="d-none" id="logout"></form>
    </div>
  </div>
</header>
