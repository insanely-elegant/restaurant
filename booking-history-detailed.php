<?php
$total['membermealtotal'] = 0;
$total['membermealtaxvalue'] = 0;
$total['memberguestmealtaxvalue'] = 0;
$total['seat'] = 0;
$total['memberguestmealprice'] = 0;
$total['guestmealprice'] = 0;
$total['guestmealtaxvalue'] = 0;
$total['totaltaxvalues'] = 0;
$total['memberguestmealtotalprice'] = 0;
$total['grandtotal'] = 0;
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
	header('location:index.php');
} else {
	date_default_timezone_set('America/Los_Angeles');
	$currentTime = date('m-d-Y h:i:s A', time());
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

												<a href="booking-history.php" class="previous">&laquo; Go Back </a> <br><br>
												<a href="menu.php" class="previous">&laquo; Go to Home Page </a> <br><br>
												<table class="row" style="border-spacing:0;border-collapse:collapse;text-align:left;vertical-align:top;padding:0;width:100%;position:relative;display:table;">
													<tbody>
														<tr style="padding:0;vertical-align:top;text-align:left;">
															<th class="small-12 large-12 columns first last" style="font-size:16px;padding:0;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:normal;line-height:1.3;margin:0 auto;padding-bottom:16px;width:564px;padding-left:16px;padding-right:16px;">
																<p class="headline headline-lg heavy max-width-485" style="padding:0;margin:0;text-align:left;font-family:Helvetica, Helvetica, Arial, sans-serif;max-width:485px;font-weight:700;color:#000;line-height:1.3;font-size:32px;-webkit-hyphens:none;-ms-hyphens:none;margin-bottom:0 !important;">
																	Datewise Expenditure Summary
																</p>
															</th>
														</tr>
													</tbody>
												</table>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-12">
															</br>

															<?php
															$unitno = $_SESSION['login'];
															$fdate = $_POST['fromdate'];
															$tdate = $_POST['todate'];

															?>
															<h5 align="center" style="color:blue">Dining Report for Unit No: <?php echo $unitno ?> and <?php echo $unitno . 'G' ?> </br>
																<p style="color:black "> </br> from </p> <?php echo $fdate ?> <p style="color:black "></br> to </p><?php echo $tdate ?>
															</h5> </br>
															<div class="card-body">
																<div class="form-group"><input class="btn btn-secondary btn-lg" id="btnExport" type="button" onclick="Export()" value="Print Dining Report"></br> </br>

																	<div class="card-body">
																		<div class="form-group">
																			<div align="left"> Search by dish name below: </div> </br>
																			<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Dish Name" title="Type in a dish name">
																		</div>


																	</div>
																</div>
															</div>


															<table class="table table-hover" id="sample-table-1">
																<thead>
																	<tr>
																		<th class="center">#</th>
																		<th>First Name</th>
																		<th>Last Name</th>
																		<th>Unit Number</th>
																		<th>Room Name </th>
																		<th>Table Name </th>
																		<th>Dining Date </th>
																		<th>Had Checked In?</th>
																		<th>Dish Name</th>
																		<th>Member Meal Base Price</th>
																		<th>Member Meal Tax Percent</th>
																		<th>Member Meal Tax Value</th>
																		<th>Guest Meal Base Price</th>
																		<th>Guest Meal Tax Percent</th>
																		<th>Guest Meal Tax Value</th>
																		<!-- <th>Guest Meal Grand Total</th> -->
																		<th>Total Seats </th>
																		<th>Gross Total Price (Member Total + Guest Total)</th>
																		<th>View Invoice</th>

																	</tr>
																</thead>
																<tbody>
																	<?php
																	$sql = mysqli_query($con, "SELECT * FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' AND condono LIKE '$unitno%' ORDER BY condono ASC");

																	$cnt = 1;
																	$LinkMap[1] = 'receipt.php';
																	$LinkMap[0] = 'receipt-guest.php';
																	while ($row = mysqli_fetch_array($sql)) {
																	?>
																		<tr>
																			<td class="center"><?php echo $cnt; ?>.</td>
																			<td class="hidden-xs"><?php echo $row['firstname']; ?></td>
																			<td><?php echo $row['lastname']; ?></td>
																			<td style="text-transform: uppercase;"><?php echo $row['condono']; ?></td>
																			<td><?php echo $row['room']; ?></td>
																			<td><?php echo $row['tablename']; ?></td>
																			<td><?php echo $row['diningdate']; ?></td>
																			<td style="font-weight: bold;text-transform: uppercase;"><?php echo htmlentities($row['isCheckedin'] ? 'Yes' : 'No'); ?></td>
																			<td><?php echo $row['dishname']; ?></td>
																			<td><?php
																				if ($row['membermealprice'] != NULL) {
																					echo '$' . $row['membermealprice'];
																				} else {
																					echo "";
																				}
																				?></td>
																			<td><?php
																				if ($row['membermealtaxpercent'] != NULL) {
																					echo $row['membermealtaxpercent'] . '%';
																				} else {
																					echo "";
																				}
																				?></td>

																			<td><?php
																				if ($row['membermealtaxvalue'] != NULL) {
																					echo '$' . $row['membermealtaxvalue'];
																				} else {
																					echo "";
																				}
																				?></td>

																			<!-- <td><?php
																						if ($row['membermealtotalprice'] != NULL) {
																							echo '$' . $row['membermealtotalprice'];
																						} else {
																							echo "";
																						}
																						?></td> -->

																			
																			<td><?php if ($row['guestmealprice'] != NULL) {
																					echo '$' . $row['guestmealprice'];
																				} else {
																					echo "";
																				} ?></td>
																			<td><?php
																				if ($row['guestmealtaxpercent'] != NULL) {
																					echo $row['guestmealtaxpercent'] . '%';
																				} else {
																					echo "";
																				}
																				?></td>

																			<td><?php if ($row['guestmealtaxvalue'] != NULL) {
																					echo '$' . $row['guestmealtaxvalue'];
																				} else {
																					echo "";
																				} ?></td>
																			<!-- <td><?php if ($row['guestmealtotalprice'] != NULL) {
																							echo '$' . $row['guestmealtotalprice'];
																						} else {
																							echo "";
																						} ?></td> -->
																			<td><?php echo $row['seat']; ?></td>
																			<td><?php if ($row['grandtotal'] != NULL) {
																					echo '$' . $row['grandtotal'];
																				} else {
																					echo "";
																				} ?></td>

																			<td> <a href="<?php echo $LinkMap[$row['guestmealprice'] != NULL ? '0' : '1']; ?>?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-dark">View Invoice</button></td>

																			<?php
																			$total['membermealtotal'] += $row['membermealtotalprice'];
																			$total['membermealtaxvalue'] += $row['membermealtaxvalue'];

																			$total['seat'] += $row['seat'];
																			$total['memberguestmealtaxvalue'] += $row['memberguestmealtaxvalue'];

																			$total['memberguestmealprice'] += $row['memberguestmealprice'];
																			$total['memberguestmealtotalprice'] += $row['memberguestmealtotalprice'];

																			$total['guestmealprice'] += $row['guestmealprice'];
																			$total['guestmealtaxvalue'] += $row['guestmealtaxvalue'];
																			$total['totaltaxvalues'] += $row['guestmealtaxvalue'] + $row['membermealtaxvalue'] + $row['memberguestmealtaxvalue'];
																			$total['grandtotal'] += $row['grandtotal'];
																			?>

																		</tr>
																	<?php
																		$cnt = $cnt + 1;
																	} ?>
																	<div class="card-body border-top">
																		<div class="row">

																			<div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
																				<h2 class="font-weight-normal mb-3"><span><?php echo '$' . $total['totaltaxvalues']; ?></span> </h2>
																				<div class="mb-0 mt-3 legend-item">
																					<span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
																					<span class="legend-text">Total Tax:</span></div>
																			</div>
																			<div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
																				<h2 class="font-weight-normal mb-3">
																					<span><?php echo '$' . $total['grandtotal']; ?></span>
																				</h2>
																				<div class="text-muted mb-0 mt-3 legend-item">
																					<span class="fa-xs text-secondary mr-1 legend-title">
																						<i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Gross Total Amount </span></div>
																			</div>
																			<div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
																				<h4> Total Meals Consumed: <?php echo $total['seat']; ?></h4>
																				<p> Data shows total meals consumed during the period selected.
																				</p>

																			</div>
																		</div>
																	</div>

																</tbody>
															</table>
															<?php

															$result1 = mysqli_query($con, "SELECT membermealtaxpercent,memberguestmealtaxpercent,membermealtaxvalue, sum(grandtotal) as membertotal FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' and condono = '$unitno'");
															$row1 = mysqli_fetch_array($result1);
															$membermealtaxpercent = $row1['membermealtaxpercent'];
															$memberguestmealtaxpercent = $row1['memberguestmealtaxpercent'];
															$membermealtaxvalue = $row1['membermealtaxvalue'];
															$membertotal = $row1['membertotal'];
															$membernetvalue = $membertotal - $membermealtaxvalue;
															echo "Net Amount (Members + MemberGuests) : " . '$' . htmlentities($membernetvalue);
															echo "<br>Tax Percentage (Members)  : " . htmlentities($membermealtaxpercent) . '%';
															echo "<br>Tax Percentage (MemberGuests)  : " . htmlentities($memberguestmealtaxpercent) . '%';
															echo "<br>Tax Value (Members + MemberGuests) : " . '$' . htmlentities($membermealtaxvalue);
															echo "<br>Gross Total Amount  (Members) : " . '$' . htmlentities($membertotal) . "</br>";

															$result2 = mysqli_query($con, "SELECT sum(grandtotal) as guesttotal, guestmealtaxpercent, sum(guestmealtaxvalue) as guestmealtaxvalue FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' and condono LIKE '$unitno%G'");
															$row2 = mysqli_fetch_array($result2);
															$guesttotal = $row2['guesttotal'];
															$guestmealtaxpercent = $row2['guestmealtaxpercent'];
															$guestmealtaxvalue = $row2['guestmealtaxvalue'];
															$guestnet = $guesttotal - $guestmealtaxvalue;

															echo "<br>Net Amount (Guest) : " . '$' . htmlentities($guestnet);
															echo "<br>Tax Percentage (Guest)  : " . htmlentities($guestmealtaxpercent) . '%';
															echo "<br>Tax Value (Guest)  : " . '$' . htmlentities($guestmealtaxvalue);
															echo "<br>Gross Total Amount ( Guest) : " . '$' . htmlentities($guesttotal) . "</br>";
															echo "<br>Total Meals Served : " . $total['seat'];
															$totaltaxcollected = $membermealtaxvalue + $guestmealtaxvalue;
															$grandtots = $membertotal + $guesttotal;
															echo "<br>Total Tax Due ( Member + MemberGuest + Guests) : " . '$' . htmlentities($totaltaxcollected);
															echo "<br>Grand Total ( Member + MemberGuest + Guests) : " . '$' . $grandtots; ?>


															<script>
																function myFunction() {
																	var input, filter, table, tr, td, i, txtValue;
																	input = document.getElementById("myInput");
																	filter = input.value.toUpperCase();
																	table = document.getElementById("example");
																	tr = table.getElementsByTagName("tr");
																	for (i = 0; i < tr.length; i++) {
																		td = tr[i].getElementsByTagName("td")[1];
																		if (td) {
																			txtValue = td.textContent || td.innerText;
																			if (txtValue.toUpperCase().indexOf(filter) > -1) {
																				tr[i].style.display = "";
																			} else {
																				tr[i].style.display = "none";
																			}
																		}
																	}
																}

															
															</script>

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
		}
?>