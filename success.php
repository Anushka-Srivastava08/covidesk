<html>
<body>
<?php

    include './Link/dbcon.php';
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $symptoms = $_POST['coronasym'];
        $message = $_POST['message'];
        $check = "";
        foreach ($symptoms as $check1) {
            $check .= $check1 . ",";
        }
        echo $check . "<br>";
        $insertquery = "insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$check','$message')";
        if($con->query($insertquery) == TRUE){
            echo "Success";
        } else {
            echo "Failure <br>" . $con->$error; 
        }
        // $query = mysqli_query($con, $insertquery);
    }

    ?>

Hi <?php echo $_POST["username"]; ?><br>
Your details have been successfully registered! <br>
Your email address is: <?php echo $_POST["email"]; ?>
Our team will get back to you soon :)

</body>
</html>
