<?php
session_start();
if(empty($_SESSION["admin"])){header("Location: ../login.php");exit;}
require "../includes/config.php";
$students=(int)$pdo->query("SELECT COUNT(*) FROM students")->fetchColumn();
$teachers=(int)$pdo->query("SELECT COUNT(*) FROM teachers")->fetchColumn();
$applications=(int)$pdo->query("SELECT COUNT(*) FROM applications")->fetchColumn();
$messages=(int)$pdo->query("SELECT COUNT(*) FROM messages")->fetchColumn();
$photos=(int)$pdo->query("SELECT COUNT(*) FROM gallery")->fetchColumn();
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Admin Dashboard</title><link rel="stylesheet" href="../css/style.css"></head>
<body>
<nav class="navbar"><a class="logo" href="index.php">ONE <span>VISION</span> ADMIN</a><a class="nav-login" href="logout.php">Logout</a></nav>
<section class="admin-head"><h1>Admin Dashboard</h1><p>Manage One Vision Academy.</p></section>
<section class="section"><div class="dashboard-grid">
<div class="dash-card"><strong><?= $students ?></strong><span>Students</span></div><div class="dash-card"><strong><?= $teachers ?></strong><span>Teachers</span></div><div class="dash-card"><strong><?= $applications ?></strong><span>Applications</span></div><div class="dash-card"><strong><?= $messages ?></strong><span>Messages</span></div><div class="dash-card"><strong><?= $photos ?></strong><span>Gallery Photos</span></div>
</div>
<div class="admin-links"><a href="students.php">👨‍🎓 Manage Students</a><a href="teachers.php">👨‍🏫 Manage Teachers</a><a href="applications.php">📋 Applications</a><a href="messages.php">✉ Messages</a><a href="gallery.php">🖼 Gallery</a><a href="../index.php">🌐 View Website</a></div>
</section>
</body></html>