<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use DataTables;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin/slider/index',[
        'sliders'=>Slider::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addslider/index');
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
        'title'=>'Required',
        'subtitle'=>'Required',
        'image'=>'Required',
      ]);
  $slider_id=Slider::insertGetId([
    'big_title'=>$request->title,
    'small_title'=>$request->subtitle,
    'image'=>$request->image,
  ]);
  $upload_photo = $request->file('image');
        $new_photo_name=$slider_id.'.'.$upload_photo->getClientOriginalExtension();
        $new_photo_location= base_path('public/uploads/slider_photos/'.$new_photo_name);
        Image::make($upload_photo)->resize(632,348)->save($new_photo_location);

      // $upload_photo->move(public_path('/uploads/slider_photos'),$new_photo_name);
        Slider::find($slider_id)->update([
          'image'=>$new_photo_name
        ]);
  return back()->with('message','new record added succesfully');
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
        return view('admin/slider/edit',[
          'sliders'=>Slider::find($id)
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
  if ($request->file('image')) {
    $upload_photoo=$request->file('image');
    $new_photoo_name=$id.'.'.$upload_photoo->getClientOriginalExtension();
    $file_location=base_path('public/uploads/slider_photos/'.$new_photoo_name);

    Image::make($upload_photoo)->save($file_location);
    Slider::find($id)->update([
      'image'=>$new_photoo_name
    ]);
    Slider::find($id)->update([

      'big_title'=>$request->title,
      'small_title'=>$request->subtitle,
      'image'=>$new_photoo_name,

    ]);
  }
  else {
    Slider::find($id)->update([

      'big_title'=>$request->title,
      'small_title'=>$request->subtitle,


    ]);
  }




      return back()->with('message','slider info updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $slider_id=Slider::find($id);
      // if (condition) {
      //   // code...
      // }

      unlink('uploads/slider_photos/'.$slider_id->image);
    //
    Slider::find($id)->delete();
    return back()->with('message','record delleted succesfully');
    }
}
