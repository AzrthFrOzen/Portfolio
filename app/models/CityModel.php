<?php

namespace App\Models;

use Libs\Connection;

class CityModel
{
    private $pdo;

    public function getAll()
    {
        $this->pdo = Connection::getInstance()->getConnection();
        $sql = "SELECT CountryCode, District FROM city";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}
