<?php
include "connection.php";

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
$house_address = "เลขที่ " . $number . " &nbsp " . $Village . " &nbsp " . $road . " &nbsp " . $Subdistrict . " &nbsp " . $district . " &nbsp " . $province . " &nbsp " . $zipcode;
$current_address = "เลขที่ " . $caNumber . " &nbsp " . $caVillage . " &nbsp " . $caRoad . " &nbsp " . $caSubdistrict . " &nbsp " . $caDistrict . " &nbsp " . $caProvince . " &nbsp " . $caZipcode;

$sql = "INSERT INTO apply_work(name, sername, nameEN,nickname,sex,apply_position,desired_salary,money_month)
      VALUES ('$fname','$lname','$eFname','$Gname','$sex','$position','$salary','$salaryM')";

$insert = $conn->query($sql);

if ($insert) {
    echo 'การเพิ่มข้อมูล เสร็จเรียบร้อย';
} else {
    echo 'การเพิ่มข้อมูล เกิดข้อผิดพลาด';
}
$conn->close();
