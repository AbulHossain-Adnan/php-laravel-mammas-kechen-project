<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Bread;
use Carbon\Carbon;
use Image;
class BreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin/bread/index',[
        'breads'=>Bread::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/bread/create');
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

        'image'=>'Required',
        'title'=>'Required',
        'description'=>'Required',
      ]);
    $about_id=Bread::insertGetId([
      'icon'=>$request->title,
      'image'=>$request->title,
      'image2'=>$request->title,
      'title'=>$request->title,
      'description'=>$request->description,
      'created_at'=>Carbon::now(),
    ]);
$uploaded_photo=$request->file('image');
$new_photo_name=$about_id.'.'.$uploaded_photo->getClientOriginalExtension();
$filenew_location=base_path('public/uploads/bread_photos/'.$new_photo_name);
Image::make($uploaded_photo)->resize(451,348)->save($filenew_location);
Bread::find($about_id)->update([
  'image'=>$new_photo_name
]);
$uploaded_photo=$request->file('image2');
$new_photo_name=$about_id.'.'.$uploaded_photo->getClientOriginalExtension();
$filenew_location=base_path('public/uploads/bread2_photos/'.$new_photo_name);
Image::make($uploaded_photo)->resize(451,348)->save($filenew_location);
Bread::find($about_id)->update([
  'image2'=>$new_photo_name
]);
$uploaded_icon_photo=$request->file('icon');
$icon_photo_name=$about_id.'.'.$uploaded_photo->getClientOriginalExtension();
$filenew_location=base_path('public/uploads/bread_icon_photos/'.$icon_photo_name);
Image::make($uploaded_icon_photo)->save($filenew_location);
Bread::find($about_id)->update([

  'icon'=>$icon_photo_name,
]);
return back()->with('message','new record added successfully');

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
        return view('admin/bread/edit',[
          'breads'=>Bread::find($id)
        ]);
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
      $breads=Bread::find($id);
      unlink('uploads/bread_photos/'.$breads->image);
      unlink('uploads/bread2_photos/'.$breads->image2);
      unlink('uploads/bread_icon_photos/'.$breads->icon);
        Bread::find($id)->delete();
        return back()->with('message','record deleted successfully');


    }
}
