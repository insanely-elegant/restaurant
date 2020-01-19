<option value="">Select Table Number / Name</option>
<?php
include('includes/config.php');
if(!empty($_GET["room_id"]))
{
    $diningtime = $_GET['diningtime'];
    $roomid = $_GET['room_id'];
    $diningdate=$_GET['diningdate'];
    $result = $con->query("SELECT * FROM
        reservation WHERE roomid='$roomid'
        AND
        diningdate='$diningdate' and diningtime='$diningtime'"
    );
    $result2 = $con->query("SELECT weeklymenu.diningdate as wdd,weeklymenu.diningtime as wdt,
     tablelayout.tablename as ttname,tablelayout.totalseats as ttotseats
      FROM tablelayout join weeklymenu 
      on weeklymenu.tableid = tablelayout.id 
      WHERE weeklymenu.diningdate='$diningdate' 
      and weeklymenu.diningtime='$diningtime' 
      and weeklymenu.roomid='$roomid'"
    );
    $output=[[],[]];
    $counter=[0,0];
    while($row=$result->fetch_assoc()){
      $output[0][$counter[0]++]=$row;
    }
    while($row=$result2->fetch_assoc()){
      $output[1][$counter[1]++]=$row;
    }
    foreach ($output[1] as $key => $value) {
      $totalseat=$value['ttotseats'];
      foreach ($output[0] as $k => $v) {
        if($value['ttname']==$v['tablename']){
          $totalseat-=$v['seat'];
        }
      }
      if($totalseat!=0){
        echo "<option value='".$totalseat."'>".$value['ttname']."</option>";
      }
    }
}
?>
