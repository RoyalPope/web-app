<?php
include('conn.php');
$bus=$_POST['bus'];
$fetch= "SELECT Nseats FROM bus where bid='$bus'";
$exec=mysqli_query($con,$fetch);
while($row=mysqli_fetch_assoc($exec)){
    echo $row['Nseats']. "SEATS";
}
?>