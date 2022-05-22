<?php
// Include config file
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])){
    if($_POST['action'] == 'insertRecord') {
        $card =$_POST['cardId'];
        echo "Success";
        echo $cards="Bertin";
           
        
    
    }
}                           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="" method="post">
                    <div class="form-group">
                            <label>CARD ID</label>
                            <input type="text" name="name" class="form-control " value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>