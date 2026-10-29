<?php 

$mid = $_POST['memberID']; 
$cid = $_POST['courtID']; 
$bd = $_POST['bookingDate']; 
$st = $_POST['startTime']; 
$et = $_POST['endTime']; 

include("dbcon.php");

$sql = "insert into booking(memberid,courtid,bookingDate,starttime,endtime) values ('$mid','$cid','$bd','$st','$et')";

echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn); 



/* Part 1
Connected to tennisclub successfullyinsert into booking(memberid,courtid,bookingDate,starttime,endtime) values ('2','3','2026-10-29','10:32','10:32')
MemberID 13 and CourtID 15 shouldn't work as there isn't that many in the database
*/
?>