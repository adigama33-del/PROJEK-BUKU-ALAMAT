<?php
class Contacts {
    private $id;
    private $name;
    private $phone;
    private $email;
    private $address;
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    // Mengambil semua kontak dari database
    public function getAll() {
        $sql = "SELECT * FROM contacts ORDER BY name ASC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    // Menyimpan kontak baru ke database
    public function save($data) {
        $sql = "INSERT INTO contacts (name, phone, email, address) VALUES (:name, :phone, :email, :address)";
        return $this->db->query($sql, $data); 
    }
    
    public function delete($id) {
        $sql = "DELETE FROM contacts WHERE id = :id";
        return $this->db->query($sql, ['id' => $id]);
    }
}