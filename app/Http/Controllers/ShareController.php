<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;
use DB;

class ShareController extends Controller
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
    public function index()
    {

        $data = DB::table('users')
       ->join('shares', 'shares.user_id', '=', 'users.id')
       ->join('notes', 'users.id', '=', 'notes.user_id')
       ->select('shares.title', 'notes.note', 'shares.description','users.name')
       ->where('users.id', auth()->id())
       ->orderBy('title', 'DESC')
       ->get();
       
        return view('layouts.activies', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.comment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
        ]);

        auth()->user()->shares()->create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
        return redirect()->route('shares.activies')->with('success', 'critique ajouté avec success');

    }

    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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
}
