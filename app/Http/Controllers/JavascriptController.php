<?php

namespace App\Http\Controllers;

use App\javascript;
use Illuminate\Http\Request;

class JavascriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('skills.js');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\javascript  $javascript
     * @return \Illuminate\Http\Response
     */
    public function show(javascript $javascript)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\javascript  $javascript
     * @return \Illuminate\Http\Response
     */
    public function edit(javascript $javascript)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\javascript  $javascript
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, javascript $javascript)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\javascript  $javascript
     * @return \Illuminate\Http\Response
     */
    public function destroy(javascript $javascript)
    {
        //
    }
}
