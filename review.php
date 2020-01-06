<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{
header('location:index.php');
}
else{
date_default_timezone_set('America/Los_Angeles');
$currentTime = date( 'm-d-Y h:i:s A', time () );

    $diningdate=$_POST['diningdate'];
	$diningtime=$_POST['diningtime_h'];
	$dishname=$_POST['dishname'];
	$room=$_POST['roomname_h'];
	$tablename=$_POST['tablename_h'];
    $seats=$_POST['seats'];
    $condono=$_SESSION['login'];
    $name=$_SESSION['firstname'];

    
    $member = 1;
    $guestno = $seats - $member;

    $query=mysqli_query($con,"SELECT * FROM pricingmodels WHERE dinerid=1");
    $num=mysqli_fetch_array($query);
    if($num>0)
    {
    $mealprice=$num['mealtotalprice'];
 }
 $query2=mysqli_query($con,"SELECT * FROM pricingmodels WHERE dinerid=2");
    $num2=mysqli_fetch_array($query2);
    if($num2>0)
    {
    $mealprice2=$num2['mealtotalprice'];
 }

 $guestprice = $mealprice2 * $guestno;
 $totalpri = $mealprice + $guestprice;
    
    
    // echo "Condo no: "; echo $condono;
    // echo "<br>";
    // echo "Name :"; echo $name;
    // echo "<br>";
    // echo  $diningdate;
    // echo "<br>";
    // echo $diningtime;
    // echo "<br>";
    // echo $dishname;
    // echo "<br>";
    // echo $room;
    // echo "<br>";
    // echo $tablename;
    // echo "<br>";
    // echo "Total seats "; echo $seats;
    // echo "<br>";
    // echo "price for menber "; echo $mealprice;
    // echo "<br>";
    // echo "Price for "; echo $guestno; echo "guests "; echo $guestprice;
    // echo "<br>";
    // echo "Total price "; echo $totalpri;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review Booking</title>

    <style type="text/css">

/* CLIENT-SPECIFIC STYLES */
#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

/* RESET STYLES */
body{margin:0; padding:0;}
img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
table{border-collapse:collapse !important;}
body{height:100% !important; margin:0; padding:0; width:100% !important;}

/* iOS BLUE LINKS */
.appleBody a {color:#999999; text-decoration: none;}
.appleFooter a {color:#999999; text-decoration: none;}

/* MOBILE STYLES */
@media screen { 
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);
    }

@media screen and (max-width: 525px) {

    /* ALLOWS FOR FLUID TABLES */
    table[class="wrapper"]{
      width:100% !important;
    }

    /* ADJUSTS LAYOUT OF LOGO IMAGE */
    td[class="logo"]{
      text-align: left;
      padding: 20px 0 0 0 !important;
    }

    td[class="logo"] img{
      margin:0 auto!important;
    }

    /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
    td[class="mobile-hide"]{
      display:none;}

    img[class="mobile-hide"]{
      display: none !important;
    }

    img[class="img-max"]{
      max-width: 100% !important;
      height:auto !important;
    }

    /* FULL-WIDTH TABLES */
    table[class="responsive-table"]{
      width:100%!important;
    }

    /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
    td[class="padding"]{
      padding: 10px 5% 15px 5% !important;
    }

    td[class="padding-copy"]{
      padding: 10px 5% 10px 5% !important;
      text-align: center;
    }

    td[class="padding-meta"]{
      padding: 30px 5% 0px 5% !important;
      text-align: center;
    }

    td[class="no-pad"]{
      padding: 0 0 20px 0 !important;
    }

    td[class="no-padding"]{
      padding: 0 !important;
    }

    td[class="section-padding"]{
      padding: 50px 15px 50px 15px !important;
    }

    td[class="section-padding-bottom-image"]{
      padding: 50px 15px 0 15px !important;
    }

    /* ADJUST BUTTONS ON MOBILE */
    td[class="mobile-wrapper"]{
        padding: 10px 5% 15px 5% !important;
    }

    table[class="mobile-button-container"]{
        margin:0 auto;
        width:100% !important;
    }

    a[class="mobile-button"]{
        width:80% !important;
        padding: 15px !important;
        border: 0 !important;
        font-size: 16px !important;
    }

    /* CUSTOM MQs */
    td[class="pad-header"]{
        padding: 25px 0 25px 0 !important;
    }

    td[class="pad-header-copy"]{
        padding: 0px 5% 0px 5% !important;
        text-align: center;
    }

    td[class="flex-p"]{
        font-size: 14px !important; 
        line-height: 24px !important;
        font-weight: 300 !important;
    }

    td[class="flex-p-bold"]{
        font-size: 14px !important; 
        line-height: 24px !important;
    }

    td[class="flex-room-charge"]{
        font-size: 14px !important; 
        line-height: 24px !important;
        font-weight: 600 !important;
    }

    td[class="flex-p-desc_charges"]{
        font-size: 14px !important; 
        line-height: 24px !important;
        font-weight: 300 !important;
    }

    td[class="flex-p-promotax"]{
        text-align: left !important;
        font-size: 14px !important;
        padding: 0 0 5px 0 !important;
        line-height: 18px !important;
    }

    td[class="flex-p-charges"]{
        text-align: left !important;
        font-size: 14px !important;
        padding: 0 0 5px 10px !important;
        line-height: 18px !important;
    }

    td[class="align-total-charge"]{
        text-align: left !important;
    }

}
</style>



</head>
<body style="margin: 0; padding: 0;">

<!-- HEADER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#EBEBEB">
            <div align="center" style="padding: 0px 15px 0px 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="580" class="responsive-table">
                    <!-- LOGO/PREHEADER TEXT -->
                  
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <!-- TOP TICKER -->
                                <tr>
                                    <td style="padding: 20px 0 0 0;" align="center">
                                        <img src="https://gallery.mailchimp.com/c6b1236c909d2d0e1b52e9f8f/images/a150d768-f865-4778-9d16-10ce88d1ee4c.png" width="580" height="6" border="0" alt="EDIT" class="img-max" style="display: block; padding: 0; font-family: Helvetica, Arial, sans-serif; color: #666666; width: 580px; height: 6px;">
                                    </td>
                                </tr>
                                <!-- CONFIRMATION COPY -->
                                <tr>
                                    <td bgcolor="#43515E" style="padding: 50px 0 50px 0;" class="pad-header">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #EBEBEB; font-weight: 300;" class="pad-header-copy">
                                                    Review Your booking for
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="font-size: 38px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #EBEBEB; font-weight: 300;" class="pad-header-copy">
                                                    <?php echo htmlentities($diningdate); ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>

<!-- RESERVATION DETAILS -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#EBEBEB" align="center" style="padding: 0 15px 0 15px;">
            <table border="0" cellpadding="0" cellspacing="0" width="580" class="responsive-table">
                <tr>
                    <td bgcolor="#ffffff">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <!-- RESERVATION DEETS -->
                            <tr>
                                <td style="padding: 30px 30px 0 30px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="left" style="padding: 0 0 15px 0; font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #43515E; font-weight: 300;">
                                                Booking Details
                                            </td>
                                        </tr>
                                        <!-- CHECK-IN -->
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 5px 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                        Name:
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #00b1b1; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                    <?php echo htmlentities($name); ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- CHECK-OUT -->
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 5px 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                        Condo Number:
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #00b1b1; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                    <?php echo htmlentities($condono); ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- # OF NIGHTS -->
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 5px 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                        Dining Date:
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                    <?php echo htmlentities($diningdate); ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- NUMBER OF ROOMS -->
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 5px 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                        Dining Time:
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                    <?php echo htmlentities($diningtime); ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- ROOM TYPE -->
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 0 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                        Room Name:
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                    <?php echo htmlentities($room); ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 5px 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                        Table Name:
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                    <?php echo htmlentities($tablename); ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 5px 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                        Number of seats:
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                    <?php echo htmlentities($seats); ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                            <!-- DASHED LINE -->
                            <tr>
                                <td style="padding: 10px 30px 30px 30px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="padding: 15px 0 0 0; font-size: 16px; line-height: 1px; font-family: Helvetica, Arial, sans-serif; color: #999999; border-bottom: 1px dashed #999999;" class="padding-copy">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                           
                            <!-- DASHED LINE -->
                            
                            
                            <!-- ROOM CHARGES -->
                            <tr>
                                <td style="padding: 0 30px 0 30px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="left" style="padding: 0 0 15px 0; font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #43515E; font-weight: 300; line-height: 22px; text-align: left;">
                                                Booking Charges
                                            </td>
                                        </tr>
                                        <!-- ROOM 1 -->
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 0 0 0 0;">
                                                            <!-- LEFT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                       
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- RIGHT COLUMN -->
                                                            <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                <tr>
                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                        
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- ROOM CHARGES -->
                                                    <tr>
                                                        <td>
                                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                <!-- NIGHTLY CHARGES -->
                                                                <tr>
                                                                    <td valign="top" style="padding: 0 0 0 0;">
                                                                        <!-- LEFT COLUMN -->
                                                                        <table cellpadding="0" cellspacing="0" border="0" width="47%" align="left" class="responsive-table">
                                                                            <tr>
                                                                                <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- RIGHT COLUMN -->
                                                                        <table cellpadding="0" cellspacing="0" border="0" width="47%" align="right" class="responsive-table">
                                                                            <tr>
                                                                                <td align="center" style="padding: 0 0 0 10px; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- CHARGE 1 -->
                                                                <tr>
                                                                    <td valign="top" style="padding: 0 0 0 0;">
                                                                        <!-- LEFT COLUMN -->
                                                                        <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                            <tr>
                                                                                <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                    Member :
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- RIGHT COLUMN -->
                                                                        <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                            <tr>
                                                                                <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-charges">
                                                                                1 x $ <?php echo htmlentities($mealprice); ?>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- CHARGE 2 -->
                                                                <tr>
                                                                    <td valign="top" style="padding: 0 0 5px 0;">
                                                                        <!-- LEFT COLUMN -->
                                                                        <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                            <tr>
                                                                                <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                Guest Price :
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- RIGHT COLUMN -->
                                                                        <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                            <tr>
                                                                                <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-charges">
                                                                                <?php echo htmlentities($guestno); ?> x  $ <?php echo htmlentities($mealprice2); ?>  
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- ROOM 2 -->
                                        <tr>
                                <td style="padding: 10px 30px 30px 30px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="padding: 15px 0 0 0; font-size: 16px; line-height: 1px; font-family: Helvetica, Arial, sans-serif; color: #999999; border-bottom: 1px dashed #999999;" class="padding-copy">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                                        
                                        <!-- TOTAL -->
                                        <tr>
                                            <td align="right" style="padding: 0 0 0 0; font-size: 36px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #00b1b1; font-weight: 100;" class="align-total-charge">
                                           $<?php echo htmlentities($totalpri); ?>
                                            </td>
                                        </tr>
                                        <!-- TOTAL TITLE -->
                                        <tr>
                                            <td align="right" style="font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px;" class="align-total-charge">
                                                Total (including tax recovery charges and service fees)
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- DASHED LINE -->
                            <tr>
                                <td style="padding: 10px 30px 30px 30px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="padding: 15px 0 0 0; font-size: 16px; line-height: 1px; font-family: Helvetica, Arial, sans-serif; color: #999999; border-bottom: 1px dashed #999999;" class="padding-copy">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                           
                                       
</table>



<!-- FOOTER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#EBEBEB" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td style="padding: 20px 0px 20px 0px;">
                        <!-- UNSUBSCRIBE COPY -->
                
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>