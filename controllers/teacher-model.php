<?php
class Teacher {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getTeachers() {
        $this->db->query("SELECT * FROM teachers");
        return $this->db->resultSet();
    }

    public function getTeacherById($id) {
        $this->db->query("SELECT * FROM teachers WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
}
