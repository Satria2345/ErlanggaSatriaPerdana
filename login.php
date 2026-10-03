<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Kuliner</title>
    <link rel="stylesheet" href="assets/adminlte/css/adminlte.min.css">
</head>
<body class="login-page">
<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            <h4 class="text-center">Login Kuliner</h4>

            <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

            <form method="POST">
                <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
                <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
                <button type="submit" name="login" class="btn btn-primary btn-block">
                    Login
                </button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
