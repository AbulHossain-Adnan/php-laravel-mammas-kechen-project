<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\categori;
use App\models\Aitem;
use Carbon\Carbon;
use Image;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/item/index',
      ['items'=>Aitem::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/item/create',[
          'categories'=>Categori::all()
        ]);
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
        'category_id'=>'required',
      'name'=>'required',
      'price'=>'required',
      'description'=>'required',
      'image'=>'required',]

      );
    $item_id=Aitem::insertGetId([
        'category_id'=>$request->category_id,
        'name'=>$request->name,
        'price'=>$request->price,
        'description'=>$request->description,
        'image'=>$request->name,
        'created_at'=>Carbon::now(),
      ]);
      $upload_photo = $request->file('image');
            $new_photo_name=$item_id.'.'.$upload_photo->getClientOriginalExtension();
            $new_photo_location= base_path('public/uploads/item_photos/'.$new_photo_name);
            Image::make($upload_photo)->resize(300,300)->save($new_photo_location);

            Aitem::find($item_id)->update([
              'image'=>$new_photo_name
            ]);
      // return back()->with('success_msg','new item created successfully');
      return back()->with('message','Data added Successfully');
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
        return view('admin/item/edit',[
          'categories'=>Categori::all(),
          'items'=>Aitem::find($id)
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
        $file_location=base_path('public/uploads/item_photos/'.$new_photoo_name);

        Image::make($upload_photoo)->save($file_location);
        Aitem::find($id)->update([
          'image'=>$new_photoo_name
        ]);
        Aitem::find($id)->update([
          'image'=>$new_photoo_name,
          'category_id'=>$request->category_id,
          'name'=>$request->name,
          'price'=>$request->price,
          'description'=>$request->description,
        ]);
      }
      else {
        Aitem::fine($id)->update([
          'category_id'=>$request->category_id,
          'name'=>$request->name,
          'price'=>$request->price,
          'description'=>$request->description,

        ]);
    }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $items=Aitem::find($id);
      unlink('uploads/item_photos/'.$items->image);
      Aitem::find($id)->delete();
      return back()->with('message','record deleted successfully');
    }
}
