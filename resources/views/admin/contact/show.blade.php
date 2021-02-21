@extends('layouts.dashboard_master')
@section('content')
<div class="sl-mainpanel">
     <nav class="breadcrumb sl-breadcrumb">
       <a class="breadcrumb-item" href="index.html">Starlight</a>
       <span class="breadcrumb-item active">Dashboard</span>
     </nav>
     <div class="sl-pagebody">
       <div class="row row-sm">


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

       <div class="col-md-8 m-auto">
         <div class="card mb-5">
        <div class="card-header text-white bg-info">Header</div>
        <div class="card-body">
          <h5 class="card-title margin-auto">contact message</h5>


      <h1>  Name::{{$contacts->name}}</h1>
      <h2>  email::{{$contacts->email}}</h2>
      <h3>  subject::{{$contacts->subject}}</h3>
      <h4>  message::{{$contacts->message}}</h4>

        </div>
</div>
       </div>
     </div>
     </div>
     </div>
     </div>

!-- sl-pagebody -->
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
