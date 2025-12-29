<?php require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kontak</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="Title">
            <h1>Tambah Kontak</h1>
            <p>Masukkan data kontak baru</p>
        </div>
    </header>

    <section>
        <div class="form-container">
            <form action="saveKontak.php" method="POST">
                
                <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" name="name" required placeholder="Contoh: Made Swastika">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon *</label>
                    <input type="text" name="phone" required placeholder="Contoh: 08123456789">
                </div>

                <div class="form-group">
                    <label>Email <span class="optional-label">(Opsional)</span></label>
                    <input type="email" name="email" placeholder="Contoh: swass67@gmail.com">
                </div>

                <div class="form-group">
                    <label>Alamat <span class="optional-label">(Opsional)</span></label>
                    <textarea name="address" rows="3" placeholder="Masukkan alamat lengkap anda"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save">Simpan</button>
                    <a href="index.php" class="btn-cancel">Batal</a>
                </div>

            </form>
        </div>
    </section>
</body>
</html>