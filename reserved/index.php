<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
  date_default_timezone_set('America/Los_Angeles');
  $currentTime = date('m-d-Y h:i:s A', time());


  $query = mysqli_query($con, "select * from room"); // fetches room image from selected room id 
  while ($row = mysqli_fetch_array($query)) {
    $rooms .= "<option value=" . $row['id'] . ">" . $row['roomname'] . "</option>";
    $layouts .= "if(x==" . $row['id'] . "){
		roomlayout.innerHTML='Table Layout Image :  <img style=\"width:100%;\" src=\"./../admin/productimages/'+x+'/" . $row['productimage1'] . "\"/>';
	}";
  }
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Reservation History</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script type="text/javascript" src="jquery-1.11.0.js"></script>

    <style>
      body {
        background: #fff;
      }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="materialize.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatables.min.css">
    <script type="text/javascript" src="datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="materialize.min.css">
    <script type="text/javascript" src="materialize.min.js"></script>

    <style id="compiled-css" type="text/css">

    </style>


    <!-- TODO: Missing CoffeeScript 2 -->

    <script type="text/javascript">
      //<![CDATA[


      $(document).ready(function() {
        var table = $('#example').DataTable({
          dom: 'lrtip',
          initComplete: function() {
            this.api().columns([0]).every(function() {
              var column = this;
              console.log(column);
              var select = $("#fnameFltr");
              column.data().unique().sort().each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
              });
            });
            this.api().columns([1]).every(function() {
              var column = this;
              console.log(column);
              var select = $("#lnameFltr");
              column.data().unique().sort().each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
              });
            });
            this.api().columns([2]).every(function() {
              var column = this;
              console.log(column);
              var select = $("#roomFltr");
              column.data().unique().sort().each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
              });
            });
            this.api().columns([3]).every(function() {
              var column = this;
              console.log(column);
              var select = $("#tableFltr");
              column.data().unique().sort().each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
              });
            });
            this.api().columns([4]).every(function() {
              var column = this;
              console.log(column);
              var select = $("#dateFltr");
              column.data().unique().sort().each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
              });
            });
            this.api().columns([6]).every(function() {
              var column = this;
              console.log(column);
              var select = $("#dishFltr");
              column.data().unique().sort().each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
              });
            });
            $("#fnameFltr,#lnameFltr,#roomFltr,#tableFltr,#dateFltr,#dishFltr").material_select();
          }
        });

        $('#fnameFltr').on('change', function() {
          var search = [];

          $.each($('#fnameFltr option:selected'), function() {
            search.push($(this).val());
          });

          search = search.join('|');
          table.column(0).search(search, true, false).draw();
        });

        $('#lnameFltr').on('change', function() {
          var search = [];

          $.each($('#lnameFltr option:selected'), function() {
            search.push($(this).val());
          });

          search = search.join('|');
          table.column(1).search(search, true, false).draw();
        });

        $('#roomFltr').on('change', function() {
          var search = [];

          $.each($('#roomFltr option:selected'), function() {
            search.push($(this).val());
          });

          search = search.join('|');
          table.column(2).search(search, true, false).draw();
        });

        $('#tableFltr').on('change', function() {
          var search = [];

          $.each($('#tableFltr option:selected'), function() {
            search.push($(this).val());
          });

          search = search.join('|');
          table.column(3).search(search, true, false).draw();
        });


        $('#dateFltr').on('change', function() {
          var search = [];

          $.each($('#dateFltr option:selected'), function() {
            search.push($(this).val());
          });

          search = search.join('|');
          table.column(4).search(search, true, false).draw();
        });



        $('#dishFltr').on('change', function() {
          var search = [];

          $.each($('#dishFltr option:selected'), function() {
            search.push($(this).val());
          });

          search = search.join('|');
          table.column(6).search(search, true, false).draw();
        });
      });



      //]]>
    </script>

  </head>

  <body>
    <div class="row">
      <div class="col s12">
        <div class="card z-depth-3 hoverable">
          <div class="card-title">
            <div class="container-login100-form-btn m-t-17">
              <button class="login100-form-btn" style="background-color: black; color: white" onClick="goback();">
                Go Back
              </button>
            </div>
            <div class="row" style="margin-bottom: 0;">
              <div class="col s12 m4">
                <h5>Silver Glen : Reservations</h5>
                <h6>Please Turn OFF Portrait Orientation Lock and rotate your screen if you're viewing this on a mobile device. <a href="https://support.apple.com/en-in/guide/iphone/iph3badf94ec/ios">How?</a></h6>
                <!-- <button id="submit" type="submit" name="submit2" class="login100-form-btn" style="background-color: #314570; color:white;" onClick="booking();">
                  Book a Table
                </button> -->
                <script>
                  function booking() {
                    location.href = "../booking.php"
                  }

                  function goback() {
                    location.href = "../menu.php"
                  }
                </script>
              </div>

              <div class="col s12 m3 right-align">
                <span style="font-size:18px;font-weight:500;" multiple="true">First Name: </span>
                <select multiple="true" id="fnameFltr">
                </select>
              </div>
              <div class="col s12 m3 right-align">
                <span style="font-size:18px;font-weight:500;">Last Name:
                </span>
                <select id="lnameFltr">
                </select>
              </div>

              <div class="col s6 m3">
                <span style="font-size:18px;font-weight:500;">Room Name:</span>
                <select id="roomFltr" multiple="true"></select>
              </div>

              <div class="col s6 m3">
                <span style="font-size:18px;font-weight:500;">Table Name:</span>
                <select id="tableFltr" multiple="true"></select>
              </div>
              <div class="col s12 m3 right-align">
                <span style="font-size:18px;font-weight:500;" multiple="true">Dining Date: </span>
                <select multiple="true" id="dateFltr">
                </select>
              </div>
              <div class="col s6 m3">
                <span style="font-size:18px;font-weight:500;">Dish Name:</span>
                <select id="dishFltr" multiple="true"></select>
              </div>
            </div>
          </div>
          <div class="card-action">
            <div class="summTblDiv">
              <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Room Name</th>
                    <th>Table name</th>
                    <th>Dining Date</th>
                    <th>Dining Time</th>
                    <th>Dish Name</th>
                    <th>Total Guests</th>
                    <th>Diner Type</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Room Name</th>
                    <th>Table name</th>
                    <th>Dining Date</th>
                    <th>Dining Time</th>
                    <th>Dish Name</th>
                    <th>Total Guests</th>
                    <th>Diner Type</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php

                  $sql = mysqli_query($con, "SELECT * from reservation");
                  $cnt = 1;
                  while ($row = mysqli_fetch_array($sql)) {
                  ?>
                    <tr>
                      <td><?php echo $row['firstname']; ?></td>
                      <td><?php echo $row['lastname']; ?></td>
                      <td><?php echo $row['room']; ?></td>
                      <td><?php echo $row['tablename']; ?></td>
                      <td><?php echo $row['diningdate']; ?></td>
                      <td><?php echo $row['diningtime']; ?></td>
                      <td><?php echo $row['dishname']; ?></td>
                      <td class="hidden-xs"><?php echo $row['guestno']; ?></td>
                      <td><?php echo $row['dinerType']; ?></td>
                    </tr>
                  <?php
                    $cnt = $cnt + 1;
                  } ?> </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputText3">View Image of Room</label>
          <select name="room" id="room" class="form-control" id="input-select" onChange="getTable(this.value);" required>
            <option value="">Select a Room</option>
            <?php $query = mysqli_query($con, "SELECT * from room");
            while ($row = mysqli_fetch_array($query)) { ?>

              <option value="<?php echo $row['id']; ?>"><?php echo $row['roomname']; ?></option>
            <?php } ?>
          </select>
          <div style="margin-top:10px; width: 50%;margin: auto;
  border: 3px;
  padding: 10px;" id="roomlayout"></div> <!-- Shows Image of the Table -->

        </div>
      </div>
    </div>


    <script>
      function changeLayout(x) { //fetches room layout
        roomlayout = document.getElementById('roomlayout');
        <?php
        echo $layouts;
        ?>
      }

      function getTable() { //fetches tablename
        roomid = document.getElementById('room').value;
        changeLayout(roomid);
      }
    </script>

  </body>

  </html>
<?php

}
?>