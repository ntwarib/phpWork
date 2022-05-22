<?php
// Include config file
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])){
    if($_POST['action'] == 'insertRecord') {
        $card =$_POST['cardPd'];
        echo "Success";
        echo $card;
        $username="ange";
$sql_u = "SELECT * FROM iot_users WHERE Username='$username'";
$res_u = mysqli_query($link, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
    echo "Sorry... username already taken"; 	
  } else{
           
        $query=mysqli_query($link,"INSERT INTO iot_users (Username,card_ID) values ('$cards','$username')");
  }
    
    }
}
                         
?>