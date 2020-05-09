<?php
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
												<?php $query = mysqli_query($con, "select * from users where unitno='" . $_SESSION['login'] . "'");
												while ($row = mysqli_fetch_array($query)) { ?>
													<a href="menu.php" class="previous">&laquo; Go Back to Home Page</a> <br><br>
													<table class="row" style="border-spacing:0;border-collapse:collapse;text-align:left;vertical-align:top;padding:0;width:100%;position:relative;display:table;">
														<tbody>
															<tr style="padding:0;vertical-align:top;text-align:left;">
																<th class="small-12 large-12 columns first last" style="font-size:16px;padding:0;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:normal;line-height:1.3;margin:0 auto;padding-bottom:16px;width:564px;padding-left:16px;padding-right:16px;">
																	<p class="headline headline-lg heavy max-width-485" style="padding:0;margin:0;text-align:left;font-family:Helvetica, Helvetica, Arial, sans-serif;max-width:485px;font-weight:700;color:#000;line-height:1.3;font-size:32px;-webkit-hyphens:none;-ms-hyphens:none;margin-bottom:0 !important;">
																		Datewise Order Pickups Expenditure Summary for <?php echo $row['unitno']; ?>
																	</p>
																</th>
															</tr>
														</tbody>
													</table>
										</div>
										<div style="padding-bottom:8px;">
											<table class="row" style="border-spacing:0;border-collapse:collapse;text-align:left;vertical-align:top;padding:0;width:100%;position:relative;display:table;">
												<tbody>
													<tr style="padding:0;vertical-align:top;text-align:left;">
														<th class="small-12 large-12 columns first last" style="font-size:16px;padding:0;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:normal;line-height:1.3;margin:0 auto;padding-bottom:16px;width:564px;padding-left:16px;padding-right:16px;">
															<p class="body body-lg body-link-rausch light" style="padding:0;margin:0;font-family:Helvetica, Helvetica, Arial, sans-serif;text-align:left;color:#000;line-height:1.4;font-size:16px;-webkit-hyphens:none;-ms-hyphens:none;margin-bottom:0px !important;">
																You can generate your order pickups expenditure summary at Silver Glen.
																<form role="form" method="post" action="pickup-history-detailed.php">
																	<div class="form-group">
																		<label for="exampleInputPassword1">
																			From Date:
																		</label>
																		<div class="form-group">
																			<input placeholder="YYYY-MM-DD" id="fromdate" name="fromdate" type="text" class="form-control" required="true">
																		</div>
																	</div>

																	<div class="form-group">
																		<label for="exampleInputPassword1">
																			To Date::
																		</label>
																		<div class="form-group">
																			<input placeholder="YYYY-MM-DD" id="todate" name="todate" type="text" class="form-control" required="true">
																		</div>

																	</div>

																	</br>
																	<button type="submit" name="submit" id="submit" class="btn btn-o btn-success">
																		Show me my order takeout history
																	</button>
																</form>

														</th>
													</tr>
												</tbody>
											</table>
										</div>













										<!-- end spacer -->











										<!-- prevent Gmail on iOS font size manipulation -->
										<div style="display:none;white-space:nowrap;font:15px courier;line-height:0;">                                                           </div>
	</body>

	</html>

<?php
												}
											}
?>