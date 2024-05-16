<?php
include('conn.php');

$uname = $_POST['uname'];
$pass = sha1($_POST['pass']);


$select = "SELECT * from users where username = '$uname' and password = '$pass'";
$run = mysqli_query($xonn,$select);

if(mysqli_num_rows($run)>0){

    while($row=mysqli_fetch_assoc($run)){

    if($row['userType']=='owner'){
        echo "<script>
        alert('Welcome Owner');
        window.location.href='owner.php';
    </script>";
    }elseif($row['userType']=='worker'){
        echo "<script>
        alert('Welcome Worker');
        window.location.href='worker.php';
    </script>";
    }else{
        echo "error";
    }


}
}else{
    echo "invalid";
}


?>