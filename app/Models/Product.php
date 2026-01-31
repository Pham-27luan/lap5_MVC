<?php
namespace App\Models;

class Product extends BaseModel {

    public function all() {
        return $this->pdo->query("SELECT * FROM sanpham")
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM sanpham WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare(
            "INSERT INTO sanpham(ten, gia) VALUES(?,?)"
        );
        return $stmt->execute([$data['ten'], $data['gia']]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare(
            "UPDATE sanpham SET ten=?, gia=? WHERE id=?"
        );
        return $stmt->execute([$data['ten'], $data['gia'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM sanpham WHERE id=?");
        return $stmt->execute([$id]);
    }
}
