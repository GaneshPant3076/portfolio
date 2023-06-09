<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('backend.dash.list');    }

        public function home_dash(Request $request){
            return view('backend.home.list');
        }
        public function about(Request $request){
            return view('backend.about.list');
        }
        public function portfolio(Request $request){
            return view('backend.portfolio.list');
        }
        public function contact(Request $request){
            return view('backend.contact.list');
        }
        public function blog(Request $request){
            return view('backend.blog.list');
        }

}
