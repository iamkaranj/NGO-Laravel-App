@extends('adminlte::page')

@section('title', 'Admin panel | Equipment')

@section('content_header')
    <h1 class="m-0 text-dark">Add event</h1>
@stop

@section('content')
<form action="{{ route('events.update', $event->id ) }}" method="POST">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        @csrf
          <div class="form-group">
            <label for="event_name" class="col-sm-10 control-label">Event name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="event_name" tabindex="1" value="{{ $event->name }}">
              <input type="hidden" value="PUT" name="_method">
            </div>
          </div>

          <div class="form-group date">
            <label for="dob" class="col-sm-6 control-label">Event date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="date" tabindex="3" id="event_date" name="event_date" value="{{ $event->date->format('Y-m-d') }}">
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
            <label for="phone" class="col-sm-6 control-label">Event address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address" tabindex="4" id="event_Address" value="{{ $event->address }}" placeholder="Event Address">
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
