<?php

namespace App\Http\Controllers;

use App\farhana;
use Illuminate\Http\Request;

class FarhanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.books');
    }
    public function sample()
    {
        return view('book.books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book=new farhana([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);
        $book->save();
        return redirect('/book/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\farhana  $farhana
     * @return \Illuminate\Http\Response
     */
    public function show(farhana $farhana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\farhana  $farhana
     * @return \Illuminate\Http\Response
     */
    public function edit(farhana $farhana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\farhana  $farhana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farhana $farhana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\farhana  $farhana
     * @return \Illuminate\Http\Response
     */
    public function destroy(farhana $farhana)
    {
        //
    }
}
