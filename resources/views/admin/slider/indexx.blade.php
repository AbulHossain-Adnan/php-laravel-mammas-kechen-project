@extends('layouts.dashboard_master')
@section('content')
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
  @endsection
  
