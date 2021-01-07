<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
  date_default_timezone_set('America/Los_Angeles');
  $currentTime = date('m-d-Y h:i:s A', time());

  $diningdate = mysqli_real_escape_string($con,$_POST['diningdate']);
  $diningtime = mysqli_real_escape_string($con,$_POST['diningtime_h']);
  $dishname_h = mysqli_real_escape_string($con,$_POST['dishname_h']);
  $dishname = mysqli_real_escape_string($con,$_POST['dishname']);
  $room = mysqli_real_escape_string($con,$_POST['roomname_h']);
  $tablename = mysqli_real_escape_string($con,$_POST['tablename_h']);
  $seats = mysqli_real_escape_string($con,$_POST['seats']);
  $condono = mysqli_real_escape_string($con,$_POST['login']);
  $name = mysqli_real_escape_string($con,$_POST['firstname']);
  $lname = mysqli_real_escape_string($con,$_POST['lastname']);
  $room_id = mysqli_real_escape_string($con,$_POST['room']);


  $member = 1;
  $guestno = $seats - $member;

  $query = mysqli_query($con, "SELECT * FROM pricingmodels WHERE dinerid=1");
  $num = mysqli_fetch_array($query);
  if ($num > 0) {
    $mealprice = $num['mealtotalprice'];
    $membermealtax = $num['mealtaxvalue'];
    $membermealprice = $num['mealprice'];
    $membertaxpercent = $num['mealtaxpercent'];
  }
  $query2 = mysqli_query($con, "SELECT * FROM pricingmodels WHERE dinerid=1");
  $num2 = mysqli_fetch_array($query2);
  if ($num2 > 0) {
    $mealprice2 = $num2['mealtotalprice'];
    $guestmealtax = $num2['mealtaxvalue'];
    $guestmealprice = $num2['mealprice'];
    $guesttaxpercent = $num2['mealtaxpercent'];
  }

  $guestprice = $mealprice2 * $guestno;
  $totalpri = $mealprice + $guestprice;
  $totaltaxvalue = $membermealtax + ($guestno * $guestmealtax);

  // generating bookingid
  $query = mysqli_query($con, "SELECT COUNT(*) FROM reservation WHERE diningdate='$diningdate'");
  $row = mysqli_fetch_array($query);
  $totalr = $row[0];

  $code = 'SG';
  $date1 = $diningdate;
  $ymd = date("ymd", strtotime($date1));
  $squence = $totalr + 1;
  $squence = str_pad($squence, 4, 0, STR_PAD_LEFT);
  $bookingid =  $code . $ymd . $squence;

  if ($guestno < 1) {
    $type = "none";
    $dinertype = "member";
    // $membermealprice = 0;
  } else {
    $dinertype = "members";
  }


?>
  <?php

  $dd = mysqli_real_escape_string($con,$_POST['dd']);
  $dt  = mysqli_real_escape_string($con,$_POST['dt']);
  $r = mysqli_real_escape_string($con,$_POST['r']);
  $tn = mysqli_real_escape_string($con,$_POST['tn']);
  $s = mysqli_real_escape_string($con,$_POST['s']);
  $gn = mysqli_real_escape_string($con,$_POST['gn']);
  $dn = mysqli_real_escape_string($con,$_POST['dn']);
  $uno = mysqli_real_escape_string($con,$_POST['login_h']);
  $firstname = mysqli_real_escape_string($con,$_POST['name_h']);
  $lastname = mysqli_real_escape_string($con,$_POST['lname_h']);
  $rid = mysqli_real_escape_string($con,$_POST['rid']);
  $gt = mysqli_real_escape_string($con,$_POST['gt']);
  $bkid = mysqli_real_escape_string($con,$_POST['bkid']);
  $dntype = mysqli_real_escape_string($con,$_POST['dntype']);



  if (isset($_POST['submit'])) {
    $sql = mysqli_query($con,  "insert into reservation(bookingid,firstname,lastname,dishname,roomid,room,tablename,seat,diningdate,diningtime,condono,dinerType,membermealprice,membermealtaxpercent,membermealtaxvalue,membermealtotalprice,grandtotal)
	values('$bkid','$firstname','$lastname','$dn','$rid','$r','$tn', '$s', '$dd', '$dt','$uno','$dntype','$membermealprice','$membertaxpercent','$membermealtax','$mealprice','$gt')");

    if ($sql == 1) {
      $last_id = $con->insert_id;
      $_SESSION['msg'] = "Reservation Confirmed !!";
      $msg = "Hello $name, \n Booking of table has been successfull \n  <a src='confirm_success.php?id=$last_id' > Click here to view</a>";
      $msg = wordwrap($msg, 70);
      mail($_SESSION['email'], "Booking Status", $msg);
      header('Location: confirm_success.php?id=' . $last_id);
      exit();
    } else {
      header('Location: confirm_fail.php');
      exit();
    }
  }


  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Review Your Booking Information - Silver Glen</title>
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
    <?php $query = mysqli_query($con, "select * from users where unitno='$condono'");
    while ($row = mysqli_fetch_array($query)) { ?>

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
              <p style="font-size: x-large; text-align: center; color: black"> <?php echo ($message); ?> , <?php echo $name; ?></p>
            <?php } ?>

            <form method="POST" action="review.php" class="login100-form validate-form flex-sb flex-w">
              <span class="login100-form-title p-b-51">
                Review Your </br> Booking Information
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
                                  <style type="text/css">
                                    .box {

                                      border: 1px solid black;

                                    }

                                    .box:hover {
                                      -moz-box-shadow: 0 0 10px #ccc;
                                      -webkit-box-shadow: 0 0 10px #ccc;
                                      box-shadow: 0 0 10px #ccc;
                                      cursor: pointer;
                                    }
                                  </style>
                                  <div class="box" onclick="history.back(-1)">
                                    <img src="images/390380-200.png" style="width: 80px; height: 80px;" onclick="history.back(-1)">Go Back</img>
                                  </div>
                                  </br>
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

                                          <small> Booking First Name: <strong> <?php echo htmlentities($name); ?></strong></small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">

                                          <small> Booking Last Name: <strong> <?php echo htmlentities($lname); ?></strong></small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">

                                          <small> Your Unit Number: <strong> <?php echo htmlentities($condono); ?></strong> </small></br></br>
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
                                              <input type="hidden" name="dt" , value="<?php echo htmlentities($diningtime); ?>">
                                            </strong> </small></br></br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="font-size: 22px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">

                                          <small> Selected Room: <strong> <?php echo htmlentities($room); ?>
                                              <input type="hidden" name="r" , value="<?php echo htmlentities($room); ?>"></strong> </small></br></br>
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
                                              <input type="hidden" name="login_h" value="<?php echo htmlentities($condono); ?>">
                                              <input type="hidden" name="name_h" value="<?php echo htmlentities($name); ?>">
                                              <input type="hidden" name="lname_h" value="<?php echo htmlentities($lname); ?>">

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
                                  <tr>
                                    <td height="10" colspan="4"></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">
                                      <?php if($seats == 1) { ?>
                                      Member
                                      <?php } else { ?>
                                      Members
                                      <?php } ?>
                                    </td>

                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center">  <?php echo htmlentities($seats); ?> </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right">$ <?php echo htmlentities($mealprice); ?></td>
                                  </tr>
                                  <tr>
                                    <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
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
                                  <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <strong>Grand Total (Incl.Tax)</strong>
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <strong>$<?php echo htmlentities($totalpri); ?></strong>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; "><small>TAX</small></td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; ">
                                      <small>$<?php echo htmlentities($totaltaxvalue); ?> </small>
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
                                              We will fully refund any booking cancelled up to 24 hours prior to scheduled dine-in date. </br> Cancellation not applicable within 24 hours of scheduled dine-in time, you will be charged full amount.
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
      } ?>