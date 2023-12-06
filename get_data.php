<?php
include('connection.php');

if (isset($_POST['custId'])) {
    $id = $_POST['custId'];

    // $sql = "SELECT * FROM apply_work where id_work=" . $id;
    $sql = "SELECT * FROM apply_work
            INNER JOIN personal
            ON apply_work.id_work=personal.id_work
            WHERE apply_work.id_work=" . $id;

    // $sql ="SELECT * FROM apply_work
    // JOIN personal
    // ON apply_work.id_work=personal.id_work
    // JOIN family_history
    // ON apply_work.id_work = family_history.id_work 
    // WHERE apply_work.id_work=" . $id;


    $result = mysqli_query($conn, $sql);

    $response = "<table border='0' width='100%'>";
    while ($row = mysqli_fetch_array($result)) {
        $ID = $row["id_work"];
        $name = $row["name"];
        $sername = $row["sername"];
        $nameEN = $row["nameEN"];
        $apply_position = $row["apply_position"];
        $desired_salary = $row["desired_salary"];
        $money_md = $row["money_month"];
        $email = $row["email"];
        $mobile = $row["mobile"];
        $birthday = $row["birthday"];
        $age = $row["age"];
        $height = $row["height"];
        $weight = $row["weight"];
        $nationality = $row["nationality"];
        $nation = $row["nation"];
        $religion = $row["religion"];
        $id_card = $row["id_card"];
        $house_address = $row["house_address"];
        $current_address = $row["current_address"];

        $response .= "<tr>";
        $response .= "<td>ชื่อ-นามสกุล : </td><td>" . $name . "&nbsp&nbsp" . $sername . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>ชื่อภาษาอังกฤษ : </td><td>" . $nameEN . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>วันเกิด : </td><td>" . $birthday . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>อายุ : </td><td>" . $age . " ปี" . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>ส่วนสูง : </td><td>" . $height . " ซม." . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>น้ำหนัก : </td><td>" . $weight . " กก." . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>สัญชาติ : </td><td>" . $nationality . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>เชื่อชาติ : </td><td>" . $nation . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>ศาสนา : </td><td>" . $religion . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>เลขที่บัตรประชาชน : </td><td>" . $id_card . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>E-mail : </td><td>" . $email . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>มือถือ : </td><td>" . $mobile . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>ที่อยู่ตามทะเบียนบ้าน : </td><td>" . $house_address . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>ที่อยู่ปัจุบัน : </td><td>" . $current_address . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>บ้านที่อาศัย : </td><td>" . $mobile . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>สมัครตำแหน่ง : </td><td>" . $apply_position . "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>เงินเดือนที่ต้องการ : </td><td>" . $desired_salary . "/" . $money_md . "</td>";
        $response .= "</tr>";
    }
    $response .= "</table>";

    echo $response;
    exit;
}
