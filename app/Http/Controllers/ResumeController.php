<?php

namespace App\Http\Controllers;

use App\Resume;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $resumes = User::with('resume')->find($id)->resume;
        // dd($resumes);
        $currentUser = User::find($id);
        if ($currentUser->status == 0) {
            return view('resume.create')->with('currentUser', $currentUser)->with('resumes', $resumes);
        } else {

            return view('resume.index')->with('currentUser', $currentUser)->with('resumes', $resumes);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resume = new Resume;
        // upload the image //
        $file = $request->file('file');
        $destination_path = 'uploads/';
        $filename = str_random(6) . '_' . $file->getClientOriginalName();
        $file->move($destination_path, $filename);

        // save image data into database //
        $resume->user_id = $request->input('user_id');
        $resume->name = $request->input('name');
        $resume->email = $request->input('email');
        $resume->tgl_lahir = $request->input('tgl_lahir');
        $resume->jenis_kelamin = $request->input('jenis_kelamin');
        $resume->status = $request->input('status');
        $resume->agama = $request->input('agama');
        $resume->nik = $request->input('nik');
        $resume->alamat = $request->input('alamat');
        $resume->file = $destination_path . $filename;
        $resume->save();

        $user = User::find($request->user_id);
        $user->status = 1;
        $user->save();

        // $resumes = User::with('resume')->find($request->id)->resume;
        // dd($resumes);
        //$currentUser = User::find($id);

        Session::flash("notice", "Success");
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resume = Resume::find($id);
        return view('resume.show')->with('resume', $resume);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $resumes = User::with('resume')->find($id)->resume;
        // $resume = Resume::find($id);
        // return view('resume.edit')->with('resume', $resume);
        $resumes = User::with('resume')->find($id)->resume;
        // dd($resumes);
        $currentUser = User::find($id);
        return view('resume.edit')->with('currentUser', $currentUser)->with('resumes', $resumes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $resumes = Resume::find($id);
        $resumes = User::find($id)->resume->first();
        // dd($resumes);
        $currentUser = User::find($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destination_path = 'uploads/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $image->file = $destination_path . $filename;
        }

        // replace old data with new data from the submitted form //
        $resumes->name = $request->input('name');
        $resumes->email = $request->input('email');
        $resumes->tgl_lahir = $request->input('tgl_lahir');
        $resumes->jenis_kelamin = $request->input('jenis_kelamin');
        $resumes->status = $request->input('status');
        $resumes->agama = $request->input('agama');
        $resumes->nik = $request->input('nik');
        // dd($resumes);
        $resumes->save();

        // Session::flash("notice", "Resume success updated");
        return redirect('home');
    }

    public function statuscv($id)
    {
        // return view('resume.edit')->with('resume', $resume);
        $resumes = User::find($id)->resume;
        // dd($resumes);
        $currentUser = User::find($id);
        return view('resume.status')->with('currentUser', $currentUser)->with('resumes', $resumes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
