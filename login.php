<?php
include "connection.php";

session_start();
$sql = "SELECT username, password FROM member";
$result = $conn->query($sql);
$err = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $login = $_POST['login'];
    $pswd = $_POST['pswd'];

    $_SESSION['user_login'] = $login;
    $_SESSION['pass_login'] = $pswd;

    /* if (isset($_SESSION['user_register']) and isset($_SESSION['pass_register'])) {
        if ($login == $_SESSION['user_register'] and $pswd == $_SESSION['pass_register']) {
            $conn->close();
            header("location:showmember.php");
        } else {
            $_SESSION['errorMsg'] = "อีเมลหรือรหัสผ่านผิด โปรดลองอีกครั้ง";
        }
    } else { */
        if (!$result) {
            echo $mysqli->error;
            $conn->close();
        } else if ($result->num_rows == 0) {
            $_SESSION['errorMsg'] = "อีเมลหรือรหัสผ่านผิด โปรดลองอีกครั้ง";
            $conn->close();
        }
        while ($data = $result->fetch_object()) {
            if ($_SESSION['user_login'] == $data->username and $_SESSION['pass_login'] == $data->password) {
                $conn->close();
                if (isset($_POST['save_account'])) {
                    $expire = time() + 5 * 60;  //ให้คุกกี้มีอายุ 5 นาที
                    setcookie('login', $login, $expire);
                    setcookie('pswd', $pswd, $expire);
                } else {    //ถ้า switch เป็น off และได้เก็บค่าไว้ในคุกกี้ ก็ให้ลบออก
                    $expire = time() - 3600;
                    if (isset($_COOKIE['login'])) {
                        setcookie('login', '', $expire);
                    }
                    if (isset($_COOKIE['pswd'])) {
                        setcookie('pswd', '', $expire);
                    }
                }
                $_SESSION['login'] = $login;
                header("location:showmember.php");
            }
            $_SESSION['errorMsg'] = "อีเมลหรือรหัสผ่านผิด โปรดลองอีกครั้ง";
        }
    }
// }

//ถ้าเก็บคุกกี้เอาไว้ ก็อ่านค่าเพื่อนำไปเติมลงในฟอร์ม
$login = $_COOKIE['login'] ?? '';
$pswd = $_COOKIE['pswd'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css">
</head>

<body>

    <div class="wrapper">
        <?php
        if (isset($_SESSION['errorMsg'])) {
            echo "<div style='width:100%; background-color:red; color:white; padding:15px; border-radius:8px; border: solid 1px black; text-align:center;'>";
            echo $_SESSION['errorMsg'];
            echo "</div>";
            unset($_SESSION['errorMsg']);
        }
        ?>
        <div class="title">
            Login
        </div>
        <form id="login" method="post" class="text-center m-auto">
            <?= $err ?>

            <div class="field">
                <input type="text" name="login" value="<?= $login ?>" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="pswd" value="<?= $pswd ?>" required>
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" name="save_account" id="check1">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">
                Not a member? <a href="membership.php">Signup now</a>
            </div>
            <div class="content">
                <a href="index.html">หน้าหลัก</a>
            </div>
        </form>
    </div>

</body>

</html>