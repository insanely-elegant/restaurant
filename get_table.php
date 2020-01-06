<option>Select Table</option>
<?php
include('includes/config.php');
if(!empty($_GET["room_id"]))
{
    $roomid = $_GET['room_id'];
    $diningdate=$_GET['diningdate'];
    $result = $con->query("SELECT * FROM
        reservation WHERE room='$roomid'
        AND
        diningdate='$diningdate' "
    );
    $result2 = $con->query("SELECT * FROM tablelayout
        WHERE roomid='$roomid'"
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
      $r=False;
      foreach ($output[0] as $k => $v) {
        if($value['tablename']==$v['tablename']){
          if($value['totalseats']==$v['seat']){
            $r=True;
          }
        }
      }
      if($r===False){
        echo "<option>".$value['tablename']."</option>";
      }
    }
}
?>
