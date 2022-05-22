<?php
// Include config file
require_once "config.php";
$username="ange";
$sql_u = "SELECT * FROM iot_users WHERE Username='$username'";
$res_u = mysqli_query($link, $sql_u);
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && mysqli_num_rows($res_u) > 0){
    if($_POST['action'] == 'insertRecord') {
        $card =$_POST['cardPd'];
    echo "Sorry... username already taken"; 	
  } else{
           
        $query=mysqli_query($link,"INSERT INTO iot_users (Username,card_ID) values ('$username','$card')");
        echo "Success you have registered successfully!!";
    
  }
    
}

                         
?>