<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CoachController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $coaches = Coach::paginate(10);
      return view('coach.coach', [
        'coaches' => $coaches
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coach.form');
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
        'name'=>'required|min:2',
        'surname'=>'required|min:2',
        'email'=>'required',
        'description'=>'required',
        'phone'=>'required|numeric'
      ]);

      $path = $request->file('file_name')->storePublicly('public/images');
      $post = [
        'file_name'=> $path,
        'name'=>$request['name'],
        'surname'=>$request['surname'],
        'email'=>$request['email'],
        'description'=>$request['description'],
        'phone'=>$request['phone']
      ];
      Coach::create($post);

      $post = $request->except('_token');


      return redirect()->route('coaches');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach, $id)
    {
      $coach = Coach::findOrFail($id);
      return view('coach.edit', [
        'coach'=>$coach
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coach $coach, $id)
    {
      $validatedData = $request->validate([
        'name'=>'required|min:2',
        'surname'=>'required|min:2',
        'email'=>'required',
        'description'=>'required',
        'phone'=>'required|numeric'
      ]);
          $post = [
         'name'=>$request['name'],
         'surname'=>$request['surname'],
         'email'=>$request['email'],
         'description'=>$request['description'],
         'phone'=>$request['phone']
       ];
         $coach = Coach::findOrFail($id);
       if ($request->hasFile('file_name')){
         $path = $request->file('file_name')->storePublicly('public/images');
         $post['file_name'] = $path;
       }


       $coach->update($post);
       return redirect()->to('coaches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach, $id)
    {
      $coach = Coach::findOrFail($id);
      $coach::destroy($id);
      Storage::disk('local')->delete($coach['file_name']);
      return redirect()->to('coaches');
    }
}
