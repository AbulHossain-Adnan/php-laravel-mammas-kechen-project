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
       <div class="col-md-12 m-auto">
         <div class="card   mb-3" >
              <div class="card-header text-white bg-info">Header</div>
              <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                @if (session('success_msg'))
                     <div class="alert alert-success">
                         {{ session('success_msg') }}
                     </div>
                 @endif



                 <!DOCTYPE html>


                 <html>

                 <head>

                     <title>Laravel 8 Datatables Tutorial - ItSolutionStuff.com</title>

                     <meta name="csrf-token" content="{{ csrf_token() }}">


                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

                     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

                     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
                     <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

                 </head>

                 <body>



                 <div class="container">

                     <h1>users table</h1>

                     <table class="table table-bordered data-table">

                         <thead>

                             <tr>

                                 <th>No</th>

                                 <th>Name</th>

                                 <th>Email</th>

                                 <th width="100px">Action</th>

                             </tr>

                         </thead>

                         <tbody>
                           <tr>
                             <td>sdf</td>
                             <td>sdf</td>
                             <td>sdf</td>
                           </tr>

                         </tbody>

                     </table>

                 </div>



                 </body>



                 <script type="text/javascript">

                   $(function () {



                     var table = $('.data-table').DataTable({

                         processing: true,

                         serverSide: true,

                         ajax: "{{ route('users.index') }}",

                         columns: [

                             {data: 'id', name: 'id'},

                             {data: 'name', name: 'name'},

                             {data: 'email', name: 'email'},

                             {data: 'action', name: 'action', orderable: false, searchable: false},

                         ]

                     });



                   });

                 </script>

                 </html>

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
   </div><!-- sl-main

@endsection
