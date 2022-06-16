<?php

namespace App\service;

use App\Interfaces\IProductoService;
use App\Models\ProductoModel;
use Libs\Database;

class ProductoService implements IProductoService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(bool $estado)
    {
        $result = ProductoModel::all();
        return $result;
    }
    public function get(int $id)
    {

    }
    public function insert($obj)
    {

    }
    public function update($obj)
    {

    }
    public function delete(int $id)
    {
        
    }
}