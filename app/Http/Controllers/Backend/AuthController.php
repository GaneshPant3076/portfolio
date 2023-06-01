<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('backend.auth.login');
    }

  public function forgot(Request $request){
    return view('backend.auth.forgot');
  }

}
