<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('portal.index');
    }

    public function about() {
        return view('portal.about');
    }

    public function contact() {
        return view('portal.contact');
    }

    public function search(Request $request) {
        return view('portal.search');
    }
}
