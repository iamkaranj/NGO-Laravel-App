@extends('adminlte::page')

@section('title', 'Admin panel | Equipment')

@section('content_header')
    <h1 class="m-0 text-dark">Add equipment</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="first_name" class="col-sm-10 control-label">First name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="first_name" tabindex="1" placeholder="First name">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" tabindex="3" id="email" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-group date">
            <label for="dob" class="col-sm-6 control-label">Date of birth</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" tabindex="5" id="dob" name="dob" placeholder="Phone number">
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-sm-2 control-label">Country</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="7" id="country" name="country" placeholder="Enter country">
            </div>
          </div>

          <div class="form-group">
            <label for="city" class="col-sm-2 control-label">City</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="9" id="city" name="city" placeholder="Enter city">
            </div>
          </div>

        </div>
        
        <div class="col-md-6">
          
          <div class="form-group">
            <label for="last_name" class="col-sm-10 control-label">Last name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="2" id="last_name" name="last_name" placeholder="Last name">
            </div>
          </div>    

          <div class="form-group">
            <label for="phone" class="col-sm-6 control-label">Phone number</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" tabindex="4" id="phone" name="phone" placeholder="Phone number">
            </div>
          </div>


          <div class="form-group" style="width: 82%">
            <label for="sel1">Select equipment</label>
            <select class="form-control" id="equipment" name="equipment">
              <option>Select Equipment</option>
            </select>
          </div>

          <div class="form-group">
            <label for="state" class="col-sm-2 control-label">State</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="8" id="state" placeholder="Enter state">
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="10" name="address" id="address" placeholder="Address...."> 
            </div>
          </div>

        </div>
      </div></br>
      <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-info btn-lg">Add equipment</button>
            <button type="submit" class="btn btn-default btn-lg">Cancel</button>
        </div>
      </div>
    </div>
</div>

@stop
