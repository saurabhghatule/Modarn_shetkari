<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $a = $_POST['name'];
    $b = md5($_POST['pass']);

$qry = mysql_query("UPDATE hackxspirit.signup SET s_pass='$b' WHERE s_name='$a' ");

    if($qry == true){
        // echo "<center>"."Password Updated"."</center>";
        echo "<script>alert('Password Updated Successfully!!!');</script>";
        echo "<script>window.location.href = 'forgotbtn.php?reset=true';</script>"; // Go back to the previous page with a reset parameter
        exit();
    }
    else{
        // echo "Not Updated".mysql_error();
        echo "<script>alert('Password Not Updated!!!');</script>".mysql_error();
        echo "<script>window.location.href = 'forgotbtn.php?reset=true';</script>"; // Go back to the previous page with a reset parameter
        exit();
    }
}
else{
    echo "Request method is not POST";
}
?>