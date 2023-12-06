
    <?php
    include "connection.php";
    session_start();

    if ($_POST["action"] == "insert_data") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $interests = $_POST['interests'];
        $special_activities = $_POST['special_activities'];
        $hobbies = $_POST['hobbies'];
        $payment = $_POST['payment'];

        $insert = mysqli_query($conn, "INSERT INTO member (username,password,name,sername,address,telephone,email,interest,special_events,hobby,payment) 
        VALUES('$username','$password','$fname','$lname','$address','$phone','$email','$interests','$special_activities','$hobbies','$payment')");

        // $insert = $conn->query($sql);

        if ($insert) {
            $ar = array("status" => "success");
        } else {
            $ar = array("status" => "error");
        }
        echo json_encode($ar);
        $conn->close();
    }

    ?>
