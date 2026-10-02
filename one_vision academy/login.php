<?php
session_start();
$error="";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    if(($_POST["username"]??"")==="admin" && ($_POST["password"]??"")==="Admin@123"){
        $_SESSION["admin"]=true;
        header("Location: admin/index.php"); exit;
    }
    $error="Invalid username or password.";
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Portal Login | One Vision Academy</title><link rel="stylesheet" href="css/style.css"></head>
<body><?php include "includes/navbar.php"; ?><section class="login-wrap"><div class="login-card"><h1>Portal Login</h1><p>Administrator portal</p><?php if($error): ?><div class="alert"><?= htmlspecialchars($error) ?></div><?php endif; ?><form method="post"><label>Username</label><input name="username" required><label>Password</label><input type="password" name="password" required><button class="btn primary full">Login</button></form><div class="demo"><b>Demo:</b> admin / Admin@123</div></div></section><?php include "includes/footer.php"; ?></body></html>