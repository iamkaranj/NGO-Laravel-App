@extends('adminlte::page')

@section('title', 'Admin panel | Equipment')

@section('content_header')
    <h1 class="m-0 text-dark">Add event</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="event_name" class="col-sm-10 control-label">Event name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="event_name" tabindex="1" placeholder="Event name">
            </div>
          </div>

          <div class="form-group date">
            <label for="dob" class="col-sm-6 control-label">Event date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" tabindex="3" id="event_date" name="event_date">
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          
          <div class="form-group">
            <label for="last_name" class="col-sm-10 control-label">Event type</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="2" id="event_type" name="event_type" placeholder="Event type">
            </div>
          </div>    

          <div class="form-group">
            <label for="phone" class="col-sm-6 control-label">Event address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="4" id="event_Address" name="event_address" placeholder="Event Address">
            </div>
          </div>


        </div>
      </div></br>
      <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-info btn-lg">Add event</button>
            <button type="submit" class="btn btn-default btn-lg">Cancel</button>
        </div>
      </div>
    </div>
</div>

@stop
