<?php
require_once 'inc/config.php';

// Ambil ID dari URL
$id = $_GET['id'] ?? null;

if ($id) {
    $contact = new Contacts();
    $contact->delete($id);
}

// Redirect kembali ke index setelah menghapus
header("Location: index.php");
exit;