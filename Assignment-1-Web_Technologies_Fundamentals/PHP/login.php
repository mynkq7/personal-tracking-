<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user === "admin" && $pass === "1234") {
        $_SESSION["user"] = $user;
        header("Location: Home.php");
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>Login</h1>

<form method="post">
    Username:<br>
    <input name="username"><br>
    Password:<br>
    <input type="password" name="password"><br><br>
    <button>Login</button>
</form>

<?php if (isset($error)) echo $error; ?>

</body>
</html>
