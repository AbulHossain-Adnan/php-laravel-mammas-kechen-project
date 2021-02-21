@extends('layouts.dashboard_master')
@section('content')

<div class="sl-mainpanel">
     <nav class="breadcrumb sl-breadcrumb">
       <a class="breadcrumb-item" href="index.html">Starlight</a>
       <span class="breadcrumb-item active">Dashboard</span>
     </nav>
     <div class="sl-pagebody">
       <div class="row row-sm">

         <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
     <title>Hello, world!</title>
   </head>
   <body>
     <div style="padding:15px">

     </div>
     <div class="container">

       <div class="col-md-12">
         <a class="btn btn-warning" href="{{route('categori.create')}}">Add</a>
         <div class="card mb-5">
           @if (session('success_msg'))
                <div class="alert alert-success">
                    {{ session('success_msg') }}
                </div>
            @endif

        <div class="card-header text-white bg-info">Header</div>
        <div class="card-body">
          <h5 class="card-title margin-auto">Item list</h5>

          <table id="user_table" class="table table-striped ">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>date</th>
        <th>message</th>
        <th>status</th>
        <th>action</th>


      </tr>
    </thead>
    <tbody>
      <?php foreach ($reservations as $key => $reservation): ?>
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$reservation->name}}</td>
        <td>{{$reservation->email}}</td>
        <td>{{$reservation->phone}}</td>
        <td>{{$reservation->date}}</td>
        <td>{{$reservation->message}}</td>
        <td>
        @if($reservation->status ==true)
    <div class="bg-success text-white">confirm</div>
        @else
          <div class="bg-danger text-white">not confirm yet</div>

        @endif
      </td>
        <td>
          @if($reservation->status ==false)
          <form id="edit-form.{{$reservation->id}}" action="{{route('reservation.update',$reservation->id)}}" method="POST" style="display:none;">
            @csrf
            @method('PUT')
          </form>

          <button type="button" class="btn btn-primary"onclick="if(confirm('are you sure?you want to confirm this file?')){
            event.preventDefault();
            document.getElementById('edit-form.{{$reservation->id}}').submit();
          }else{
              event.preventdefault();

          }">confirm</i></button>
          @endif



       <form id="delete-form.{{$reservation->id}}" action="{{route('reservation.destroy',$reservation->id)}}" method="POST" style="display:none;">
         @csrf
         @method('DELETE')
       </form>

       <button type="button" class="btn btn-danger"onclick="if(confirm('are you sure?you want to delete this file?')){
         event.preventDefault();
         document.getElementById('delete-form.{{$reservation->id}}').submit();
       }else{
           event.preventdefault();

       }"><i class="fa fa-trash"></i></button>


     </td>
      </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
        </div>
</div>
       </div>
     </div>
       </div><!-- row -->
     </div><!-- sl-pagebody -->
     </div><!-- sl-pagebody -->
     <!-- sl-pagebody -->
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
