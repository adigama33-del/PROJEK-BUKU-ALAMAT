<?php
require_once 'inc/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil ID (jika ada, berarti ini Update. Jika kosong, berarti Create)
    $id = $_POST['id'] ?? '';
    
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';

    // Validasi sederhana: Nama & HP wajib ada
    if ($name && $phone) {
        $contact = new Contacts();
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'address' => $address
        ];

        if (!empty($id)) {
            // --- LOGIKA UPDATE ---
            // Jika ID ada, lakukan update
            $contact->update($id, $data);
        } else {
            // --- LOGIKA CREATE ---
            // Jika ID kosong, simpan baru
            $contact->save($data);
        }

        // Redirect ke home setelah selesai
        header("Location: index.php");
        exit;
    }
}

// Jika gagal, kembali ke form
header("Location: tambahKontak.php");
exit;