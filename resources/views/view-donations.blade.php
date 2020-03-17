@extends('adminlte::page')

@section('title', 'Admin panel | Donation')

@section('content_header')
    <h1 class="m-0 text-dark">Donation detils</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
      <div class="box col-12">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Phone no</th>
                  <th>Date of birth</th>
                  <th>Donation amount</th>
                  <th>Country</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Meet</td>
                  <td>meetpatel@gmail.com</td>
                  <td>9876543210</td>
                  <td>29/03/1999</td>
                  <td>Rs 5000</td>
                  <td>India</td>
                  
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
</div>

@stop
