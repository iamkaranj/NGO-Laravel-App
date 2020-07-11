@extends('adminlte::page')

@section('title', 'Admin panel | Equipment')

@section('content_header')
    <h1 class="m-0 text-dark">Add equipment</h1>
@stop

@section('content')
<div class="container">
<form action="{{ route('equipments.store') }}" method="post">
  @csrf
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="first_name" class="col-sm-10 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" tabindex="1" placeholder="Name">
            </div>
          </div>

          <div class="form-group">
            <label for="first_name" class="col-sm-10 control-label">Brand</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="brand" tabindex="1" placeholder="Brand name">
            </div>
          </div>

          {{-- <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Equipment Type</label>
            <div class="col-sm-10">
              <select name="type" class="form-control">
                <option value=null> -- Select -- </option>
                <option value="old">Old</option>
                <option value="new">New</option>
                <option value="lease">Lease</option>
              </select></div>
          </div> --}}
          <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              <textarea name="description" placeholder="Description" class="form-control" cols="53" rows="1"></textarea>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="first_name" class="col-sm-10 control-label">Model</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="model" tabindex="1" placeholder="Model">
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-sm-5 control-label">Equipment Category</label>
            <div class="col-sm-10">
              <select name="category" class="form-control">
                <option> -- Select --</option>
                <option> Diagnose Machine </option>
                <option> Analyzer </option>
                <option> High-Tech Machine </option>
                <option> Disablity Items </option>
                <option> Covid-19 Kit</option>
                <option value="Physics Instruments">Physics Instruments</option>
              </select>
            </div>
          </div>
        </div>

      </div></br>
      <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-info">Add equipment</button>
            <button type="submit" class="btn btn-default">Cancel</button>
        </div>
      </div>
    </div>
  </form>
</div>

@stop
