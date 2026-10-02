<?php
require "includes/config.php";
$success = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("INSERT INTO applications (full_name,email,phone,course,message) VALUES (?,?,?,?,?)");
    $stmt->execute([
        trim($_POST["full_name"] ?? ""),
        trim($_POST["email"] ?? ""),
        trim($_POST["phone"] ?? ""),
        trim($_POST["course"] ?? ""),
        trim($_POST["message"] ?? "")
    ]);
    $success = "Application submitted successfully. The admissions team can contact you.";
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Admissions | One Vision Academy</title><link rel="stylesheet" href="css/style.css"></head>
<body><?php include "includes/navbar.php"; ?>
<section class="page-hero"><h1>Admissions</h1><p>Apply to One Vision Academy.</p></section>
<section class="section"><div class="form-layout"><div class="content-box"><h2>Start Your Application</h2><p>Complete the form and submit your application.</p><p>Our team can review your details and contact you using the information provided.</p></div>
<form class="form-card" method="post">
<?php if($success): ?><div class="success"><?= htmlspecialchars($success) ?></div><?php endif; ?>
<label>Full Name</label><input name="full_name" required>
<label>Email</label><input type="email" name="email" required>
<label>Phone</label><input name="phone" required>
<label>Course</label><select name="course" required><option value="">Select course</option><option>Information Technology</option><option>Business Analytics</option><option>Computer Studies</option></select>
<label>Message</label><textarea name="message" rows="5"></textarea>
<button class="btn primary" type="submit">Submit Application</button>
</form></div></section>
<?php include "includes/footer.php"; ?></body></html>