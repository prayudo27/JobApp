<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin, user');
    }

    public function index()
    {
        $resumes = User::all();
        $admin = User::where('status_cv', '=', 0)->get();
        return view('admin.index')->with('admin', $admin);
    }

    public function show($user_id)
    {
        $resume = User::with('resume')->find($user_id)->resume;
        // dd($resume);
        // $resume = Resume::find($id);
        return view('admin.show')->with('resume', $resume);
    }

    public function adminAccept($user_id)
    {
        $resume = User::find($user_id);
        $resume->status_cv = "1";
        $resume->save();
        return redirect()->route('adminIndex');
        // return view('admin.Accept')->with('resume', $resume);
    }

    public function adminUnread($user_id)
    {
        $resume = User::find($user_id);
        $resume->status_cv = "0";
        $resume->save();
        return redirect()->route('adminIndex');
    }

    public function adminReject($user_id)
    {
        $resume = User::find($user_id);
        $resume->status_cv = "2";
        $resume->save();
        return redirect()->route('adminIndex');
    }

    public function accept()
    {
        $resume = User::where('status_cv', '=', 1)->get();
        return view('admin.Accept')->with('resume', $resume);
    }

    public function reject()
    {
        $resume = User::where('status_cv', '=', 2)->get();
        return view('admin.Reject')->with('resume', $resume);
    }

}
