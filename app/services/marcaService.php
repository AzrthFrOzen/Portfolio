<?php

namespace App\Services;

use App\Interfaces\IMarcaService;
use App\Models\MarcaModel;
use Libs\Database;

class MarcaService implements IMarcaService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = MarcaModel::select('IdMarca', 'Nombre', 'Descripcion')->get();
        return $result;
    }
    public function getAllSimple()
    {
        $result = MarcaModel::select('IdMarca', 'Nombre')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = MarcaModel::find($id);
        if ($model == null) {
            $model = new MarcaModel();
        }
        return $model;
    }
    public function insert($obj)
    {
        $model = new MarcaModel();
        $model->IdMarca = $obj->IdMarca;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->save();
    }
    public function update($obj)
    {
        $model = MarcaModel::find($obj->IdMarca);
        $model->IdMarca = $obj->IdMarca;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->save();
    }
    public function delete(int $id)
    {
        $model = MarcaModel::find($id);
        $model->delete();
    }
}