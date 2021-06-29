<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AcademicSession;
use Session;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $academicSession = AcademicSession::all();
        return view('admin.sessions.create_session', compact('academicSession'));
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
        //
        $this->validate($request, [

            'admission_session' => 'required|max:255',
        ]);

        $academicSession = new AcademicSession;
        $academicSession->session = $request->admission_session;
        $academicSession->active = 1;

        $academicSession->save();

        Session::flash('success', 'The academic session was successfully added!');

        return redirect()->route('admin.sessions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function enableSession(Request $request, $id)
    {
        $session = AcademicSession::findOrFail($id);

        $session->active = 1;
        $session->save();
        // {{ dump($session); }}


        $request->session()->flash('success', 'Session Activated');
        return redirect()->back();
    }

    public function disableSession(Request $request, $id)
    {
        $session = AcademicSession::findOrFail($id);

        $session->active = 0;
        $session->save(); 
        // {{ dump($session); }}
        
        $request->session()->flash('success', 'Session Disabled');
        return redirect()->back();
    }
}
