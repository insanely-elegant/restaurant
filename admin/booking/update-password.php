<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) 
{
  header('location:index.php');
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Password</title>
  </head>
  <body>

    <div class="container mt-5"><style type="text/css">
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
                      <div class="box" onclick="home()">
                        <img src="images/390380-200.png" style="width: 80px; height: 80px;" onclick="home()">Go Back to Main Page</img>
                      </div>
                       </br></br></br>
<script>
function home(){
location.href="menu.php";
}
</script>
      <div class="row mt-5">
        <div class="col-lg-8 offset-2">
          <div class="card">
            <div class="card-header">
              Update Password
            </div>
            <div class="card-body">
              <form class="update_password">
                <div class="container-fluid">
                  
                  <div class="row">
                    <div class="col-lg-12">
                      <label>Unit Number</label>
                      <input type="text" name="unit_number" class="unit_number form-control" placeholder="Enter Unit Number">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <label>Old Password</label>
                      <input type="password" name="old_password" class="old_password form-control" placeholder="Enter Old Password">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <label>New Password</label>
                      <input type="password" name="new_password" class="new_password form-control" placeholder="Enter New Password">
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary mt-2 update">Update</button>
                </div>
              </form>
            </div>
          </div>          
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script type="text/javascript">

      $(document).on('click','.update',function()
      {
            var array2 = [
            'unit_number',
            'old_password',
            'new_password'
            ];

            var successFlag = true;



            for (var i = 0, l = array2.length; i < l; i++) 
            {
                var Id = array2[i];
                $('.' + Id).each(function(i) {
                    if ($(this).val() == '' || $(this).val() == 0) {
                        successFlag = false;
                        $(this).focus();
                        $(this).css('border-color', 'red');

                    } else {
                        $(this).css('border-color', '');
                    }
                });
            }
            if(successFlag == true)
            {
              var unit_number = $('.unit_number').val();
              var old_password = $('.old_password').val();
              var new_password = $('.new_password').val();

              $.ajax({
                url: "update-password-operation.php",
                method: 'post',
                data: 
                {
                   unit_number : unit_number,
                   old_password : old_password,
                   new_password : new_password
                },
                success: function(result)
                {
                  if(result == '0')
                  {
                    Swal.fire({
                        title: "Error",
                        text: "Details Not Matched!",
                        icon: "error",
                        timer: 1500,
                        showConfirmButton: false,
                    });
                  }
                  else
                  {
                    Swal.fire({
                        title: "Success",
                        text: "Password Updated Successfully!",
                        icon: "success",
                        timer: 1500,
                        showConfirmButton: false,
                    });
                  }

                  location.reload(true);
                }
                        
              });

            }


      });
    </script>

  </body>
</html>