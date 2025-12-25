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

    public function getAll() {
        $sql = "SELECT * FROM contacts ORDER BY name ASC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}