<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
  date_default_timezone_set('America/Los_Angeles');
  $currentTime = date('m-d-Y h:i:s A', time());


  $diningdate = $_POST['diningdate'];
  $diningtime = $_POST['diningtime_h'];
  $dishname_h = $_POST['dishname_h'];
  $dishname = $_POST['dishname'];
  $room = $_POST['roomname_h'];
  $tablename = $_POST['tablename_h'];
  $seats = $_POST['seats'];
  $name = "Free Diner";
  $room_id = $_POST['room'];
  



  $guestno = $seats;

  $query2 = mysqli_query($con, "SELECT * FROM pricingmodels WHERE dinerid=1");
  $num2 = mysqli_fetch_array($query2);
  if ($num2 > 0) {
    $mealprice2 = $num2['mealprice'];
    $freedinermealtax = $num2['mealtaxvalue'];
    $freedinermealprice = $num2['mealprice'];
    $freedinertaxpercent = $num2['mealtaxpercent'];
  }

  $memberguestprice = $mealprice2 * $guestno;
  $totalpri = $mealprice + $memberguestprice;
  $totaltaxvalue = $guestno * $guestmealtax;
  $grandtotal = $totalpri + $totaltaxvalue;
  $freedinertotal = $grandtotal * 0;

  // generating bookingid
  $query = mysqli_query($con, "SELECT COUNT(*) FROM freediner WHERE diningdate='$diningdate'");
  $row = mysqli_fetch_array($query);
  $totalr = $row[0];

  $code = 'SGFD';
  $date1 = $diningdate;
  $ymd = date("ymd", strtotime($date1));
  $squence = $totalr + 1;
  $squence = str_pad($squence, 4, 0, STR_PAD_LEFT);
  $bookingid =  $code . $ymd . $squence;
  $dinertype = "freediner";

  if ($guestno < 1) {
    $type = "none";
  }


?>
  <?php

  $dd = $_POST['dd'];
  $dt  = $_POST['dt'];
  $r = $_POST['r'];
  $tn = $_POST['tn'];
  $s = $_POST['s'];
  $gn = $_POST['gn'];
  $dn = $_POST['dn'];
  $name = "Free Diner";
  $rid = $_POST['rid'];
  $gt = $_POST['gt'];
  $bkid = $_POST['bkid'];
  $dntype = $_POST['dntype'];
  $freegrandtotal = $_POST['freegrandtotal'];
  $freetotal = $_POST['freetotal'];




  if (isset($_POST['submit'])) {
    $sql = mysqli_query($con,  "insert into freediner(bookingid,name,dishname,roomid,room,tablename,seat,guestno,diningdate,diningtime,dinerType,freedinermealprice,freedinermealtaxpercent,freedinermealtaxvalue,freedinermealtotalprice,grandtotal,freedinertotal)
	values('$bkid','$name','$dn','$rid','$r','$tn', '$s','$gn', '$dd', '$dt','$dntype','$freedinermealprice','$freedinertaxpercent','$freedinermealtax','$mealprice2','$freegrandtotal', '$freetotal')");

    if ($sql == 1) {
      $last_id = $con->insert_id;
      $_SESSION['msg'] = "Reservation Confirmed !!";
      $msg = "Hello $name, \n Booking of table has been successfull \n  <a src='guest_confirm_success.php?id=$last_id' > Click here to view</a>";
      $msg = wordwrap($msg, 70);
      mail($_SESSION['email'], "Booking Status", $msg);
      header('Location: guest_confirm_success.php?id=' . $last_id);
      exit();
    } else {
      header('Location: guest_confirm_fail.php');
      exit();
    }
  }


  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Review Your Guest Booking Information - Silver Glen</title>
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
    <!--===============================================================================================-->




    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

      div,
      p,
      a,
      li,
      td {
        -webkit-text-size-adjust: none;
      }

      .ReadMsgBody {
        width: 100%;
        background-color: #ffffff;
      }

      .ExternalClass {
        width: 100%;
        background-color: #ffffff;
      }

      p {
        padding: 0 !important;
        margin-top: 0 !important;
        margin-right: 0 !important;
        margin-bottom: 0 !important;
        margin-left: 0 !important;
      }

      .visibleMobile {
        display: none;
      }

      .hiddenMobile {
        display: block;
      }

      @media only screen and (max-width: 600px) {
        table[class=fullTable] {
          width: 96% !important;
          clear: both;
        }

        table[class=fullPadding] {
          width: 85% !important;
          clear: both;
        }

        table[class=col] {
          width: 45% !important;
        }

        .erase {
          display: none;
        }
      }

      @media only screen and (max-width: 420px) {
        table[class=fullTable] {
          width: 100% !important;
          clear: both;
        }

        table[class=fullPadding] {
          width: 85% !important;
          clear: both;
        }

        table[class=col] {
          width: 100% !important;
          clear: both;
        }

        table[class=col] td {
          text-align: left !important;
        }

        .erase {
          display: none;
          font-size: 0;
          max-height: 0;
          line-height: 0;
          padding: 0;
        }

        .visibleMobile {
          display: block !important;
        }

        .hiddenMobile {
          display: none !important;
        }
      }
    </style>


  </head>

  <body>
    

      <div class="limiter">
        <?php

        date_default_timezone_set('America/Los_Angeles');
        $Hour = date('G'); {
          if ($Hour >= 5 && $Hour <= 11) {
            $message = "Good Morning";
          } else if ($Hour >= 12 && $Hour <= 18) {
            $message = "Good Afternoon";
          } else if ($Hour >= 19 || $Hour <= 4) {
            $message = "Good Evening";
          }

        ?>
          <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
              <p style="font-size: x-large; text-align: center; color: black"> <?php echo ($message); ?> , Diner</p>
            <?php } ?>

            <form method="POST" action="review-guest.php" class="login100-form validate-form flex-sb flex-w">
              <span class="login100-form-title p-b-51">
                Review Your Booking Information
              </span>



              <!-- Header -->
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">

                <tr>
                  <td>
                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">

                      <tr>
                        <td>
                          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                              <tr>
                                <td>
                                  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="history.back(-1)">
                                    Go Back
                                  </button>
                                  <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                    <tbody>
                                      <tr>
                                        <td style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                                          Booking Details:
                                        </td>
                                      </tr>
                                      <tr>
                                      <tr class="hiddenMobile">
                                        <td height="50"></td>
                                      </tr>
                                      <tr class="visibleMobile">
                                        <td height="20"></td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">

                                          <small> Booking Name: <strong> Free Diner</strong></small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">

                                          <small> Dining Date: <strong> <?php echo htmlentities($diningdate); ?>
                                              <input type="hidden" name="dd" value="<?php echo htmlentities($diningdate); ?>"></strong></small></br></br>
                                        </td>
                                      </tr>
                                             
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">

                                          <small> Dining Time: <strong>

                                              <?php echo htmlentities($diningtime); ?>
                                              <input type="hidden" name="dt" value="<?php echo htmlentities($diningtime); ?>">
                                            </strong> </small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">

                                          <small> Selected Room: <strong> <?php echo htmlentities($room); ?>
                                              <input type="hidden" name="r" value="<?php echo htmlentities($room); ?>"></strong> </small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                          <small> Your Table Number: <strong>
                                              <?php echo htmlentities($tablename); ?>
                                              <input type="hidden" name="tn" value="<?php echo htmlentities($tablename); ?>">
                                              <input type="hidden" name="dn" value="<?php echo htmlentities($dishname); ?>">
                                              <input type="hidden" name="gn" value="<?php echo htmlentities($guestno); ?>">
                                              <input type="hidden" name="rid" value="<?php echo htmlentities($room_id); ?>">
                                              <input type="hidden" name="gt" value="<?php echo htmlentities($totalpri); ?>">
                                              <input type="hidden" name="bkid" value="<?php echo htmlentities($bookingid); ?>">
                                              <input type="hidden" name="dntype" value="<?php echo htmlentities($dinertype); ?>">

                                            </strong> </small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                          <small> Total Booked Seats: <strong> <?php echo htmlentities($seats); ?>
                                              <input type="hidden" name="s" value="<?php echo htmlentities($seats); ?>"></strong> </small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                          <small> Selected Meal: <strong> <?php echo htmlentities($dishname); ?>
                                              <input type="hidden" name="dishname" value="<?php echo htmlentities($dishname); ?>"></strong> </small></br></br>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!-- /Header -->
              <!-- Order Details -->
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
                <tbody>
                  <tr>
                    <td>
                      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                        <tbody>
                          <tr>
                          <tr class="hiddenMobile">
                            <td height="60"></td>
                          </tr>
                          <tr class="visibleMobile">
                            <td height="40"></td>
                          </tr>
                          <tr>
                            <td>
                              <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                <tbody>
                                  <tr>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;" width="82%" align="left">
                                      User Types
                                    </th>
                                    <!-- <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">
                        <small>SKU</small>
                      </th> -->
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" width="12%" align="center">
                                      Seats
                                    </th>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="right">
                                      Subtotal
                                    </th>
                                  </tr>
                                  <tr>
                                    <td height="1" style="background: #bebebe;" colspan="4"></td>
                                  </tr>
                           
                                  <tr id="guestdivid">
                                    <td id="guestdivid" style="font-size: 12px; font-family: 'Open Sans', sans-serif; display:<?php echo htmlentities($type); ?>; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">Free Diners</td>

                                    <td id="guestdivid" style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; display:<?php echo htmlentities($type); ?>;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center"> <?php echo htmlentities($guestno); ?> </td>
                                    <td id="guestdivid" style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; display:<?php echo htmlentities($type); ?>;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right">$ <?php echo htmlentities($mealprice2); ?></td>
                                  </tr>
                                  <tr>
                                    <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td height="20"></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- /Order Details -->
              <!-- Total -->
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
                <tbody>
                  <tr>
                    <td>
                      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                        <tbody>
                          <tr>
                            <td>

                              <!-- Table Total -->
                              <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                <tbody>

                                  <tr>

                                  </tr>
                                  <!-- Hiding the net total and tax -->
                                  <!-- <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <strong>Net Total</strong>
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <strong>$<?php echo htmlentities($totalpri); ?></strong>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; "><small style="color:black;">TAX</small></td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <small style="color:black;">$<?php echo htmlentities($totaltaxvalue); ?> </small>
                                    </td>
                                  </tr>
                                  <tr> -->

                                  </tr>
                                  <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <strong>Grand Total</strong>
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <strong>$<?php echo htmlentities($freedinertotal); ?></strong>
                                      <input type="hidden" name="freegrandtotal" value="<?php echo htmlentities($grandtotal); ?>">
                                      <input type="hidden" name="freetotal" value="<?php echo htmlentities($freedinertotal); ?>">
                                    </td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                              <!-- /Table Total -->

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- /Total -->
              <!-- Information -->
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
                <tbody>
                  <tr>
                    <td>
                      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                        <tbody>
                          <tr>
                          <tr class="hiddenMobile">
                            <td height="60"></td>
                          </tr>
                          <tr class="visibleMobile">
                            <td height="40"></td>
                          </tr>
                          <tr>
                            <td>

                            </td>
                          </tr>
                          <tr>
                            <td>
                              <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                <tbody>
                                  <tr>
                                    <td>



                                      <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                        <tbody>
                                          <tr class="hiddenMobile">
                                            <td height="35"></td>
                                          </tr>
                                          <tr class="visibleMobile">
                                            <td height="20"></td>
                                          </tr>
                                          <tr>
                                            <td style="font-size: 21px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                              <strong>Booking will be confirmed in the next page.</strong>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td width="100%" height="10"></td>
                                          </tr>
                                          <tr>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                              Cancellations not applicable after booking is confirmed.
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr class="hiddenMobile">
                            <td height="60"></td>
                          </tr>
                          <tr class="visibleMobile">
                            <td height="30"></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- /Information -->


              <div class="container-login100-form-btn m-t-17">
                <button id="submit" type="submit" name="submit" class="login100-form-btn" style="background-color: #0c5460">
                  Confirm Your Reservation
                </button>
              </div>
              <div style="margin-top:10px;" id="roomlayout"></div> <!-- Shows Image of the Table -->
            </form>

            </div>
          </div>
      </div>


      <div id="dropDownSelect1"></div>

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

  </body>

  </html><?php }
       ?>