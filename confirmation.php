
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
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
                                  Your reservation at Silver Glen, E302 has been reserved for Sunday 20th October   </p>
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
                                  <a href="booking-history.php" class="btn-primary btn-md btn-rausch" style="font-weight:normal;margin:0;text-align:left;line-height:1.3;color:#fff;text-decoration:none;font-family:Helvetica, Arial, sans-serif;background-color:#68b243;-webkit-border-radius:5px;border-radius:5px;display:inline-block;padding:12px 24px 12px 24px;">
                                    
                                    <strong>My reservations</strong>
                                    
                                  </a>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div>
                          <div>
                            <br>
                            <hr class="standard-footer-hr" style="clear:both;max-width:580px;border-right:0;border-bottom:1px solid #cacaca;border-left:0;border-top:0;background-color:#dbdbdb;height:2px;width:100%;border:none;margin:auto;">
                            <div class="row-pad-bot-4" style="padding-bottom:25px;">
                            </div>
                            
                            
                            <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;">
                              <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top;">
                                  <td height="8" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;line-height:8px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                                </tr>
                              </tbody>
                            </table>
                            <table align="center" class="container booking-confirmation-fulljourney" style="background:#fff;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:580px;">
                              <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top;">
                                  <td style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;position:relative;text-align:left;vertical-align:top;word-wrap:normal;">
                                    <table class="booking-confirmation-corners" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                      <tbody>
                                        <tr style="padding:0;text-align:left;vertical-align:top;">
                                          <td class="booking-confirmation-corner" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;height:8px;line-height:8px;margin:0;padding:0;padding-bottom:0;position:relative;text-align:left;vertical-align:top;width:8px;word-wrap:normal;">
                                            
                                          </td>
                                          <td style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;line-height:8px;margin:0;padding:0;padding-bottom:0;position:relative;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                                          <td class="booking-confirmation-corner" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;height:8px;line-height:8px;margin:0;padding:0;padding-bottom:0;position:relative;text-align:left;vertical-align:top;width:8px;word-wrap:normal;">
                                            
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table class="row booking-confirmation-fulljourneyheader" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                                      <tbody>
                                        <tr style="padding:0;text-align:left;vertical-align:top;">
                                          <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                              <tr style="padding:0;text-align:left;vertical-align:top;">
                                                <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                                  <h3 style="color:#000;font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:700;letter-spacing:-.03px;line-height:1.3;margin:0;margin-bottom:12px;margin-top:4px;padding:0;text-align:left;word-wrap:normal;"> Table: <small style="color:#000;font-size:16px;font-weight:400;"> 1 </small>
                                                  <a href="#" style="color:#68b243;font-family:Helvetica, Arial, sans-serif;font-weight:700;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none;">
                                                </a>
                                              </h3>
                                              
                                              <h3 style="color:#000;font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:700;letter-spacing:-.03px;line-height:1.3;margin:0;margin-bottom:12px;margin-top:4px;padding:0;text-align:left;word-wrap:normal;">Reservation Time: <small style="color:#000;font-size:16px;font-weight:400;">5:10 PM</small>
                                              <a href="#" style="color:#68b243;font-family:Helvetica, Arial, sans-serif;font-weight:700;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none;"><strong style="font-size:14px;font-weight:400;">Change</strong>
                                            </a>
                                          </h3>
                                          
                                          
                                        </th>
                                        <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                                      </tr>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                            <table class="row booking-confirmation-duration" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                              <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top;">
                                  <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:50px;padding-right:50px;text-align:left;width:564px;">
                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                      <tr style="padding:0;text-align:left;vertical-align:top;">
                                       
                                        <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                                      </tr>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                            
                            <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;">
                              <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top;">
                                  <td height="16" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;position:relative;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                              <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top;">
                                  <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                      <tr style="padding:0;text-align:left;vertical-align:top;">
                                        <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                          <center style="min-width:532px;width:100%;">
                                            <table class="button primary radius float-center" style="border-collapse:collapse;border-spacing:0;float:none;margin:0;padding:0;text-align:center;vertical-align:top;width:auto !important;">
                                              <tr style="padding:0;text-align:left;vertical-align:top;">
                                                <td style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;position:relative;text-align:left;vertical-align:middle;word-wrap:normal;">
                                                  <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                                    <tr style="padding:0;text-align:left;vertical-align:top;">
                                                      <td style="-webkit-hyphens:none;background:red;border:none;border-collapse:collapse !important;border-radius:5px;color:#fff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;position:relative;text-align:left;vertical-align:middle;word-wrap:normal;">
                                                        <a href="#" style="border:0 solid #68b243;border-radius:5px;color:#fff;display:inline-block;font-family:Helvetica, Arial, sans-serif;font-size:16px;font-weight:700;line-height:1.3;margin:0;padding:12px 24px 12px 24px;text-align:center;text-decoration:none;"><strong>Cancel my booking</strong>
                                                      </a>
                                                    </td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>
                                          </table>
                                        </center>
                                      </th>
                                      <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                                    </tr>
                                  </table>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                          <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;">
                            <tbody>
                              <tr style="padding:0;text-align:left;vertical-align:top;">
                                <td height="4" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:4px;font-weight:400;line-height:4px;margin:0;padding:0;position:relative;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="row booking-confirmation-manage" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                            <tbody>
                              <tr style="padding:0;text-align:left;vertical-align:top;">
                                <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                                  <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                    <tr style="padding:0;text-align:left;vertical-align:top;">
                                      <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                        <div class="hr" style="background:#dbdbdb;border-radius:6px;font-size:6px;line-height:6px;margin:20px auto;"> </div>
                                        <p class="text-center" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:8px;padding:0;text-align:center;">Your host: Richard Stallman </p>
                                        
                                    </th>
                                    
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="booking-confirmation-corners" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <td class="booking-confirmation-corner" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;height:8px;line-height:8px;margin:0;padding:0;padding-bottom:0;position:relative;text-align:left;vertical-align:top;width:8px;word-wrap:normal;">
                                
                              </td>
                              <td style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;line-height:8px;margin:0;padding:0;padding-bottom:0;position:relative;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                              <td class="booking-confirmation-corner" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;height:8px;line-height:8px;margin:0;padding:0;padding-bottom:0;position:relative;text-align:left;vertical-align:top;width:8px;word-wrap:normal;">
                                
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;">
                  <tbody>
                    <tr style="padding:0;text-align:left;vertical-align:top;">
                      <td height="8" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;line-height:8px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                    </tr>
                  </tbody>
                </table>
                <div class="hr" style="background:#dbdbdb;border-radius:6px;font-size:6px;line-height:6px;margin:20px auto;"> </div>
                
                
                
                <table align="center" class="container booking-confirmation-payment" style="background:#fff;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:580px;">
                  <tbody>
                    <tr style="padding:0;text-align:left;vertical-align:top;">
                      <td style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;">
                        <table class="row booking-confirmation-header" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-12 large-12 columns first last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:8px;padding-left:16px;padding-right:16px;padding-top:20px;text-align:left;width:564px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <h2 style="color:#000;font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:700;letter-spacing:-.03px;line-height:20px;margin:0;margin-bottom:8px;padding:0;text-align:left;word-wrap:normal;">Payment information</h2>
                                    </th>
                                    <th class="expander" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-7 large-7 columns first" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:50px;padding-right:8px;text-align:left;width:322.33px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:4px;padding:0;text-align:left;">Booking ID</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                              <th class="small-5 large-5 columns last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:8px;padding-right:50px;text-align:left;width:225.67px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p class="text-right" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:4px;padding:0;text-align:right;">1AB780</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-6 large-6 columns first" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:50px;padding-right:8px;text-align:left;width:274px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:4px;padding:0;text-align:left;">Booked Date</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                              <th class="small-6 large-6 columns last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:8px;padding-right:50px;text-align:left;width:274px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p class="text-right" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:4px;padding:0;text-align:right;">XX October 2019</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                 
                        
                        <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-12 large-12 columns first last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:50px;padding-right:50px;text-align:left;width:564px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <h3 style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:16px;font-weight:700;letter-spacing:-.03px;line-height:1.3;margin:0;margin-bottom:8px;margin-top:8px;padding:0;text-align:left;word-wrap:normal;">Booking details</h3>
                                    </th>
                                    <th class="expander" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-12 large-12 columns first last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:50px;padding-right:50px;text-align:left;width:564px;">
                                
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="row booking-confirmation-fare" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-7 large-7 columns first" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:50px;padding-right:8px;text-align:left;width:322.33px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:4px;padding:0;text-align:left;">Tuesday XX October</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                              <th class="small-5 large-5 columns last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:8px;padding-right:50px;text-align:left;width:225.67px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p class="text-right" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:4px;padding:0;text-align:right;"> $14.00</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <td height="16" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <td height="16" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                            </tr>
                          </tbody>
                        </table>
                        
                      
                        <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-7 large-7 columns first" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:50px;padding-right:8px;text-align:left;width:322.33px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p class="booking-confirmation-total" style="color:#000;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:700;line-height:1.3;margin:0;margin-bottom:16px;margin-top:16px;padding:0;text-align:left;">Total amount:</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                              <th class="small-5 large-5 columns last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:8px;padding-right:50px;text-align:left;width:225.67px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p class="booking-confirmation-total text-right" style="color:#000;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:700;line-height:1.3;margin:0;margin-bottom:16px;margin-top:16px;padding:0;text-align:right;">$14.00</p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="row booking-confirmation-vat" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-12 large-12 columns first last" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <p class="text-center unlink" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:4px;padding:0;text-align:center;">
                                        <small style="color:#6e6e6e;font-size:12px;">* Costs inclusive of Taxes at 10%<br></small>
                                      </p>
                                    </th>
                                    <th class="expander" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table align="center" class="container help-section" style="background:#fff;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:580px;">
                  <tbody>
                    <tr style="padding:0;text-align:left;vertical-align:top;">
                      <td style="-webkit-hyphens:none;border-collapse:collapse !important;color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;">
                        <table class="row smallhr" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="font-size:6px;line-height:6px;padding:0;padding-bottom:0;text-align:left;vertical-align:top;">
                              <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:6px;font-weight:400;line-height:6px;margin:0 auto;padding:0;padding-bottom:0;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="font-size:6px;line-height:6px;padding:0;padding-bottom:0;text-align:left;vertical-align:top;">
                                    <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:6px;font-weight:400;line-height:6px;margin:0;padding:0;padding-bottom:0;text-align:left;">
                                      <div class="hr" style="background:#dbdbdb;border-radius:6px;font-size:6px;line-height:6px;margin:20px auto;margin-bottom:16px;margin-top:16px;"> </div>
                                    </th>
                                    <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:6px;font-weight:400;line-height:6px;margin:0;padding:0 !important;padding-bottom:0;text-align:left;visibility:hidden;width:0;"></th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="row booking-confirmation-header" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:8px;padding-left:16px;padding-right:16px;padding-top:20px;text-align:left;width:564px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                      <h2 style="color:#000;font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:700;letter-spacing:-.03px;line-height:20px;margin:0;margin-bottom:8px;padding:0;text-align:left;word-wrap:normal;">We're here to help
                                      </h2>
                                    </th>
                                    <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                                  </tr>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                        <table class="row tinyhr" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                          <tbody>
                            <tr style="font-size:1px;line-height:1px;padding:0;padding-bottom:0;text-align:left;vertical-align:top;">
                              <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:1px;font-weight:400;line-height:1px;margin:0 auto;padding:0;padding-bottom:0;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="font-size:1px;line-height:1px;padding:0;padding-bottom:0;text-align:left;vertical-align:top;">
                                    <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:1px;font-weight:400;line-height:1px;margin:0;padding:0;padding-bottom:0;text-align:left;">
                                      <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:8px;padding:0;text-align:left;">Browse our support centre for
                                        <a href="#" style="color:#68b243;font-family:Helvetica, Arial, sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none;"><strong style="font-weight:400;">Frequently Asked Questions</strong>
                                      </a>
                                    </p>
                                    <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:8px;padding:0;text-align:left;">Need help with
                                      <a href="#" style="color:#68b243;font-family:Helvetica, Arial, sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none;"><strong style="font-weight:400;">cancellations and refunds</strong>
                                    </a>
                                  </p>
                                  <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:8px;padding:0;text-align:left;">How to
                                    <a href="#" style="color:#68b243;font-family:Helvetica, Arial, sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none;"><strong style="font-weight:400;">amend your booking</strong>
                                  </a>
                                </p>
                                <div class="hr" style="background:#dbdbdb;border-radius:6px;font-size:1px;line-height:1px;margin:20px auto;margin-bottom:16px;margin-top:16px;"> </div>
                              </th>
                              <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:1px;font-weight:400;line-height:1px;margin:0;padding:0 !important;padding-bottom:0;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="padding:0;text-align:left;vertical-align:top;">
                        <th class="no-bottom small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0 !important;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding:0;text-align:left;vertical-align:top;">
                              <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;">
                                <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:8px;padding:0;text-align:left;">Or call Silver Glen on +123 456 789. Alternatively, you can send us an email at any time to support@silverglen.org</p>
                                <p style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;margin-bottom:8px;padding:0;text-align:left;">Please quote your Booking ID:</p>
                                <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tbody>
                                    <tr style="padding:0;text-align:left;vertical-align:top;">
                                      <td height="8" style="-webkit-hyphens:none;border-collapse:collapse !important;color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:8px;font-weight:400;line-height:8px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:normal;"> </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="transactionid unlink" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                                  <tr style="padding:0;text-align:left;vertical-align:top;">
                                    <td style="-webkit-hyphens:none;background:#f8f8f8;border:1px solid #e6e6e6;border-collapse:collapse !important;color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;letter-spacing:4px;line-height:1.3;margin:0;padding:8px;text-align:center;vertical-align:top;word-wrap:normal;">0000000000</td>
                                  </tr>
                                </table>
                              </th>
                              <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="row smallhr" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="font-size:6px;line-height:6px;padding:0;padding-bottom:0;text-align:left;vertical-align:top;">
                        <th class="small-12 large-12 columns first last" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:6px;font-weight:400;line-height:6px;margin:0 auto;padding:0;padding-bottom:0;padding-left:16px;padding-right:16px;text-align:left;width:564px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="font-size:6px;line-height:6px;padding:0;padding-bottom:0;text-align:left;vertical-align:top;">
                              <th style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:6px;font-weight:400;line-height:6px;margin:0;padding:0;padding-bottom:0;text-align:left;">
                                <div class="hr" style="background:#dbdbdb;border-radius:6px;font-size:6px;line-height:6px;margin:20px auto;margin-bottom:16px;margin-top:16px;"> </div>
                              </th>
                              <th class="expander" style="color:#6e6e6e;font-family:Helvetica, Arial, sans-serif;font-size:6px;font-weight:400;line-height:6px;margin:0;padding:0 !important;padding-bottom:0;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
              
                  
                  
                </td>
                <th class="expander" style="color:#4d4d4d;font-family:Helvetica, Arial, sans-serif;font-size:10px;font-weight:400;line-height:1.3;margin:0;padding:0 !important;text-align:left;visibility:hidden;width:0;"></th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </td>
  </tr>
</tbody>
</table>
</center>
</td>
</tr>
</table>

<div style="display:none;white-space:nowrap;font:15px courier;line-height:0;">                                                           </div>
</body>
</html><?php
}
?>