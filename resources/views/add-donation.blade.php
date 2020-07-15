@extends('adminlte::page')

@section('title', 'Admin panel | Donation')
@section('css')
    <style>
      .fund-donation{ display: none;}
      .equipment-donation{ display: none;}
      .ui-autocomplete.ui-widget {
  font-family: Verdana,Arial,sans-serif;
  font-size: 11px;
}
    </style>
@stop
@section('content_header')
    <h1 class="m-0 text-dark">Add donation</h1>
@stop

@section('content')
<form action="{{ route('donations.store') }}" method="POST" autocomplete="off">
@csrf
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="firstname" class="col-sm-10 control-label">First name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="firstname" id="firstname" tabindex="1" placeholder="First name">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" tabindex="3" id="email" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="col-sm-5 control-label">Company (optional)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="10" name="company" id="company" placeholder="Company Name"> 
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <textarea name="address" placeholder="Address...." id="address" class="form-control" cols="53" rows="1"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <label for="state" class="col-sm-2 control-label">State</label>
            <div class="col-sm-10">
              <select name="state" id="state" class="form-control">
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="postal_code" class="col-sm-2 control-label">Pincode</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="10" name="pincode" id="postal_code" placeholder="Pincode  "> 
            </div>
          </div>

          <div class="form-group fund-donation">
            <label for="amount" class="col-sm-6 control-label">Donation Amount</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" tabindex="10" name="amount" id="amount" placeholder="Amount"> 
            </div>
          </div>

          <div class="form-group equipment-donation">
            <label for="amount" class="col-sm-6 control-label">Number Of Items</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" tabindex="10" name="qty" id="qty" placeholder="Enter Quantity"> 
            </div>
          </div>

          <div class="form-group fund-donation equipment-donation">
            <label for="note" class="col-sm-2 control-label">Note</label>
            <div class="col-sm-10">
              <textarea name="note" placeholder="Note...." id="note" class="form-control" cols="53" rows="1"></textarea>
            </div>
          </div>

        </div>
        
        <div class="col-md-6">
          
          <div class="form-group">
            <label for="lastname" class="col-sm-10 control-label">Last name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="2" id="lastname" name="lastname" placeholder="Last name">
            </div>
          </div>    

          <div class="form-group">
            <label for="phone" class="col-sm-6 control-label">Phone number</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" tabindex="4" id="mobile" name="mobile" placeholder="Phone number">
            </div>
          </div>

          <div class="form-group date">
            <label for="dob" class="col-sm-6 control-label">Date of birth</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" tabindex="5" id="dob" name="dob" placeholder="Date Of Birth">
            </div>
          </div>

          <div class="form-group">
            <label for="city" class="col-sm-2 control-label">City</label>
            <div class="col-sm-10">
              <select name="city" id="city" class="form-control"></select>
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-sm-2 control-label">Country</label>
            <div class="col-sm-10">
              <select name="country" id="country" class="form-control">
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="amounr" class="col-sm-6 control-label">Donation Type</label>
            <div class="col-sm-10">
              <select name="type" id="type" class="form-control">
                <option value="">-- Select --</option>
                <option value="fund_donation">Fund Donation</option>
                <option value="equipment">Equipment</option>
              </select>
            </div>
          </div>

          <div class="form-group fund-donation">
            <label for="amounr" class="col-sm-6 control-label">Payment Mode</label>
            <div class="col-sm-10">
              <select name="mode" id="mode" class="form-control">
                <option value="">-- Select --</option>
                <option value="Cash">Cash</option>
                <option value="UPI/Paytm/Gpay">UPI/Paytm/Gpay</option>
                <option value="Cash">Cash</option>
                <option value="DD">DD</option>
              </select>
            </div>
          </div>

          <div class="form-group equipment-donation">
            <label for="amounr" class="col-sm-6 control-label">Equipment Type</label>
            <div class="col-sm-10">
              <select name="equipment" id="equipment" class="form-control">
                <option value="">-- Select --</option>
                @foreach ($equipments as $item)
                  <option value="{{ $item->id }}">{{ "($item->name) - $item->model" }}</option>
                @endforeach
              </select>
            </div>
          </div>

        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12" style="text-align: center">
            <button type="submit" class="btn btn-info ">Donate</button>
            <button type="submit" class="btn btn-default">Cancel</button>
        </div>
      </div>
</div>
</form>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

<script>
$.noConflict();
jQuery(document).ready(function($) {
  $('#dob').datepicker({  
    dateFormat: 'dd/MM/yy'
    });
    getCityFromPostal();
    $('#city').select2({
        placeholder: "Select City",
        ajax: {
            url: '{{ route('address.data', 'Cities') }}',
            dataType: 'json',
            type: "GET",
            quietMillis: 50,
            allowClear: true,
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (result) {
                return {
                    results: result.data
                };
            },
            cache: true
        }
    });
    $('#country').select2({
        placeholder: "Select Country",
        ajax: {
            url: '{{ route('address.data', 'Countries') }}',
            dataType: 'json',
            type: "GET",
            quietMillis: 50,
            allowClear: true,
            height: 30,
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (result) {
                return {
                    results: result.data
                };
            },
            cache: true
        }
    });
    $('#state').select2({
        placeholder: "Select State",
        ajax: {
            url: '{{ route('address.data', 'States') }}',
            dataType: 'json',
            type: "GET",
            quietMillis: 50,
            allowClear: true,
            height: 30,
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (result) {
                return {
                    results: result.data
                };
            },
            cache: true
        }
    });
    $('#postal_code').on('keyup change', function(){
        getCityFromPostal();
    }); 

    function getCityFromPostal(){
        $("#country").empty();
        $("#city").empty();
        $("#state").empty();
        $.ajax({
            url: '{{ route('address.postal') }}',
            dataType: 'json',
            type: "GET",
            data: { postal_code : $("#postal_code").val() } 
        }).done(function(response){
            console.log(response.data.country);
                $("#country").append($("<option></option>")
                            .attr("value", response.data.country.id)
                            .text(response.data.country.name)); 
                $("#city").append($("<option></option>")
                            .attr("value", response.data.city.id)
                            .text(response.data.city.name));
                $("#state").append($("<option></option>")
                            .attr("value", response.data.state.id)
                            .text(response.data.state.name));
        });
    }
    $("#country").on("change", function() {
        $("#city").empty();
        $("#postal_code").val('');
        $("#state").val('');
    });
    $("#state").on("change", function() {
        $("#city").empty();
        $("#postal_code").val('');
        $("#state").val('');
    });
    $("#city").on("change", function() {
        $("#country").empty();
        $("#state").empty();
        $("#postal_code").empty();
        var selectedCity = $("#city option:selected").val();
        $.ajax({
            url: '{{ route('address.cities') }}',
            dataType: 'json',
            type: "GET",
            data: { city : selectedCity } 
        }).done(function(response){
                $("#country").append($("<option></option>")
                            .attr("value", response.data.country.id)
                            .text(response.data.country.name)); 
                $("#postal_code").val(response.data.postalCode);
                $("#state").append($("<option></option>")
                            .attr("value", response.data.state.id)
                            .text(response.data.state.name)); 
        });
    });
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif

    $("#type").change(function () {
    // Fetching Value
    var val = $(this).val();
    if(val == 'fund_donation'){
      $('.equipment-donation').hide();
      $('.fund-donation').show();
    }else{
      $('.fund-donation').hide();
      $('.equipment-donation').show();
    }
    });
      $(document).on('keyup',"#firstname",function() {
        // var id = $(this).attr('id');
        // id = id.replace("productName_",'');
        // console.log(id);
      $(this.target).find('input').autocomplete();
      $("#firstname").autocomplete({
        source: function( request, response ) {
      // Fetch data
        $.ajax({
          url: "{{ route('ajax.donor.data') }}",
          type: 'get',
          dataType: "json",
          data: {
          search: request.term
          },
          success: function(data) {
          response( data );
          }
        });
      },
      select: function (event, ui) {
      // Set selection
      $("#firstname").val(ui.item.value); // display the selected text
      $("#lastname").val(ui.item.lastname); // display the selected text
      $("#email").val(ui.item.email); // display the selected text
      $("#city").val(ui.item.city); // display the selected text
      $("#postal_code").val(ui.item.pincode); // display the selected text
      getCityFromPostal();
      $("#mobile").val(ui.item.mobile); // display the selected text
      $("#address").val(ui.item.address); // display the selected text
      $("#firstname").val(ui.item.value); // display the selected text
      $('#dob').datepicker("setDate", new Date(ui.item.dob)).trigger('change');
      $("#firstname").autocomplete('close');
      },
    });
  });
});

</script>

@stop