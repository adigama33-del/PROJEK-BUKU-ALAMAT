<?php
require_once 'inc/config.php';

$contactObj = new Contacts();
$contacts = $contactObj->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="Title">
            <h1>Buku Alamat</h1>
            <p>Kelola Kontak pribadi Anda</p>
        </div>
        <button><a href="tambah_kontak.php">Tambah Kontak</a></button>
    </header>
    <section>
        <form action="" method="post" class="search-bar">
            <input type="text" name="search" placeholder="Cari kontak...">
            <button type="submit">Cari</button>
        </form>
        <div class="contact-grid">
            <?php foreach ($contacts as $c): ?>
            <div class="card">
                <div class="info">
                    <h3><?= htmlspecialchars($c['name']) ?></h3>
                    
                    <div class="detail-row">
                        <span><?= htmlspecialchars($c['phone']) ?></span>
                    </div>
                    
                    <?php if(!empty($c['email'])): ?>
                    <div class="detail-row">
                        <span><?= htmlspecialchars($c['email']) ?></span>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($c['address'])): ?>
                    <div class="detail-row">
                        <span><?= htmlspecialchars($c['address']) ?></span>
                    </div>
                    <?php endif; ?>
                </div>   
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>