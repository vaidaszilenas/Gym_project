<?php

namespace App\Http\Controllers;

use App\Supplement;
use Illuminate\Http\Request;

class SupplementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplements = Supplement::all();
        return view('supplements.supplements', [
          'supplement' => $supplements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplements.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = $request->file('file_name')->storePublicly('public/images');
      var_dump($path);;
      $post = [
        'file_name'=> $path,
        'title'=>$request['title'],
        'price'=>$request['price']
      ];
      Supplement::create($post);

      $post = $request->except('_token');


      return redirect()->route('supplements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function show(Supplement $supplement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplement $supplement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplement $supplement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplement $supplement)
    {
        //
    }
}
