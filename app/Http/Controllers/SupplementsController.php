<?php

namespace App\Http\Controllers;

use App\Supplement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SupplementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $supplements = Supplement::all();
        $searchTerm = $request->input('searchTerm');
        $supplements = Supplement::search($searchTerm)->get();
        return view('supplements.supplements', compact('supplements', 'searchTerm'));
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
      $validatedData = $request->validate([
        'file_name'=>'required',
        'title'=>'required|min:2',
        'price'=>'required|numeric'
      ]);

      $path = $request->file('file_name')->storePublicly('public/images');

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
    public function edit(Supplement $supplement, $id)
    {
      $supplement = Supplement::findOrFail($id);
      return view('supplements.edit', [
        'supplement'=>$supplement
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplement $supplement, $id)
    {
      $validatedData = $request->validate([
        'file_name'=>'required',
        'title'=>'required|min:2',
        'price'=>'required|numeric'
      ]);
          $post = [
         'title'=>$request['title'],
         'price'=>$request['price']
       ];
         $supplement = Supplement::findOrFail($id);
       if ($request->hasFile('file_name')){
         $path = $request->file('file_name')->storePublicly('public/images');
         $post['file_name'] = $path;
       }


       $supplement->update($post);
       return redirect()->to('supplements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplement $supplement, $id)
    {
      $supplement = Supplement::findOrFail($id);
      $supplement::destroy($id);
      Storage::disk('local')->delete($supplement['file_name']);
      return redirect()->to('supplements');
    }
}
