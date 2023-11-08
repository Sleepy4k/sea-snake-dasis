<?php

namespace Bin\Controllers\Web;

use Bin\Controllers\Controller;

class AdminController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return void
   */
  public function index() {
    $data = session()->get('user');

    static::view('pages.admin.index', [
      'username' => $data['username']
    ]);
  }
}
