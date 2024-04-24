<?php

session_start();

include 'config.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
}

$data = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'")
    or die(mysqli_error($conn));

$cekdata = mysqli_num_rows($data);

if ($cekdata > 0) {
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $password;
    header("location: ../HTML/Dashboard-Admin.php");
} else { ?>
    <script type="text/javascript">
        alert("Username/password salah!");
        window.location.href = '../HTML/Admin.php';
    </script>
<?php
}
?>