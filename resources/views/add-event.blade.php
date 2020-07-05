@extends('adminlte::page')

@section('title', 'Admin panel | Equipment')

@section('content_header')
    <h1 class="m-0 text-dark">Add event</h1>
@stop

@section('content')
<form action="{{ route('events.store') }}" method="post">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        @csrf
          <div class="form-group">
            <label for="event_name" class="col-sm-10 control-label">Event name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="event_name" tabindex="1" placeholder="Event name">
            </div>
          </div>

          <div class="form-group date">
            <label for="dob" class="col-sm-6 control-label">Event date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="date" tabindex="3" id="event_date" name="event_date">
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-5 control-label">About Event</label>
            <div class="col-sm-10">
              <textarea name="about" placeholder="Event About" class="form-control" cols="53" rows="1"></textarea>
            </div>
          </div>
      </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="last_name" class="col-sm-10 control-label">Event type</label>
            <div class="col-sm-10">
              <select name="type" class="form-control">
                <option> -- Select -- </option>
                <option value="Blood Donation">Blood Donation</option>
                <option value="Food Distribution">Food Distribution</option>
                <option value="Book Distribution">Book Distribution</option>
              </select>
            </div>
          </div>    

          <div class="form-group">
            <label for="address" class="col-sm-5 control-label"> Event Address</label>
            <div class="col-sm-10">
              <textarea name="address" placeholder="Address...." id="address" class="form-control" cols="53" rows="1"></textarea>
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
</form>

@stop
