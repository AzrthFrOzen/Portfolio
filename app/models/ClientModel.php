<?php

namespace App\Models;

use Libs\Connection;

class ClientModel
{
    private $pdo;

    public function getAll()
    {
        $this->pdo = Connection::getInstance()->getConnection();
        $sql = "SELECT * FROM client";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}