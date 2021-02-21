<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Dishes;
use Carbon\Carbon;
use Image;

class DishesController extends Controller
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
      return view('admin/dishes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([

        'icon'=>'Required',
        'title'=>'Required',
        'image'=>'Required',
      ]);
    $about_id=Dishes::insertGetId([
      'icon'=>$request->icon,
      'title'=>$request->title,
      'image'=>$request->image,
      'created_at'=>Carbon::now(),
    ]);
$uploaded_photo=$request->file('icon');
$new_photo_name=$about_id.'.'.$uploaded_photo->getClientOriginalExtension();
$filenew_location=base_path('public/uploads/dishes_icon_photos/'.$new_photo_name);
Image::make($uploaded_photo)->save($filenew_location);
Dishes::find($about_id)->update([
  'icon'=>$new_photo_name
]);
$uploaded_icon_photo=$request->file('image');
$icon_photo_name=$about_id.'.'.$uploaded_photo->getClientOriginalExtension();
$filenew_location=base_path('public/uploads/dishes_photos/'.$icon_photo_name);
Image::make($uploaded_icon_photo)->resize(887,841)->save($filenew_location);
Dishes::find($about_id)->update([

  'image'=>$icon_photo_name,
]);
return back();

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
}
