<?php

namespace App\Services;

use App\Interfaces\ICategoriaService;
use App\Models\CategoriaModel;
use Libs\Database;

class CategoriaService implements ICategoriaService
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }
    public function getAll()
    {
        $result = CategoriaModel::select(
            'categorias.IdCateg',
            'categorias.Nombre',
            'categorias.Descripcion',
            'categorias.created_at',
            'categorias.updated_at'
        )
        ->get();
        return $result;
    }
    public function getAllsimple()
    {
        $result = CategoriaModel::select('IdCateg', 'Nombre')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = CategoriaModel::find($id);
        if ($model == null) {
            $model = new CategoriaModel();
        }
        return $model;
    }
    public function insert($obj)
    {
        $model = new CategoriaModel();
        $model->IdCateg = $obj->IdCateg;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->save();
    }
    public function update($obj)
    {
        $model = CategoriaModel::find($obj->IdCateg);
        $model->IdCateg = $obj->IdCateg;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->save();
    }
    public function delete(int $id)
    {
        $model = CategoriaModel::find($id);
        $model->delete();
    }
}
