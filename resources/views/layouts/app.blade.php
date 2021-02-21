<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- vendor css -->
        <link href="{{asset('dashboard_asset')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="{{asset('dashboard_asset')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
        <link href="{{asset('dashboard_asset')}}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
        <link href="{{asset('dashboard_asset')}}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

        <!-- Starlight CSS -->
        <link rel="stylesheet" href="{{asset('dashboard_asset')}}/css/starlight.css">

        @livewireStyles

        <!-- Scripts -->


        <script src="{{asset('dashboard_asset')}}/lib/jquery/jquery.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/popper.js/popper.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/bootstrap/bootstrap.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/jquery-ui/jquery-ui.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/d3/d3.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/rickshaw/rickshaw.min.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/chart.js/Chart.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/Flot/jquery.flot.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/Flot/jquery.flot.pie.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/Flot/jquery.flot.resize.js"></script>
        <script src="{{asset('dashboard_asset')}}/lib/flot-spline/jquery.flot.spline.js"></script>

        <script src="{{asset('dashboard_asset')}}/js/starlight.js"></script>
        <script src="{{asset('dashboard_asset')}}/js/ResizeSensor.js"></script>
        <script src="{{asset('dashboard_asset')}}/js/dashboard.js"></script>
      @stack('scripts')

    </head>
    <div class="container">
      <div class="col-md-12">
        <div class="card text-white bg-danger mb-3">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Danger card title</h5>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                      </tr>
                      <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                      </tr>
                    </tbody>
                  </table>

        </div>
      </div>

      </div>
    </div>


</html>
