<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Hash;

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
  public function logina(Request $request){

if(Auth::attempt(['email'=> $request->email, 'password' => $request->password],true)){

    if(!empty ( Auth::User()-> status )){
        if(Auth::User()->is_role =="1"){
            return redirect()->intended('admin/dashboard');
        }
    }else{
        $user_id = Auth::user()->id;
        Auth::logout();
        $user= User::find($user_id);

        return redirect('login')->with('sucess','this email is not verified yet!');
    }
}
else
{
    return redirect()->back()->with('error','please enter correct credential!');
}

  }

}
