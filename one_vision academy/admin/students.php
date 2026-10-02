<?php
session_start(); if(empty($_SESSION["admin"])){header("Location: ../login.php");exit;} require "../includes/config.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
$action=$_POST["action"]??"";
if($action==="add"){ $s=$pdo->prepare("INSERT INTO students(full_name,email,phone,course) VALUES(?,?,?,?)"); $s->execute([$_POST["full_name"],$_POST["email"],$_POST["phone"],$_POST["course"]]); }
if($action==="delete"){ $s=$pdo->prepare("DELETE FROM students WHERE id=?"); $s->execute([(int)$_POST["id"]]); }
}
$rows=$pdo->query("SELECT * FROM students ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Students</title><link rel="stylesheet" href="../css/style.css"></head><body>
<nav class="navbar"><a class="logo" href="index.php">ONE <span>VISION</span></a><a class="nav-login" href="logout.php">Logout</a></nav>
<section class="section"><h1>Students</h1><div class="admin-panel"><form method="post" class="inline-form"><input type="hidden" name="action" value="add"><input name="full_name" placeholder="Full name" required><input name="email" placeholder="Email"><input name="phone" placeholder="Phone"><input name="course" placeholder="Course" required><button class="btn primary">Add Student</button></form></div>
<div class="table-wrap"><table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Course</th><th>Action</th></tr><?php foreach($rows as $r): ?><tr><td><?= $r['id'] ?></td><td><?= htmlspecialchars($r['full_name']) ?></td><td><?= htmlspecialchars($r['email']) ?></td><td><?= htmlspecialchars($r['phone']) ?></td><td><?= htmlspecialchars($r['course']) ?></td><td><form method="post"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?= $r['id'] ?>"><button class="delete-btn" onclick="return confirm('Delete student?')">Delete</button></form></td></tr><?php endforeach; ?></table></div></section></body></html>