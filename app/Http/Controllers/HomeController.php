<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\Gallery;
use App\Testimonial;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notices = Notice::all();
        $gallery = Gallery::all();
        $testimonial = Testimonial::all();
        return view('admin.index', compact('notices','gallery','testimonial'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

}
