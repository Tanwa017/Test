<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .cen {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="text-align: center; margin: top 50px;">
            <img src="img/visanu.jpg" alt=""><br>
            <label style="font-weight: bold; font-size: 16px;">บริษัท วิษณุ เทคโนพลัส จำกัด</label><br>
            <label style="font-size: 16px;">VISASU TECHNOPLUS CO.LTD.</label>
        </div>
        <?php
        // Retrieve form data
        $fname = $_POST['fname'] ?? "";
        $lname = $_POST['lname'] ?? "";
        $eFname = $_POST['eFname'] ?? "";
        $Gname = $_POST['Gname'] ?? "";
        $sex = $_POST['sex'] ?? ""; //r
        $position = $_POST['position'] ?? "";
        $salary = $_POST['salary'] ?? "";
        $salaryM = $_POST['salaryM'] ?? "";
        //ที่อยู่ตามทะเบียนบ้าน
        $number = $_POST['number'] ?? "";
        $Village = $_POST['Village'] ?? "";
        $road = $_POST['road'] ?? "";
        $Subdistrict = $_POST['Subdistrict'] ?? "";
        $district = $_POST['district'] ?? "";
        $province = $_POST['province'] ?? "";
        $zipcode = $_POST['zipcode'] ?? "";
        $email = $_POST['email'] ?? "";
        //ที่อยู่ปัจุบัน
        $caNumber = $_POST['caNumber'] ?? "";
        $caVillage = $_POST['caVillage'] ?? "";
        $caRoad = $_POST['caRoad'] ?? "";
        $caSubdistrict = $_POST['caSubdistrict'] ?? "";
        $caDistrict = $_POST['caDistrict'] ?? "";
        $caProvince = $_POST['caProvince'] ?? "";
        $caZipcode = $_POST['caZipcode'] ?? "";
        $tol = $_POST['tol'] ?? "";
        $mobile = $_POST['mobile'] ?? "";
        //
        $home = $_POST['home'] ?? ""; //r
        $other = $_POST['other'] ?? "";
        $birthday = $_POST['birthday'] ?? "";
        $age = $_POST['age'] ?? "";
        $height = $_POST['height'] ?? "";
        $weight = $_POST['weight'] ?? "";
        $nationality = $_POST['nationality'] ?? "";
        $nation = $_POST['nation'] ?? "";
        $religion = $_POST['religion'] ?? "";
        $idCard = $_POST['idCard'] ?? "";
        $placeIssue = $_POST['placeIssue'] ?? "";
        $ExpiredCard = $_POST['ExpiredCard'] ?? "";
        $taxNumber = $_POST['taxNumber'] ?? "";
        $securityNumber = $_POST['securityNumber'] ?? "";
        $conditions = $_POST['conditions'] ?? "";
        $enlisted = $_POST['enlisted'] ?? "";
        //ประวัติครอบครัว
        $status = $_POST['status'] ?? ""; //r
        $wedding = $_POST['wedding'] ?? ""; //r
        $husband = $_POST['husband'] ?? "";
        $nameWorkplace = $_POST['nameWorkplace'] ?? "";
        $husbandPosition = $_POST['husbandPosition'] ?? "";
        $child = $_POST['child'] ?? "";
        $studying = $_POST['studying'] ?? "";
        $education = $_POST['education'] ?? "";
        //

        // Display the data (you can do further processing here)
        echo "<br>";
        echo "<h3 class='cen'>ใบสมัครงาน</h3>" . "<br>";
        echo "ชื่อ-นามสกุล : " . $fname . "&nbsp" . $lname . "<br>";
        echo "Name in English : " . $eFname . "<br>";
        echo "ชื่อเล่น : " . $Gname . "<br>";
        echo "เพศ : " . $sex . "<br>";
        echo "สมัครตำแหน่ง : " . $position . "<br>";
        echo "เงินเดือนที่ต้องการ : " . $salary . " / " . $salaryM . "<br>";
        //
        echo "<hr>";
        echo "<h3 class='cen'>ประวัติส่วนตัว</h3>" . "<br>";
        echo "ที่อยู่ตามทะเบียนบ้าน" . "<br>";
        echo "เลขที่ " . $number . " &nbsp " . $Village . " &nbsp " . $road . " &nbsp " . $Subdistrict . " &nbsp " . $district . " &nbsp " . $province . " &nbsp " . $zipcode . "<br>";
        echo "E-mail : " . $email . "<br>";
        echo "ที่อยู่ปัจุบัน" . "<br>";
        echo "เลขที่ " . $caNumber . " &nbsp " . $caVillage . " &nbsp " . $caRoad . " &nbsp " . $caSubdistrict . " &nbsp " . $caDistrict . " &nbsp " . $caProvince . " &nbsp " . $caZipcode . "<br>";
        echo "โทรศัพท์ : " . $tol . "<br>";
        echo "มือถือ : " . $mobile . "<br>";
        if ($home == "other") {
            echo "บ้านที่อาศัย : " . $other . "<br>";
        } else {
            echo "บ้านที่อาศัย : " . $home . "<br>";
        }
        echo "วันเกิด : " . $birthday . "<br>";
        echo "อายุ : " . $age . "<br>";
        echo "ส่วนสูง : " . $height . "<br>";
        echo "น้ำหนัก : " . $weight . "<br>";
        echo "สัญชาติ : " . $nationality . "<br>";
        echo "เชื่อชาติ : " . $nation . "<br>";
        echo "ศาสนา : " . $religion . "<br>";
        echo "เลขที่บัตรประชาชน : " . $idCard . "<br>";
        echo "สถานที่ออกบัตร : " . $placeIssue . "<br>";
        echo "บัตรหมดอายุ : " . $ExpiredCard . "<br>";
        echo "บัตรผู้เสียภาษีเลขที่ : " . $taxNumber . "<br>";
        echo "บัตรประกันสังคมเลขที่ : " . $securityNumber . "<br>";
        if ($conditions == 3) {
            echo "ภาวะทางการทหาร : ยังไม่ได้รับการเกณฑ์ทหาร" . "<br>";
            echo "จะเกณฑ์ในปี : " . $enlisted . "<br>";
        } else {
            echo "ภาวะทางการทหาร : " . $conditions . "<br>";
        }
        //
        echo "<hr>";
        echo "<h3 class='cen'>ประวัติครอบครัว</h3>" . "<br>";
        echo "สถานภาพ : " . $status . "<br>";
        echo "กรณีแต่งงาน : " . $wedding . "<br>";
        echo "ชื่อภรรยา/สามี : " . $husband . "<br>";
        echo "ชื่อสถานที่ทำงาน : " . $nameWorkplace . "<br>";
        echo "ตำแหน่ง : " . $husbandPosition . "<br>";
        echo "มีบุตร : " . $child . "<br>";
        echo "บุตรที่กำลังศึกษา : " . $studying . "<br>";
        echo "บุตรที่ยังไม่เข้าศึกษา : " . $education . "<br>";
        ?>
    </div>
</body>

</html>