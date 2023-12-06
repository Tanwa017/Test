<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css'>

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
                        <a class="nav-link active" aria-current="page" href="show.php">Data Job Application</a>
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
    <?php
    include "connection.php";
    session_start();
    $sql = "SELECT * FROM member WHERE username = '{$_SESSION['user_login']}';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <div class='container' style="margin: auto; width: 40%; padding: 10px;">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><?php echo "ชื่อบัญชีผู้ใช้ : " . $row['username'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "รหัสผ่าน : " . $row['password'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "ชื่อ-นามสกุล : " . $row["name"] . "&nbsp&nbsp" . $row["sername"] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "ที่อยู่ : " . $row['address'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "โทรศัพท์ : " . $row['telephone'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "E-mail : " . $row['email'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "ความสนใจ : " . $row['interest'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "กิจกรรมพิเศษ : " . $row['special_events'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "งานอดิเรก : " . $row['hobby'] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo  "ช่องทางชำระเงิน : " . $row['payment'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    <?php
        }
    }
    ?>
</body>

</html>