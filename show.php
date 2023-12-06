<?php
include "connection.php";

$sql = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work;";

$sql2 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE apply_work.desired_salary <= 50000;";

$sql3 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE apply_work.desired_salary <= 80000 AND apply_work.desired_salary >= 50000;";

$sql4 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE apply_work.desired_salary BETWEEN 55000 AND 65000;";

$sql5 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE personal.tax_number IS NULL;";

$sql6 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE personal.tax_number IS NOT NULL;";

$sql7 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE apply_work.nameEN LIKE 'k%';";

$sql8 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE apply_work.nameEN NOT LIKE '%B%' AND apply_work.nameEN NOT LIKE 'k%';";

$sql9 = "SELECT * FROM apply_work
INNER JOIN personal
ON apply_work.id_work=personal.id_work
WHERE personal.current_address IN ('ปทุมธานี', 'สมุทรปราการ', 'นนทบุรี');";

$sql10 = "SELECT DISTINCT id_work,name,sername,nameEN FROM apply_work ";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);
$result7 = $conn->query($sql7);
$result8 = $conn->query($sql8);
$result9 = $conn->query($sql9);
$result10 = $conn->query($sql10);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>


</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span>บริษัท
                    วิษณุ เทคโนพลัส จำกัด<br>VISASU TECHNOPLUS CO.LTD.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="showmember.php">Data member</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <span>
                                <a class="navbar-brand" href="logout.php">Logout</a>
                            </span>
                </form>
            </div>
        </div>
    </nav>
    <!-- ข้อที่ 1 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>1. แสดงข้อมูลทุกเรคคอร์ด</caption>
                <table id="example" class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 2 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>2. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัวเปรียบเทียบเช่น =, <,>, <=,>=, <>
                </caption><br>
                <!-- <label for="">แสดงเงินที่ต้องการเมื่อมีค่า <= 50000</label> -->
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result2->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 3 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>3. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัวปฏิบัติการทางด้านลอจิก เช่น AND, OR, NOT
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result3->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 4 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>4. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัว BETWEEN…AND….
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result4->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 5 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>5.แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัว IS NULL
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result5->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 6 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>6. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัว IS NOT NULL
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result6->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 7 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>7. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัว LIKE
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result7->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 8 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>8. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัว NOT LIKE
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result8->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 9 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>9. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัว IN
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:auto; text-align:center;">ลำดับ</th>
                            <th style="width:auto; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:auto; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:auto; text-align:center;">ตำแหน่ง</th>
                            <th style="width:auto; text-align:center;">เงินเดือน</th>
                            <th style="width:auto; text-align:center;">E-mail</th>
                            <th style="width:auto; text-align:center;">มือถือ</th>
                            <th style="width:auto; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result9->fetch_assoc()) {
                            $ID = $row["id_work"];
                            $name = $row["name"];
                            $sername = $row["sername"];
                            $nameEN = $row["nameEN"];
                            $apply_position = $row["apply_position"];
                            $desired_salary = $row["desired_salary"];
                            $money_md = $row["money_month"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                        ?>
                            <tr>
                                <td><?php echo $ID; ?></td>
                                <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                <td><?php echo $nameEN; ?></td>
                                <td><?php echo $apply_position; ?></td>
                                <td><?php echo $desired_salary . "/" . $money_md; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                            </tr>
                        <?php
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ข้อที่ 10 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <caption>10. แสดงข้อมูลโดยใช้ WHERE ที่ใช้ Operator ตัว DISTINCT
                </caption>
                <table class="table table-striped" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th style="width:10%; text-align:center;">COUNT(DISTINCT)</th>
                            <th style="width:35%; text-align:center;">ชื่อ-นามสกุล</th>
                            <th style="width:35%; text-align:center;">ชื่อภาษาอังกฤษ</th>
                            <th style="width:20%; text-align:center;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result10->num_rows > 0) {
                            while ($row = $result10->fetch_assoc()) {
                                $ID = $row["id_work"];
                                $name = $row["name"];
                                $sername = $row["sername"];
                                $nameEN = $row["nameEN"];
                        ?>
                                <tr>
                                    <td><?php echo $ID; ?></td>
                                    <td><?php echo $name . "&nbsp&nbsp" . $sername; ?></td>
                                    <td><?php echo $nameEN; ?></td>
                                    <td><button data-id='"<?php echo $ID ?>"' class='btn btn-info btn-sm btn-popup'>Details</button></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "No distinct values found in the table.";
                        }
                        // $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="custModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Customer Details</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/function.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "aLengthMenu": [
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"]
                ],
                "iDisplayLength": 25
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.btn-popup').click(function() {
                var custId = $(this).data('id');
                console.log(custId);
                $.ajax({
                    url: 'get_data.php',
                    type: 'post',
                    data: {
                        custId: custId
                    },
                    success: function(response) {
                        $('.modal-body').html(response);
                        $('#custModal').modal('show');
                    }
                });
            });

        });
    </script>
</body>

</html>