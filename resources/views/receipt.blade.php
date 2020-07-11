<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600" rel="stylesheet">
	<title>Shree Gangamata Charitable Trust</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script>
function showBank()
{
	$("#bankDIV").removeClass("none");
	$("#bankDIV").addClass("showDIV");
}


</script>

<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
	<!-- Font awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{ asset('css/fileinput.min.css') }}">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{ asset('css/awesome-bootstrap-checkbox.css') }}">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
						
				    <div class="row" >
							

<div class="col-md-12" style="font-size:35px; font-family:'Century Gothic'; color:#8B8B8B; text-align:center" >
Receipt</div>
<div class="col-md-12" >
	<div class="panel panel-default" style="border:none">

		<div class="panel-body" id="div_print">
			<div style=" padding:15px">
			<div style="border:#000 solid thin;padding:15px">
			<table width="100%" border="0">
				<tr>
				<td colspan="3"><img src="{{ asset('images/rec.jpg')}}" width="100%" class="img-responsive"></td>
				</tr>
				<tr>
					<td height="40" colspan="2"><span style="font-size:18px; color:#006">
					<strong>સુજ્ઞ મહાશયશ્રી&nbsp;</strong></span>
						<span style="color:#000; font-size:18px">
							{{ Str::title($donation->donor->firstname ." ". $donation->donor->lastname)}}
						</span>
					</td>

					<td width="25%" colspan="2"><span style="font-size:18px; color:#006"><strong>તા.</strong></span>
						<span style="color:#000; font-size:18px"> 
						{{ \Carbon\Carbon::parse($donation->created_at)->format('d M Y') }}
						</span></td>
				</tr>
				<tr>
					<td height="40" colspan="2"><span style="font-size:18px; color:#006"><strong>સરનામું&nbsp;</strong></span><span style="color:#000; font-size:18px"> 
						{{ $donation->donor->address }}	
					</span></td>
					<td colspan="2"><span style="font-size:18px; color:#006"><strong>મું.&nbsp;</strong></span><span style="color:#000; font-size:18px">
						{{ $donation->donor->cities->name }}	
					</span></td>
				</tr>
				<tr>
					<td width="60%" height="40"><span style="font-size:18px; color:#006"><strong>જીલ્લો&nbsp;</strong></span><span style="color:#000; font-size:18px">
						{{ $donation->donor->cities->name }}
					</span></td>
					<td height="40" colspan="3"><span style="font-size:18px; color:#006"><strong>આપશ્રી તરફથી આ ટ્રસ્ટને દાન</strong></span>
						@if( $donation->type->itemable_type == "funds" )
							<span style="color:#000; font-size:18px"> &nbsp;&nbsp;{{ $donation->type->quantity }}/-</span></td>
						</tr>
						<tr>
							<td height="40"><span style="font-size:18px; color:#006"><strong>અંકે રૂપિયા</strong></span><span style="color:#000; font-size:18px"> 
								{{ Str::title(App\Donations::getIndianCurrency($donation->type->quantity)) }} Only /-
							</span></td>
							<td height="40" colspan="3" align="right"><span style="color:#000; font-size:18px">
							<u> {{ $donation->type->itemable->modes }} </u>
							</span><span style="font-size:18px; color:#006"><strong> મળેલ છે.</strong></span></td>
						</tr>
						@else
							<span style="color:#000; font-size:18px"> &nbsp;&nbsp;{{ $donation->type->quantity }}/-</span></td>
						@endif
					
				<tr>
					<td height="78" valign="bottom"><span style="font-size:22px; color:#006"><strong>આભાર...</strong></span></td>
					<td height="78" colspan="3" align="right" valign="bottom"><span style="font-size:18px; color:#006"><strong><br>
					રકમ વસુલ કરનારની સહી</strong></span></td>
				</tr>
				<tr style="border-top:#009 solid">
					<td height="43" colspan="4" align="center"><span style="font-size:14px; color:#006">રોગ વિમોચન શ્રી ગંગામાતા ચેરીટેબલ ટ્રસ્ટને અપાતી સહાયની રકમ ઈન્ક્મ્ટેક્ષ કલમ ૮૦-જી સર્ટી. નંબર – ૧૧૮ અન્વ્યે કર રાહત ને પાત્ર છે.  PAN No. AAATR1878F</span></td>
				</tr>
				</table>
				</div>
			</div>

		</div>

		<center>
			<input name="b_print" type="button" class="ipt btn btn-default" onClick="printdiv('div_print');" value=" Print ">
			<a href="Receipt1.php" name="b_print" type="button" class="ipt btn btn-default" value=""> Back </a>
			</center>
	</div>
</div>






</div>





</div>
</div>

</div>
</div>



<style> 
.none { display:none; }, 
.showDIV { display:block; } 
</style>
	<!-- Loading Scripts -->

	
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/Chart.min.js') }}"></script>
	<script src="{{ asset('js/fileinput.js') }}"></script>
	<script src="{{ asset('js/chartData.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>

</html>
