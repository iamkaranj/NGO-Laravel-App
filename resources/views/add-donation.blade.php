@extends('adminlte::page')

@section('title', 'Admin panel | Donation')

@section('content_header')
    <h1 class="m-0 text-dark">Donation</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <div class="box box-info">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Donation Form</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name" class="col-sm-10 control-label">First name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="first_name" placeholder="First name">
                  </div>
                </div>
								<div class="form-group">
                  <label for="last_name" class="col-sm-2 control-label">Last name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name">
                  </div>
                </div>
								<div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>
								<div class="form-group">
                  <label for="phone" class="col-sm-6 control-label">Phone number</label>
                  <div class="col-sm-10">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number">
                  </div>
                </div>
								<div class="form-group date">
                  <label for="dob" class="col-sm-6 control-label">Date of birth</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Phone number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="amounr" class="col-sm-6 control-label">Donation amount</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount">
                  </div>
                </div>
                <div class="form-group">
                  <label for="country" class="col-sm-2 control-label">Country</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter country">
                  </div>
                </div>
                <div class="form-group">
                  <label for="state" class="col-sm-2 control-label">State</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="state" placeholder="Enter state">
                  </div>
                </div>
                <div class="form-group">
                  <label for="city" class="col-sm-2 control-label">City</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                  </div>
                </div>
								<div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-10">
                  	<textarea class="form-control" id="address" name="address" rows="3" placeholder="Address"></textarea>
									</div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Donate</button>
                <button type="submit" class="btn btn-default">Cancel</button>
              </div></br></br>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>

@stop
