<?php 
require_once 'inc/config.php'; 

// Ambil ID dari URL
$id = $_GET['id'] ?? null;
$contactObj = new Contacts();
$data = $contactObj->getById($id);

// Jika data tidak ada, kembalikan ke index
if (!$data) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="Title">
            <h1>Edit Kontak</h1>
            <p>Perbarui informasi kontak</p>
        </div>
    </header>

    <section>
        <div class="form-container">
            <form action="saveKontak.php" method="POST">
                
                <input type="hidden" name="id" value="<?= $data['id'] ?>">

                <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" name="name" required value="<?= htmlspecialchars($data['name']) ?>">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon *</label>
                    <input type="text" name="phone" required value="<?= htmlspecialchars($data['phone']) ?>">
                </div>

                <div class="form-group">
                    <label>Email <span class="optional-label">(Opsional)</span></label>
                    <input type="email" name="email" value="<?= htmlspecialchars($data['email']) ?>">
                </div>

                <div class="form-group">
                    <label>Alamat <span class="optional-label">(Opsional)</span></label>
                    <textarea name="address" rows="3"><?= htmlspecialchars($data['address']) ?></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save">Simpan Perubahan</button>
                    <a href="index.php" class="btn-cancel">Batal</a>
                </div>

            </form>
        </div>
    </section>
</body>
</html>