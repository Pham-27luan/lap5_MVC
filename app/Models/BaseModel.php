<?php
namespace App\Models;

use PDO;

class BaseModel {
    protected $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            "mysql:host=localhost;dbname=my_blog;charset=utf8",
            "root",
            ""
        );
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
