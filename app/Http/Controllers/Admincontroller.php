<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    
    public function index()
    {
        return view ('admin.dashboard');
    }

    public function show_postingan()
    {
        return view ('admin.postingan');
    }

    public function show_arsip()
    {
        return view ('admin.arsip');
    }

    public function show_aboutus()
    {
        return view ('admin.aboutus');
    }

    public function show_help()
    {
        return view ('admin.help');
    }
    public function show_products()
    {
        return view ('admin.products');
    }

    public function show_launches()
    {
        return view ('admin.launches');
    }



    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
