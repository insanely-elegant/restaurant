<?php
// session_start();
include('includes/config.php');
$column = array('#','Firstname', 'Lastname', 'Unit Number', 'Total Dinein Meals Consumed', 'Total Dinein Net Cost', 'Total Dinein Tax','Total Takeout Meals','Total Takeout Net Cost','Total Takeout Tax','Grand Total');

$fdate = $_POST['fdate'];
$tdate = $_POST['tdate'];



$user_sql = "select * from users ORDER BY unitno ASC";
$user_res = mysqli_query($con, $user_sql);
$tot_tol_Dine_in_meal_consumes=0;
$tot_tot_dine_in_net_cost =0;
$tot_tot_dine_in_tax =0;
$tot_tot_takeout_meals = 0;
$tot_tot_takeout_net_cost=0;
$tot_tot_takeout_tax=0;
$tot_grand_total =0;




$cnt = 1;
$data = array();
while ($user_row = mysqli_fetch_assoc($user_res)) 
{
    $sub_array = array();
    $sub_array[] = $cnt;
    $first_name = $user_row['firstname'];
    $sub_array[] = $user_row['firstname'];

    $last_name = $user_row['lastname'];
    $sub_array[] = $user_row['lastname'];

    $unit_no = $user_row['unitno'];
    $sub_array[] = $user_row['unitno'];


    //Sql query for finding 'Total Dinein Meals Consumed' of specific user
    $sql_tol_Dine_in_meal_consumes = "SELECT sum(seat) FROM `reservation` WHERE firstname='$first_name' AND lastname='$last_name' AND diningdate >= '$fdate' AND diningdate <= '$tdate'";
    $res_tol_Dine_in_meal_consumes = mysqli_query($con, $sql_tol_Dine_in_meal_consumes);
    $row_tol_Dine_in_meal_consumes = mysqli_fetch_assoc($res_tol_Dine_in_meal_consumes);
    $sub_array[] = $row_tol_Dine_in_meal_consumes['sum(seat)'];

    $tot_tol_Dine_in_meal_consumes += $row_tol_Dine_in_meal_consumes['sum(seat)'];




    //Sql query for finding 'Total Dinein Net Cost' of specific user
    $sql_tot_Dine_in_net_cost = "SELECT SUM(grandtotal) FROM reservation WHERE firstname='$first_name' and lastname = '$last_name' AND diningdate >= '$fdate' AND diningdate <= '$tdate'";
    $res_tot_Dine_in_net_cost = mysqli_query($con, $sql_tot_Dine_in_net_cost);
    $row_tot_Dine_in_net_cost = mysqli_fetch_assoc($res_tot_Dine_in_net_cost);
    $sub_array[] = $row_tot_Dine_in_net_cost['SUM(grandtotal)'];


    $tot_tot_dine_in_net_cost += $row_tot_Dine_in_net_cost['SUM(grandtotal)'];



    //Sql query for finding 'Total Dinein Tax' of specific user
    $sql_guest_meal_tax_value = "SELECT SUM(guestmealtaxvalue) FROM reservation WHERE firstname='$first_name' and lastname = '$last_name' AND diningdate >= '$fdate' AND diningdate <= '$tdate'";
    $res_guest_meal_tax_value = mysqli_query($con, $sql_guest_meal_tax_value);
    $row_guest_meal_tax_value = mysqli_fetch_assoc($res_guest_meal_tax_value);
    $sql_member_meal_tax_value = "SELECT SUM(membermealtaxvalue) FROM reservation WHERE firstname='$first_name' and lastname = '$last_name' AND diningdate >= '$fdate' AND diningdate <= '$tdate'";
    $res_member_meal_tax_value = mysqli_query($con, $sql_member_meal_tax_value);
    $row_member_meal_tax_value = mysqli_fetch_assoc($res_member_meal_tax_value);
    $sub_array[] = $row_member_meal_tax_value['SUM(membermealtaxvalue)'] + $row_guest_meal_tax_value['SUM(guestmealtaxvalue)'];



    $tot_tot_dine_in_tax += $row_member_meal_tax_value['SUM(membermealtaxvalue)'] + $row_guest_meal_tax_value['SUM(guestmealtaxvalue)'];



    //Sql query for finding 'Total Takeout Meals' of specific user
    $sql_tot_takeout_meals = "SELECT count(*) as total_record FROM `pickups` WHERE firstname='$first_name' and lastname='$last_name' AND diningdate >= '$fdate' AND diningdate <= '$tdate'";
    $res_tot_takeout_meals = mysqli_query($con, $sql_tot_takeout_meals);
    $row_tot_takeout_meals = mysqli_fetch_assoc($res_tot_takeout_meals);
    $sub_array[] = $row_tot_takeout_meals['total_record'];
    $tot_tot_takeout_meals += $row_tot_takeout_meals['total_record'];

    //Sql query for finding the 'Total Take out net cost' of specific user
    $sql_tot_takeout_net_cost = "SELECT sum(grandtotal) FROM `pickups` WHERE firstname='$first_name' AND lastname='$last_name' AND diningdate >= '$fdate' AND diningdate <= '$tdate'";
    $res_tot_takeout_net_cost = mysqli_query($con, $sql_tot_takeout_net_cost);
    $row_tot_takeout_net_cost = mysqli_fetch_assoc($res_tot_takeout_net_cost);
    $sub_array[] = $row_tot_takeout_net_cost['sum(grandtotal)'];


    $tot_tot_takeout_net_cost += $row_tot_takeout_net_cost['sum(grandtotal)'];



    //Sql query for finding the 'Total Take out tax' of specific user
    $sql_tot_takeout_tax = "SELECT sum(membermealtaxvalue) FROM `pickups` WHERE firstname='$first_name' AND lastname='$last_name' AND diningdate >= '$fdate' AND diningdate <= '$tdate'";
    $res_tot_takeout_tax = mysqli_query($con, $sql_tot_takeout_tax);
    $row_tot_takeout_tax = mysqli_fetch_assoc($res_tot_takeout_tax);


    $sub_array[] = $row_tot_takeout_tax['sum(membermealtaxvalue)'];

    $tot_tot_takeout_tax += $row_tot_takeout_tax['sum(membermealtaxvalue)'];




    //                                    while ($rowuser = mysqli_fetch_array($sqluser)) {
//                                      $totDineoutNet += $rowuser['totDineoutNetCost'];
//                                      $totDineoutTax += $rowuser['totDineoutTax'];
//                                      $totNoOfPickups +=   $rowuser['noOfPickups'];
//                                      $totTakeOutNet += $rowuser['takeoutNet'];
//                                      $totTakeoutTax += $rowuser['takeoutTax'];
//                                      $totGrandTot += $rowuser['totDineoutNetCost'] + $rowuser['totDineoutTax'] + $rowuser['takeoutNet'] + $rowuser['takeoutTax'];

    $sub_array[] = $row_tot_Dine_in_net_cost['SUM(grandtotal)'] + $row_tot_takeout_net_cost['sum(grandtotal)'];
    

    $tot_grand_total += $row_tot_Dine_in_net_cost['SUM(grandtotal)'] + $row_tot_takeout_net_cost['sum(grandtotal)'];
    

    $data[] = $sub_array;
    $cnt = $cnt + 1;
}

/*    $_SESSION['total_dinen_meal_consumed'] = $tot_tol_Dine_in_meal_consumes;
    $_SESSION['total_dinen_net_cost'] = $tot_tot_dine_in_net_cost;
    $_SESSION['total_dinen_tax'] = $tot_tot_dine_in_tax;
    $_SESSION['total_takeout_meals'] = $tot_tot_takeout_meals;
    $_SESSION['total_takeout_net_cost'] = $tot_tot_takeout_net_cost;
    $_SESSION['total_takeout_tax'] = $tot_tot_takeout_tax;
    $_SESSION['grand_total'] = $tot_grand_total;*/

    $output = array(
        'draw'    => intval($_POST['draw']),
        'recordsTotal'  => $cnt-1,
        'recordsFiltered' => $cnt-1,
        'data'    => $data,

    );

/*    $_SESSION['total_dinen_meal_consumed'] = $tot_tol_Dine_in_meal_consumes;
    $_SESSION['total_dinen_net_cost'] = $tot_tot_dine_in_net_cost;
    $_SESSION['total_dinen_tax'] = $tot_tot_dine_in_tax;
    $_SESSION['total_takeout_meals'] = $tot_tot_takeout_meals;
    $_SESSION['total_takeout_net_cost'] = $tot_tot_takeout_net_cost;
    $_SESSION['total_takeout_tax'] = $tot_tot_takeout_tax;
    $_SESSION['grand_total'] = $tot_grand_total;*/

    echo json_encode($output);
    ?>