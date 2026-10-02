<?php
session_start(); if(empty($_SESSION["admin"])){header("Location: ../login.php");exit;} require "../includes/config.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
if(($_POST["action"]??"")==="add"){$s=$pdo->prepare("INSERT INTO teachers(full_name,email,phone,subject) VALUES(?,?,?,?)");$s->execute([$_POST["full_name"],$_POST["email"],$_POST["phone"],$_POST["subject"]]);}
if(($_POST["action"]??"")==="delete"){$s=$pdo->prepare("DELETE FROM teachers WHERE id=?");$s->execute([(int)$_POST["id"]]);}
}
$rows=$pdo->query("SELECT * FROM teachers ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Teachers</title><link rel="stylesheet" href="../css/style.css"></head><body>
<nav class="navbar"><a class="logo" href="index.php">ONE <span>VISION</span></a><a class="nav-login" href="logout.php">Logout</a></nav>
<section class="section"><h1>Teachers</h1><div class="admin-panel"><form method="post" class="inline-form"><input type="hidden" name="action" value="add"><input name="full_name" placeholder="Full name" required><input name="email" placeholder="Email"><input name="phone" placeholder="Phone"><input name="subject" placeholder="Subject" required><button class="btn primary">Add Teacher</button></form></div>
<div class="table-wrap"><table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Subject</th><th>Action</th></tr><?php foreach($rows as $r): ?><tr><td><?= $r['id'] ?></td><td><?= htmlspecialchars($r['full_name']) ?></td><td><?= htmlspecialchars($r['email']) ?></td><td><?= htmlspecialchars($r['phone']) ?></td><td><?= htmlspecialchars($r['subject']) ?></td><td><form method="post"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?= $r['id'] ?>"><button class="delete-btn" onclick="return confirm('Delete teacher?')">Delete</button></form></td></tr><?php endforeach; ?></table></div></section></body></html>