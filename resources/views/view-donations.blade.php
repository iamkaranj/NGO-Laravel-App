@extends('adminlte::page')

@section('title', 'Admin panel | Donation')

@section('content_header')
    <h1 class="m-0 text-dark">Donation details</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
      <div class="box col-12">
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table id="donation_detail" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Donation id: activate to sort column descending" style="width: 203.4px;">Donation No.</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Donor name: activate to sort column ascending" style="width: 262.6px;">Donor name</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Donor name: activate to sort column ascending" style="width: 262.6px;">Donor Mobile</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Donor name: activate to sort column ascending" style="width: 262.6px;">Donor Email</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Donor name: activate to sort column ascending" style="width: 262.6px;">Donor City</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="donation type: activate to sort column ascending" style="width: 174.6px;">Type</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="donation type: activate to sort column ascending" style="width: 174.6px;">Item</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Donation amount: activate to sort column ascending" style="width: 233px;">Quantity</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 123.6px;">Date</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 123.6px;">Action</th>
                </tr>
            </thead>
            <tbody>            
            </tbody>
        </table>
      </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>
  $(function () {
    $('#donation_detail').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "serverSide": true,
      //pass url of table data
      
      "ajax": {
        "url": "{{ route('donation.datatable') }}",
          "type": "GET"
      },
      "aoColumns": [
        { data: 'id', name: 'id'},
        { data: 'donorName', name: 'donorName'},
        { data: 'donor.mobile', name: 'mobile'},
        { data: 'donor.email', name: 'email'},
        { data: 'donor.cities.name', name: 'city'},
        { data: 'type.itemable_type', name: 'type'},
        { data: 'item', name: 'item'},
        { data: 'type.quantity', name: 'quantity'},
        { data: 'date', name: 'date'},
        { data: 'action', name: 'action'}
      ]
    });
  });
</script>

@stop
