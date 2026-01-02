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
    
    public function search($keyword) {
        // Mencari keyword di kolom nama, telepon, email, atau alamat
        $sql = "SELECT * FROM contacts 
                WHERE name LIKE :keyword 
                OR phone LIKE :keyword 
                OR email LIKE :keyword
                 
                ORDER BY name ASC";
        
        $params = ['keyword' => "%$keyword%"];
        
        return $this->db->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM contacts WHERE id = :id";
        // Gunakan fetch() bukan fetchAll() karena cuma 1 data
        return $this->db->query($sql, ['id' => $id])->fetch(PDO::FETCH_ASSOC);
    }

    // Simpan perubahan
    public function update($id, $data) {
        $sql = "UPDATE contacts SET name = :name, phone = :phone, email = :email, address = :address WHERE id = :id";
        
        $params = [
            'id' => $id,
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address']
        ];
        
        return $this->db->query($sql, $params);
    }
}