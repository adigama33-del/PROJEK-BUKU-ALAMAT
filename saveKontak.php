<?php
require_once 'inc/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

        if ($contact->save($data)) {
            header("Location: index.php");
            exit;
        }
    }
}

// Jika gagal, kembali ke form
header("Location: tambahKontak.php");
exit;