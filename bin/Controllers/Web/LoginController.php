<?php

namespace Bin\Controllers\Web;

use Snake\Core\Http\Request;
use Bin\Controllers\Controller;

class LoginController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return void
   */
  public function index() {
    static::view('pages.auth.login');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Snake\Core\Http\Request  $request
   * 
   * @return void
   */
  public function store(Request $request) {
    session()->set('user', $request->all());
    redirect('admin/dashboard');
  }
}
