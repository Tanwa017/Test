<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <span>
                                <a class="navbar-brand" href="login.php">ย้อนกลับ</a>
                            </span>
                </form>
            </div>
        </div>
    </nav>
    <div class="st">
        <h4 style="text-align: center;">สมัครสมาชิก</h4>
        <div class="row mb-3">
            <div class="form-group starlabel">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="form-group starlabel">
                <label>Password</label>
                <input type="text" name="password" id="password" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group mb-3 col-lg-6 starlabel">
                <label>ชื่อ</label>
                <input type="text" name="fname" id="fname" class="form-control" required>
            </div>
            <div class="form-group mb-3 col-lg-6 starlabel">
                <label>นามสกุล</label>
                <input type="text" name="lname" id="lname" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="form-group starlabel">
                <label for="address" id="addr">ที่อยู่ปัจจุบัน</label>
                <textarea class="form-control" name="address" id="address" rows="4" style="resize: none;" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group mb-3 col-lg-6 starlabel">
                <label>เบอร์โทรศัพท์</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group mb-3 col-lg-6 starlabel">
                <label>อีเมล</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group mb-3 col-lg-6 ">
                <label>ความสนใจ</label>
                <input type="text" name="interests" id="interests" class="form-control" required>
            </div>
            <div class="form-group mb-3 col-lg-6 ">
                <label>กิจกรรมพิเศษ</label>
                <input type="text" name="special_activities" id="special_activities" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group mb-3 col-lg-6 ">
                <label>งานอดิเรก</label>
                <input type="text" name="hobbies" id="hobbies" class="form-control" required>
            </div>
            <div class="form-group mb-3 col-lg-6 starlabel">
                <label for="payment_method" class="type">ช่องทางชำระเงิน:</label>
                <select class="form-control" name="payment" id="payment" class="form-select">
                    <option value>-----</option>
                    <option value="credit_card">บัตรเครดิต</option>
                    <option value="bank_transfer">โอนเงินผ่านธนาคาร</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="flex-end">
                <input type="submit" id="submit" value="Submit" class="btn btn-success" style="text-align: center;">
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                var username = $("#username").val();
                var password = $("#password").val();
                var fname = $("#fname").val();
                var lname = $("#lname").val();
                var address = $("#address").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var interests = $("#interests").val();
                var special_activities = $("#special_activities").val();
                var hobbies = $("#hobbies").val();
                var payment = $("#payment").val();

                if (username != "" && password != "") {
                    $.ajax({
                        url: "process_registration.php",
                        type: "POST",
                        data: {
                            action: "insert_data",
                            username: username,
                            password: password,
                            fname: fname,
                            lname: lname,
                            address: address,
                            phone: phone,
                            email: email,
                            interests: interests,
                            special_activities: special_activities,
                            hobbies: hobbies,
                            payment: payment,
                        },
                        dataType: "json",
                        success: function(rs) {
                            if (rs.status == "success") {
                                alert("ทำรายการสำเร็จ");
                                location.href = "login.php";
                            } else {
                                alert("ทำรายการไม่สำเร็จ");
                            }
                        }
                    });
                } else {
                    alert('กรุณากรอกข้อมูล !');
                }
            });
        })
    </script>
</body>

</html>