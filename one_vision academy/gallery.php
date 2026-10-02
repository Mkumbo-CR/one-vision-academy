<?php
require "includes/config.php";
$photos = $pdo->query("SELECT * FROM gallery ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Gallery | One Vision Academy</title><link rel="stylesheet" href="css/style.css"></head>
<body><?php include "includes/navbar.php"; ?>
<section class="page-hero"><h1>Our Gallery</h1><p>Explore life, learning and technology at One Vision.</p></section>
<section class="section"><div class="photo-grid gallery-full">
<?php foreach($photos as $p): ?><div class="gallery-item"><img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>"><div><h3><?= htmlspecialchars($p['title']) ?></h3><p><?= htmlspecialchars($p['description']) ?></p></div></div><?php endforeach; ?>
</div></section>
<?php include "includes/footer.php"; ?></body></html>