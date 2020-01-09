
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{
header('location:index.php');
header("Refresh:5; url=booking.php");
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">

  <style type="text/css">
	@media only screen{
		html{
			min-height:100%;
			background:#fff;
		}

}	@media only screen and (max-width:596px){
		.small-float-center{
			margin:0 auto !important;
			float:none !important;
			text-align:center !important;
		}

}	@media only screen and (max-width:596px){
		.small-text-center{
			text-align:center !important;
		}

}	@media only screen and (max-width:596px){
		.small-text-left{
			text-align:left !important;
		}

}	@media only screen and (max-width:596px){
		.small-text-right{
			text-align:right !important;
		}

}	@media only screen and (max-width:596px){
		table.body table.container .hide-for-large{
			display:block !important;
			width:auto !important;
			overflow:visible !important;
		}

}	@media only screen and (max-width:596px){
		table.body table.container .row.hide-for-large{
			display:table !important;
			width:100% !important;
		}

}	@media only screen and (max-width:596px){
		table.body table.container .show-for-large{
			display:none !important;
			width:0;
			mso-hide:all;
			overflow:hidden;
		}

}	@media only screen and (max-width:596px){
		table.body img{
			width:auto !important;
			height:auto !important;
		}

}	@media only screen and (max-width:596px){
		table.body center{
			min-width:0 !important;
		}

}	@media only screen and (max-width:596px){
		table.body .container{
			width:100% !important;
		}

}	@media only screen and (max-width:596px){
		table.body .column,table.body .columns{
			height:auto !important;
			-moz-box-sizing:border-box;
			-webkit-box-sizing:border-box;
			box-sizing:border-box;
			padding-left:16px !important;
			padding-right:16px !important;
		}

}	@media only screen and (max-width:596px){
		table.body .column .column,table.body .column .columns,table.body .columns .column,table.body .columns .columns{
			padding-left:0 !important;
			padding-right:0 !important;
		}

}	@media only screen and (max-width:596px){
		table.body .collapse .column,table.body .collapse .columns{
			padding-left:0 !important;
			padding-right:0 !important;
		}

}	@media only screen and (max-width:596px){
		td.small-1,th.small-1{
			display:inline-block !important;
			width:8.33333% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-2,th.small-2{
			display:inline-block !important;
			width:16.66667% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-3,th.small-3{
			display:inline-block !important;
			width:25% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-4,th.small-4{
			display:inline-block !important;
			width:33.33333% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-5,th.small-5{
			display:inline-block !important;
			width:41.66667% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-6,th.small-6{
			display:inline-block !important;
			width:50% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-7,th.small-7{
			display:inline-block !important;
			width:58.33333% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-8,th.small-8{
			display:inline-block !important;
			width:66.66667% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-9,th.small-9{
			display:inline-block !important;
			width:75% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-10,th.small-10{
			display:inline-block !important;
			width:83.33333% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-11,th.small-11{
			display:inline-block !important;
			width:91.66667% !important;
		}

}	@media only screen and (max-width:596px){
		td.small-12,th.small-12{
			display:inline-block !important;
			width:100% !important;
		}

}	@media only screen and (max-width:596px){
		.column td.small-12,.column th.small-12,.columns td.small-12,.columns th.small-12{
			display:block !important;
			width:100% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-1,table.body th.small-offset-1{
			margin-left:8.33333% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-2,table.body th.small-offset-2{
			margin-left:16.66667% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-3,table.body th.small-offset-3{
			margin-left:25% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-4,table.body th.small-offset-4{
			margin-left:33.33333% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-5,table.body th.small-offset-5{
			margin-left:41.66667% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-6,table.body th.small-offset-6{
			margin-left:50% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-7,table.body th.small-offset-7{
			margin-left:58.33333% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-8,table.body th.small-offset-8{
			margin-left:66.66667% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-9,table.body th.small-offset-9{
			margin-left:75% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-10,table.body th.small-offset-10{
			margin-left:83.33333% !important;
		}

}	@media only screen and (max-width:596px){
		table.body td.small-offset-11,table.body th.small-offset-11{
			margin-left:91.66667% !important;
		}

}	@media only screen and (max-width:596px){
		table.body table.columns td.expander,table.body table.columns th.expander{
			display:none !important;
		}

}	@media only screen and (max-width:596px){
		table.body .right-text-pad,table.body .text-pad-right{
			padding-left:10px !important;
		}

}	@media only screen and (max-width:596px){
		table.body .left-text-pad,table.body .text-pad-left{
			padding-right:10px !important;
		}

}	@media only screen and (max-width:596px){
		table.menu{
			width:100% !important;
		}

}	@media only screen and (max-width:596px){
		table.menu td,table.menu th{
			width:auto !important;
			display:inline-block !important;
		}

}	@media only screen and (max-width:596px){
		table.menu.small-vertical td,table.menu.small-vertical th,table.menu.vertical td,table.menu.vertical th{
			display:block !important;
		}

}	@media only screen and (max-width:596px){
		table.menu[align=center]{
			width:auto !important;
		}

}	@media only screen{
		.unlink a{
			color:inherit;
			text-decoration:inherit;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-fulljourney.container{
			width:96% !important;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-fulljourney .column,table.body .booking-confirmation-fulljourney .columns{
			padding-left:0 !important;
			padding-right:0 !important;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-fulljourney .column.first,table.body .booking-confirmation-fulljourney .columns.first{
			padding-left:8px !important;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-fulljourney .column.last,table.body .booking-confirmation-fulljourney .columns.last{
			padding-left:8px !important;
			padding-right:8px !important;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-destination,table.body .booking-confirmation-origin{
			width:25px !important;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-station{
			width:auto !important;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-fare .first{
			padding-right:0 !important;
			width:70% !important;
		}

}	@media only screen and (max-width:596px){
		table.body .booking-confirmation-fare .last{
			padding-left:0 !important;
			width:30% !important;
		}

}</style></head>
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

							<a href="booking.php" style="font-family:Helvetica, Arial, sans-serif;font-weight:normal;padding:0;margin:0;text-align:left;line-height:1.3;color:#2199e8;text-decoration:none;" target="_blank">
                                <img alt="" class="standard-header center" height="40"  style="display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;width:auto;max-width:100%;clear:both;border:none;padding-top:48px;padding-bottom:16px;max-height:40px"></a>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div>
                        <table class="row" style="border-spacing:0;border-collapse:collapse;text-align:left;vertical-align:top;padding:0;width:100%;position:relative;display:table;">
                          <tbody>
                            <tr style="padding:0;vertical-align:top;text-align:left;">
                              <th class="small-12 large-12 columns first last" style="font-size:16px;padding:0;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:normal;line-height:1.3;margin:0 auto;padding-bottom:16px;width:564px;padding-left:16px;padding-right:16px;">
                                <p class="headline headline-lg heavy max-width-485" style="padding:0;margin:0;text-align:left;font-family:Helvetica, Helvetica, Arial, sans-serif;max-width:485px;font-weight:700;color:#000;line-height:1.3;font-size:32px;-webkit-hyphens:none;-ms-hyphens:none;margin-bottom:0 !important;">
                                  Reservation confirmed
                                </p>
                                <img src="includes\tick.gif" alt="" style="width: 50%;">
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
                                  Your reservation at Silver Glen has been reservered sucessfully!   </p>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      


                        <div style="padding-bottom:8px;">
                          <table class="row" style="border-spacing:0;border-collapse:collapse;text-align:left;vertical-align:top;padding:0;width:100%;position:relative;display:table;">
                            <tbody>
                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                <th class="col-pad-left-2 col-pad-right-2" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:normal;padding:0;margin:0;text-align:left;font-size:16px;line-height:1.3;padding-left:16px;padding-right:16px;">
                                  <a href="booking.php" class="btn-primary btn-md btn-rausch" style="font-weight:normal;margin:0;text-align:left;line-height:1.3;color:#fff;text-decoration:none;font-family:Helvetica, Arial, sans-serif;background-color:#68b243;-webkit-border-radius:5px;border-radius:5px;display:inline-block;padding:12px 24px 12px 24px;">

                                    <strong>Goto Home Page!</strong>

                                  </a>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        


                            
</body>
</html><?php
}
?>
