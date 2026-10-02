<?php
require "includes/config.php";
$success="";
if($_SERVER["REQUEST_METHOD"]==="POST"){
$stmt=$pdo->prepare("INSERT INTO messages(name,email,subject,message) VALUES(?,?,?,?)");
$stmt->execute([trim($_POST["name"]??""),trim($_POST["email"]??""),trim($_POST["subject"]??""),trim($_POST["message"]??"")]);
$success="Message sent successfully.";
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Contact | One Vision Academy</title><link rel="stylesheet" href="css/style.css"></head>
<body><?php include "includes/navbar.php"; ?>
<section class="page-hero"><h1>Contact Us</h1><p>We would love to hear from you.</p></section>
<section class="section"><div class="form-layout"><div class="contact-info"><h2>Get In Touch</h2><p>📧 info@onevision.ac.tz</p><p>📞 +255 700 000 000</p><p>📍 Tanzania</p><img src="images/teacher-teaching.jpg" alt="Teacher"></div>
<form class="form-card" method="post"><?php if($success): ?><div class="success"><?= htmlspecialchars($success) ?></div><?php endif; ?><label>Name</label><input name="name" required><label>Email</label><input type="email" name="email" required><label>Subject</label><input name="subject" required><label>Message</label><textarea name="message" rows="7" required></textarea><button class="btn primary">Send Message</button></form></div></section>
<?php include "includes/footer.php"; ?></body></html>