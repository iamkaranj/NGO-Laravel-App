@extends('adminlte::page')

@section('title', 'Admin panel | Equipment')

@section('content_header')
    <h1 class="m-0 text-dark">Add equipment</h1>
@stop

@section('content')
<div class="container">
<form action="{{ route('equipments.update', $equipment->id) }}" method="post">
  @csrf
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="first_name" class="col-sm-10 control-label">Company name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="name" tabindex="1" value="{{ $equipment->name }}">
            <input type="hidden" value="PUT" name="_method">
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Equipment Type</label>
            <div class="col-sm-10">
              <select name="type" class="form-control">
                <option> -- Select --</option>
                <option value="Old" @if ($equipment->type === "Old")
                    selected
                @endif >Old</option>
                <option value="New"@if ($equipment->type === "New")
                  selected
              @endif>New</option>
              </select></div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
            <label for="first_name" class="col-sm-10 control-label">Model</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="model" tabindex="1" value="{{ $equipment->model }}">
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-sm-5 control-label">Equipment Category</label>
            <div class="col-sm-10">
              <select name="category" class="form-control">
                <option> -- Select --</option>
                <option value="Wheel Chair">Wheel Chair</option>
                <option value="Covid-19">Covid-19</option>
              </select>
            </div>
          </div>

        </div>

      </div></br>
      <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-info">Update equipment</button>
            <button type="submit" class="btn btn-default">Cancel</button>
        </div>
      </div>
    </div>
  </form>
</div>

@stop
