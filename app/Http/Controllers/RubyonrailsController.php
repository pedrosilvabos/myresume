<?php

namespace App\Http\Controllers;

use App\rubyonrails;
use Illuminate\Http\Request;

class RubyonrailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('skills.ror');
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
     * @param  \App\rubyonrails  $rubyonrails
     * @return \Illuminate\Http\Response
     */
    public function show(rubyonrails $rubyonrails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rubyonrails  $rubyonrails
     * @return \Illuminate\Http\Response
     */
    public function edit(rubyonrails $rubyonrails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rubyonrails  $rubyonrails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rubyonrails $rubyonrails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rubyonrails  $rubyonrails
     * @return \Illuminate\Http\Response
     */
    public function destroy(rubyonrails $rubyonrails)
    {
        //
    }
}
