@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<!-- Small boxes start -->
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $data['total_donated_cash']; ?></h3>
              <p>Total Donation Amount</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $data['total_equipments'] ?></h3>

              <p>Total Equipments</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-wrench"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $data['total_donors'] ?></h3>

              <p>Total Donors</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-users"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $data['total_events']; ?></h3>

              <p>Total Events</p>
            </div>
            <div class="icon">
              
              <i class="nav-icon fas fa-inr"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
<!-- Small boxes end -->

      <div class="row">
      

        <!-- Pie chart start -->
        <div class="col-md-8">
          <!-- PIE CHART -->
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Donation type wise chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="height:230px; min-height:230px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Events list</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                @if( !$events->isEmpty() )
                  @foreach($events as $event)
                    <li class="item">
                      <span class="product-description">
                        {{ $event->type.' event organized at '.$event->address }}
                      </span>
                    </li>
                  @endforeach
                @else
                  <li class="item">
                    <span class="product-description">
                      No Record found.
                    </span>
                  </li>
                @endif
                
                
                
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="/events" class="uppercase">View All Events</a>
            </div>
            <!-- /.card-footer -->
          </div>
        </div>
        <!-- Recent activity end -->
      </div>

      <div class="row">
        <!-- Latest donations start  -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Latest Donations</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Donation ID</th>
                      <th>Donation No</th>
                      <th>Donation Type</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                <tr>
                  <td colspan="4" class="text-center"> No records found. </td>
                </tr>
                
                    
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="/donations" class="btn btn-sm btn-secondary float-right">View All Donations</a>
            </div>
            <!-- /.card-footer -->
          </div>
        </div>
        <!-- Latest donations end -->

        <!-- Recent activity start -->
        
      </div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>
  $(function () {

    // data smaple for bar chart (donation)
    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Total Donation',
          backgroundColor     : 'rgba(80,217,6,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Total spend',
          backgroundColor     : 'rgba(250, 111, 61, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    // data smaple for pie chart

    labels = <?php echo $pie_labels; ?>;
    values = <?php echo $pie_values; ?>;

    

    var donutData        = {
      labels: [
          labels  
      ],
      datasets: [
        {
          data: [ values ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
        }
      ]
    }


    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

  })
</script>

@stop
