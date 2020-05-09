<?php

session_start();
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('America/Los_Angeles'); // change according timezone
$currentTime = date('d-m-Y h:i:s A', time());


//Function to format date
//If date is real, return format version of it, otherwhyse it return empty string
function formatData($date)
{
	if (!empty($date))
		return (date("l", strtotime($date)) . " " . date("m/d", strtotime($date)));
	else
		return '';
}

?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta http-equiv="content-type" content="text/plain; charset=UTF-8" />
	<script type="text/javascript">
		var tableToExcel = (function() {
			var uri = 'data:application/vnd.ms-excel;base64,',
				template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>',
				base64 = function(s) {
					return window.btoa(unescape(encodeURIComponent(s)))
				},
				format = function(s, c) {
					return s.replace(/{(\w+)}/g, function(m, p) {
						return c[p];
					})
				}
			return function(table, name) {
				if (!table.nodeType) table = document.getElementById(table)
				var ctx = {
					worksheet: name || 'Worksheet',
					table: table.innerHTML
				}
				window.location.href = uri + base64(format(template, ctx))
			}
		})()
	</script>

	<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

	<head>


		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width">
		<?php $query = mysqli_query($con, "select * from users where unitno='" . $_SESSION['login'] . "'");
		while ($row = mysqli_fetch_array($query)) { ?>

			<style type="text/css">
				@media only screen {
					html {
						min-height: 100%;
						background: #fff;
					}

				}

				@media only screen and (max-width:596px) {
					.small-float-center {
						margin: 0 auto !important;
						float: none !important;
						text-align: center !important;
					}

				}

				@media only screen and (max-width:596px) {
					.small-text-center {
						text-align: center !important;
					}

				}

				@media only screen and (max-width:596px) {
					.small-text-left {
						text-align: left !important;
					}

				}

				@media only screen and (max-width:596px) {
					.small-text-right {
						text-align: right !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body table.container .hide-for-large {
						display: block !important;
						width: auto !important;
						overflow: visible !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body table.container .row.hide-for-large {
						display: table !important;
						width: 100% !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body table.container .show-for-large {
						display: none !important;
						width: 0;
						mso-hide: all;
						overflow: hidden;
					}

				}

				@media only screen and (max-width:596px) {
					table.body img {
						width: auto !important;
						height: auto !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body center {
						min-width: 0 !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body .container {
						width: 100% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .column,
					table.body .columns {
						height: auto !important;
						-moz-box-sizing: border-box;
						-webkit-box-sizing: border-box;
						box-sizing: border-box;
						padding-left: 16px !important;
						padding-right: 16px !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .column .column,
					table.body .column .columns,
					table.body .columns .column,
					table.body .columns .columns {
						padding-left: 0 !important;
						padding-right: 0 !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .collapse .column,
					table.body .collapse .columns {
						padding-left: 0 !important;
						padding-right: 0 !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-1,
					th.small-1 {
						display: inline-block !important;
						width: 8.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-2,
					th.small-2 {
						display: inline-block !important;
						width: 16.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-3,
					th.small-3 {
						display: inline-block !important;
						width: 25% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-4,
					th.small-4 {
						display: inline-block !important;
						width: 33.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-5,
					th.small-5 {
						display: inline-block !important;
						width: 41.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-6,
					th.small-6 {
						display: inline-block !important;
						width: 50% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-7,
					th.small-7 {
						display: inline-block !important;
						width: 58.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-8,
					th.small-8 {
						display: inline-block !important;
						width: 66.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-9,
					th.small-9 {
						display: inline-block !important;
						width: 75% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-10,
					th.small-10 {
						display: inline-block !important;
						width: 83.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-11,
					th.small-11 {
						display: inline-block !important;
						width: 91.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					td.small-12,
					th.small-12 {
						display: inline-block !important;
						width: 100% !important;
					}

				}

				@media only screen and (max-width:596px) {

					.column td.small-12,
					.column th.small-12,
					.columns td.small-12,
					.columns th.small-12 {
						display: block !important;
						width: 100% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-1,
					table.body th.small-offset-1 {
						margin-left: 8.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-2,
					table.body th.small-offset-2 {
						margin-left: 16.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-3,
					table.body th.small-offset-3 {
						margin-left: 25% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-4,
					table.body th.small-offset-4 {
						margin-left: 33.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-5,
					table.body th.small-offset-5 {
						margin-left: 41.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-6,
					table.body th.small-offset-6 {
						margin-left: 50% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-7,
					table.body th.small-offset-7 {
						margin-left: 58.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-8,
					table.body th.small-offset-8 {
						margin-left: 66.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-9,
					table.body th.small-offset-9 {
						margin-left: 75% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-10,
					table.body th.small-offset-10 {
						margin-left: 83.33333% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body td.small-offset-11,
					table.body th.small-offset-11 {
						margin-left: 91.66667% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body table.columns td.expander,
					table.body table.columns th.expander {
						display: none !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .right-text-pad,
					table.body .text-pad-right {
						padding-left: 10px !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .left-text-pad,
					table.body .text-pad-left {
						padding-right: 10px !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.menu {
						width: 100% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.menu td,
					table.menu th {
						width: auto !important;
						display: inline-block !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.menu.small-vertical td,
					table.menu.small-vertical th,
					table.menu.vertical td,
					table.menu.vertical th {
						display: block !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.menu[align=center] {
						width: auto !important;
					}

				}

				@media only screen {
					.unlink a {
						color: inherit;
						text-decoration: inherit;
					}

				}

				@media only screen and (max-width:596px) {
					table.body .booking-confirmation-fulljourney.container {
						width: 96% !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .booking-confirmation-fulljourney .column,
					table.body .booking-confirmation-fulljourney .columns {
						padding-left: 0 !important;
						padding-right: 0 !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .booking-confirmation-fulljourney .column.first,
					table.body .booking-confirmation-fulljourney .columns.first {
						padding-left: 8px !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .booking-confirmation-fulljourney .column.last,
					table.body .booking-confirmation-fulljourney .columns.last {
						padding-left: 8px !important;
						padding-right: 8px !important;
					}

				}

				@media only screen and (max-width:596px) {

					table.body .booking-confirmation-destination,
					table.body .booking-confirmation-origin {
						width: 25px !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body .booking-confirmation-station {
						width: auto !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body .booking-confirmation-fare .first {
						padding-right: 0 !important;
						width: 70% !important;
					}

				}

				@media only screen and (max-width:596px) {
					table.body .booking-confirmation-fare .last {
						padding-left: 0 !important;
						width: 30% !important;
					}

				}
			</style>
	</head>

<body style="-moz-box-sizing:border-box;-ms-text-size-adjust:100%;-webkit-box-sizing:border-box;-webkit-text-size-adjust:100%;box-sizing:border-box;color:#4d4d4d;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;Margin:0;min-width:100%;padding:0;text-align:left;width:100%!important">

	<table class="body" style="background:#fff;border-collapse:collapse;border-spacing:0;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%;">
		<tr style="padding:0;text-align:left;vertical-align:top;">
			<td class="center" align="center" valign="top" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;">
				<center style="min-width:580px;width:100%;">
					<table align="center" class="container booking-confirmation-header float-center" style="background:#fff;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px;">
						<tbody>
							<tr style="padding:0;text-align:left;vertical-align:top;">
								<td style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;">

									<table class="spacer float-center" style="border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%;">
										<tbody>
											<tr style="padding:0;text-align:left;vertical-align:top;">
												<td height="16" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
											</tr>
										</tbody>
									</table>
									<div>
										<table class="row" style="border-spacing:0;border-collapse:collapse;text-align:left;vertical-align:top;padding:0;width:100%;position:relative;display:table;">
											<tbody>
												<tr style="padding:0;vertical-align:top;text-align:left;">
													<th class="small-12 large-12 columns first last" style="font-size:16px;padding:0;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:normal;line-height:1.3;margin:0 auto;padding-bottom:16px;width:564px;padding-left:16px;padding-right:16px;">
														<a href="#" style="font-family:Helvetica, Arial, sans-serif;font-weight:normal;padding:0;margin:0;text-align:left;line-height:1.3;color:#2199e8;text-decoration:none;">

													</th>
												</tr>
											</tbody>
										</table>
									</div>
									<div>
										<style>
											a {
												text-decoration: none;
												display: inline-block;
												padding: 8px 16px;
											}

											a:hover {
												background-color: #ddd;
												color: black;
											}

											.previous {
												background-color: #f1f1f1;
												color: black;
											}

											.next {
												background-color: #4CAF50;
												color: white;
											}

											.round {
												border-radius: 50%;
											}
										</style>
										</head>

										<body>

											<style type="text/css">
												.bgggox {
													font-size: x-large;
													border: 1px solid black;

												}

												.bgggox:hover {
													-moz-box-shadow: 0 0 10px #ccc;
													-webkit-box-shadow: 0 0 10px #ccc;
													box-shadow: 0 0 10px #ccc;
													cursor: pointer;
												}
											</style>
											<div class="bgggox" onclick="history.back(-1)">
												<img src="images/390380-200.png" style="width: 80px; height: 80px;" onclick="history.back(-1)">Go Back</img>
											</div>
											</br></br>
											<div class="bgggox" onclick="home()">
												<img src="images/390380-200.png" style="width: 80px; height: 80px;" onclick="home()">Go to Main Page</img>
											</div>
											</br></br></br>
											<script>
												function home() {
													location.href = "menu.php";
												}
											</script>
									</div>
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="section-block" id="basicform">
												<h3 class="section-title">Weekly Menu</h3>
												</br>
											</div>

											<div class="card">
												<div class="card-body">
													<div class="panel-body">
														<div class="row">
															<div class="col-md-12">
																</br>

																<?php
																$fdate = $_POST['fromdate'];
																$tdate = $_POST['todate'];

																?>
																<h5 align="center" style="color:blue">Weekly Menu from <?php echo $fdate ?> to <?php echo $tdate ?></h5> </br>

																<table class="table table-striped table-hover table-bordered table-responsive" id="sample-table-1">

																	<?php

																	$sql = mysqli_query($con, "SELECT DISTINCT weeklymenu.diningdate as dd, weeklymenu.dishname1 as d1,
                                                             weeklymenu.dishname2 as d2,dish1.dishdescription as ddesc1,dish2.dishdescription as ddesc2,weeklymenu.roomid as rid, room.id as roomid, room.roomname as rname
                                                                FROM weeklymenu join room on weeklymenu.roomid = room.id JOIN dish as dish1 ON weeklymenu.dishname1 = dish1.dishname 
                                                                JOIN dish as dish2 ON weeklymenu.dishname2 = dish2.dishname WHERE weeklymenu.diningdate >= '$fdate' AND weeklymenu.diningdate <= '$tdate'");
																	$cnt = 1;
																	//Save data to local variable
																	$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
																	$noOfDays = count($data); //Check how many columns I need. If > 5 I will need to recreate the table
																	$noOfIteration = intdiv($noOfDays, 5) + 1; //Counting how many iteration
																	if ($noOfDays % 5 == 0)
																		$noOfIteration -= 1;
																	for ($i = 0; $i < $noOfIteration; $i++) { //Iterate Whole Table as much as necessary 
																		$step = 5 * $i;
																	?>
																		<thead style="background-color:#154e84;">
																			<tr>
																				<th colspan="6" style="font-size:x-large;text-align: center;color: white;background-color: black;">Weekly Menu </th>

																			</tr>
																			<tr>
																				<th></th>
																				<th style="font-size:x-large;color:white;"><?php if (!empty($data[0 + $step])) echo (formatData($data[0 + $step]['dd'])); ?></th>
																				<th style="font-size:x-large;color:white;"><?php if (!empty($data[1 + $step])) echo (formatData($data[1 + $step]['dd'])); ?></th>
																				<th style="font-size:x-large;color:white;"><?php if (!empty($data[2 + $step])) echo (formatData($data[2 + $step]['dd'])); ?></th>
																				<th style="font-size:x-large;color:white;"><?php if (!empty($data[3 + $step])) echo (formatData($data[3 + $step]['dd'])); ?></th>
																				<th style="font-size:x-large;color:white;"><?php if (!empty($data[4 + $step])) echo (formatData($data[4 + $step]['dd'])); ?></th>
																			</tr>
																		</thead>
																		<!--Table head-->
																		<!--Table body-->
																		<tbody>
																			<tr style="font-size:x-large;color: black; background-color:#ADD8E6;">
																				<th scope="row">1</th>
																				<td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['d1'])); ?></td>
																				<td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['d1'])); ?></td>
																				<td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['d1'])); ?></td>
																				<td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['d1'])); ?></td>
																				<td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['d1'])); ?></td>
																			</tr>
																			<tr style="font-size:large;color: black;background-color:white;">
																				<td></td>
																				<td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['ddesc1'])); ?></td>
																				<td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['ddesc1'])); ?></td>
																				<td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['ddesc1'])); ?></td>
																				<td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['ddesc1'])); ?></td>
																				<td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['ddesc1'])); ?></td>
																			</tr>
																			<tr style="font-size:x-large;color: black;background-color:#ADD8E6;">
																				<th scope="row">2</th>
																				<td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['d2'])); ?></td>
																				<td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['d2'])); ?></td>
																				<td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['d2'])); ?></td>
																				<td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['d2'])); ?></td>
																				<td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['d2'])); ?></td>
																			</tr>
																			<tr style="font-size:large;color: black;background-color:white;">
																				<td></td>
																				<td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['ddesc2'])); ?></td>
																				<td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['ddesc2'])); ?></td>
																				<td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['ddesc2'])); ?></td>
																				<td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['ddesc2'])); ?></td>
																				<td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['ddesc2'])); ?></td>
																			</tr>
																		</tbody>
																	<?php
																		$cnt = $cnt + 1;
																	} ?>
																</table>

																<script type=" text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js">
																</script>
																<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
																<script type="text/javascript">
																	function Export() {
																		html2canvas(document.getElementById('sample-table-1'), {
																			onrendered: function(canvas) {
																				var data = canvas.toDataURL();
																				var docDefinition = {
																					content: [{
																						image: data,
																						width: 500
																					}]
																				};
																				pdfMake.createPdf(docDefinition).download("Table.pdf");
																			}
																		});
																	}
																</script>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>






									<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
									<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
									<script type="text/javascript">
										function Export() {
											html2canvas(document.getElementById('sample-table-1'), {
												onrendered: function(canvas) {
													var data = canvas.toDataURL();
													var docDefinition = {
														content: [{
															image: data,
															width: 500
														}]
													};
													pdfMake.createPdf(docDefinition).download("Table.pdf");
												}
											});
										}
									</script>





									<!-- end spacer -->





									<!--===============================================================================================-->
									<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
									<!--===============================================================================================-->
									<script src="vendor/animsition/js/animsition.min.js"></script>
									<!--===============================================================================================-->
									<script src="vendor/bootstrap/js/popper.js"></script>
									<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
									<!--===============================================================================================-->
									<script src="vendor/select2/select2.min.js"></script>
									<!--===============================================================================================-->
									<script src="vendor/daterangepicker/moment.min.js"></script>
									<script src="vendor/daterangepicker/daterangepicker.js"></script>
									<!--===============================================================================================-->
									<script src="vendor/countdowntime/countdowntime.js"></script>
									<!--===============================================================================================-->
									<script src="js/main.js"></script>







									<!-- prevent Gmail on iOS font size manipulation -->
									<div style="display:none;white-space:nowrap;font:15px courier;line-height:0;">                                                           </div>
</body>

</html>

<?php
		}

?>