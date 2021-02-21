
@extends('layouts.dashboard_master')
@section('content')


<div class="sl-mainpanel">
     <nav class="breadcrumb sl-breadcrumb">
       <a class="breadcrumb-item" href="index.html">Starlight</a>
       <span class="breadcrumb-item active">Dashboard </span>
     </nav>
     <div class="sl-pagebody">
       <div class="row row-sm">

         <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->


     <title>Hello, world!</title>
   </head>
   <body>
     <div style="padding:0px">

     </div>

     <div class="container">
       <div class="col-md-12 ">
         <div class="card   mb-3" >
              <div class="card-header text-white  bg-info">Item</div>
              <div class="card-body">
                <h5 class="card-title">Add category</h5>
                @if (session('success_msg'))
                     <div class="alert alert-success">
                         {{ session('success_msg') }}
                     </div>
                 @endif

                <form action="{{route('item.update',$items->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">category_id</label>
      @error('category_id')
      <span class="text-danger">{{$message}}</span>
      @enderror
      <select class="form-control" name="category_id" >

        <option value="">select one</option>
        <?php foreach ($categories as $category): ?>
        <option value="{{$category->id}}">{{$category->name}}</option>
        <?php endforeach; ?>
      </select>
<input type="hidden" name="category_id" value="{{$category->id}}">

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter item name" name="name" value="{{$items->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">price</label>
      @error('price')
      <span class="text-danger">{{$message}}</span>
      @enderror
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter item price" name="price" value="{{$items->price}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">description</label>
      @error('description')
      <span class="text-danger">{{$message}}</span>
      @enderror
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter item description" name="description" value="{{$items->description}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">image</label>
      @error('image')
      <span class="text-danger">{{$message}}</span>
      @enderror
      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter item image" name="image">
    </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <a class="btn btn-danger" href="{{route('item.index')}}">back</a>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
              </div>
            </div>
       </div>

     </div>
       </div><!-- row -->
     </div><!-- sl-pagebody -->
     <footer class="sl-footer">
       <div class="footer-left">
         <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
         <div>Made by ThemePixels.</div>
       </div>
       <div class="footer-right d-flex align-items-center">
         <span class="tx-uppercase mg-r-10">Share:</span>
         <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
         <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
       </div>
     </footer>
   </div><!-- sl-mainpanel -->
@endsection
