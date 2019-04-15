<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('admin')) {
            return redirect('admin')->with('status', 'login', 'Login Success');
        } elseif ($request->user()->hasRole('user')) {
            return redirect('employee')->with('status', 'login', 'Login Success');
        } else {
            return redirect()->action('ResumeController@index', [$request->user()->id]);
            // return redirect('resume');
        }
    }
}
