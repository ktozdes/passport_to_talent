<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;
use App\Company;
use App\User;
use App\Individual;

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
        return view('home');
    }
    public function employer()
    {
        $jobs = Job::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(15)->onEachSide(2);
        return view('page/employer', [
            'jobs'=> $jobs,
        ]);
    }
}
