<?php
session_start(); if(empty($_SESSION["admin"])){header("Location: ../login.php");exit;} require "../includes/config.php";
$message="";
if($_SERVER["REQUEST_METHOD"]==="POST"){
$title=trim($_POST["title"]??""); $description=trim($_POST["description"]??"");
if(isset($_FILES["image"]) && $_FILES["image"]["error"]===UPLOAD_ERR_OK){
$allowed=["jpg","jpeg","png","webp"]; $ext=strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
if(in_array($ext,$allowed,true) && $_FILES["image"]["size"]<=5*1024*1024){
$name=uniqid("photo_",true).".".$ext; $target="../uploads/gallery/".$name;
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target)){
$s=$pdo->prepare("INSERT INTO gallery(title,description,image) VALUES(?,?,?)");$s->execute([$title,$description,"uploads/gallery/".$name]);$message="Photo uploaded.";
}}
}}
if(isset($_GET["delete"])){ $id=(int)$_GET["delete"]; $s=$pdo->prepare("SELECT image FROM gallery WHERE id=?");$s->execute([$id]);$r=$s->fetch();if($r){$path="../".$r["image"];if(is_file($path))unlink($path);$d=$pdo->prepare("DELETE FROM gallery WHERE id=?");$d->execute([$id]);}header("Location: gallery.php");exit;}
$photos=$pdo->query("SELECT * FROM gallery ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Gallery Management</title><link rel="stylesheet" href="../css/style.css"></head><body><nav class="navbar"><a class="logo" href="index.php">ONE <span>VISION</span></a><a class="nav-login" href="logout.php">Logout</a></nav><section class="section"><h1>Gallery Management</h1><?php if($message): ?><div class="success"><?= htmlspecialchars($message) ?></div><?php endif; ?><div class="admin-panel"><form method="post" enctype="multipart/form-data" class="inline-form"><input name="title" placeholder="Photo title" required><input name="description" placeholder="Description"><input type="file" name="image" accept=".jpg,.jpeg,.png,.webp" required><button class="btn primary">Upload</button></form></div><div class="photo-grid"><?php foreach($photos as $p): ?><div class="gallery-item"><img src="../<?= htmlspecialchars($p["image"]) ?>" alt=""><div><h3><?= htmlspecialchars($p["title"]) ?></h3><a class="delete-link" href="?delete=<?= $p["id"] ?>" onclick="return confirm('Delete photo?')">Delete</a></div></div><?php endforeach; ?></div></section></body></html>