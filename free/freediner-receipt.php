<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
  date_default_timezone_set('America/Los_Angeles');
  $currentTime = date('m-d-Y h:i:s A', time());


  $id = intval($_GET['id']);
  $query = mysqli_query($con, "select * from freediner where id='$id'");
  while ($row = mysqli_fetch_array($query)) {
    $guestprice = $row['freedinermealprice'];
    $gn = $row['guestno'];
    $gutax = $row['freedinermealtaxvalue'];

    $subtotal = $gn * $guestprice;
    $totaltax = $gn * $gutax;
    $grantotal = $subtotal + $totaltax;

    echo $gn;

    $orderType = $row['orderType'];

    if ($gn = 0) {
      $type = 'none';
    }

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title> Guest Reservation Invoice </title>
      <meta name="robots" content="noindex,nofollow" />
      <meta name="viewport" content="width=device-width; initial-scale=1.0;" />
      <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
      <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

        body {
          margin: 0;
          padding: 0;
          background: #e1e1e1;
        }

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

        body {
          width: 100%;
          height: 100%;
          background-color: #e1e1e1;
          margin: 0;
          padding: 0;
          -webkit-font-smoothing: antialiased;
        }

        html {
          width: 100%;
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
          body {
            width: auto !important;
          }

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

      <!-- Header -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
              <tr class="hiddenMobile">
                <td height="40"></td>
              </tr>
              <tr class="visibleMobile">
                <td height="30"></td>
              </tr>

              <tr>
                <td>
                  <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                    <tbody>
                      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="window.location.href = 'menu.php';">
                        Go Back to Home Page
                      </button> </br></br></br>

                      <tr>
                        <td>
                          <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                            <tbody>
                              <tr>
                                <td align="left"> <img src="../images/icons/tea.png" width="32" height="32" alt="logo" border="0" /></td>
                              </tr>
                              <tr class="hiddenMobile">
                                <td height="40"></td>
                              </tr>
                              <tr class="visibleMobile">
                                <td height="20"></td>
                              </tr>
                              <tr>
                                <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                  Hello, <?php echo  htmlentities($row['name']); ?>
                                  <br> Thank you for order at Silver Glen.
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                            <tbody>
                              <tr class="visibleMobile">
                                <td height="20"></td>
                              </tr>
                              <tr>
                                <td height="5"></td>
                              </tr>
                              <tr>
                                <td style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                                  Invoice
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
                                <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                  <small>BOOKING</small> #<?php echo  htmlentities($row['bookingid']); ?><br />
                                  <small><?php echo  htmlentities($row['diningdate']); ?></small>
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
                              User Type
                            </th>
                            <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">
                              <small>Order Type</small>
                            </th>
                            <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" width="12%" align="center">
                              Quantity
                            </th>
                            <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="right">
                              Price
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
                              Free Diner
                            </td>

                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center"><?php echo  htmlentities($row['orderType']); ?></td>
                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center"> 1 </td>

                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right">$<?php echo  htmlentities($row['freedinermealprice']); ?></td>
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
                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                              Subtotal
                            </td>
                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;" width="80">
                              $<?php echo  htmlentities($row['grandtotal']); ?>
                            </td>
                          </tr>
                          <tr>
                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                              <strong>Grand Total (Incl.Tax)</strong>
                            </td>
                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                              <strong>$<?php echo  htmlentities($row['freedinertotal']); ?></strong>
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
                      <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                          <tr>
                            <td>
                              <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">

                                <tbody>
                                  <tr>
                                    <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                      <strong>BILLING INFORMATION</strong>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="100%" height="10"></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                      Silver Glen<br> 1750 152nd Ave NE<br> Bellevue, WA<br> 98007, United States<br> T: 425-957-1032
                                    </td>
                                  </tr>


                                </tbody>
                              </table>


                              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
                              <style>
                                h1 {
                                  color: green;
                                  text-align: center;
                                }

                                div.one {
                                  margin-top: 40px;
                                  text-align: center;
                                }

                                button {
                                  margin-top: 10px;
                                }
                              </style>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                          <tr>
                            <td>
                              <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                <tbody>
                                  <tr class="hiddenMobile">
                                    <td height="35"></td>
                                  </tr>
                                  <tr class="visibleMobile">
                                    <td height="20"></td>
                                  </tr>

                                </tbody>
                              </table>


                              <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                <tbody>
                                  <tr class="hiddenMobile">
                                    <td height="35"></td>
                                  </tr>
                                  <tr class="visibleMobile">
                                    <td height="20"></td>
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
      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">


        <tr class="spacer">
          <td height="50"></td>
        </tr>

      </table>
      </td>
      </tr>
      <tr>
        <td height="20"></td>
      </tr>
      </table>

    </body>

    </html>
<?php }
} ?>