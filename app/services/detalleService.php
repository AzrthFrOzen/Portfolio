<?php

namespace App\Services;

use App\Interfaces\IDetalleService;
use App\Models\DetalleModel;
use Libs\Database;

class DetalleService implements IDetalleService
{
    private $db;

    public function __construct(Database $db) 
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = DetalleModel::select(
            'ventasdetalle.IdVentasDetalle',
            'ventasdetalle.IdVenta',
            'ventasdetalle.IdProducto',
            'ventasdetalle.Cantidad',
            'ventasdetalle.PrecioVenta',
            'ventasdetalle.Item',
            'ventas.IdVenta',
            'productos.Nombre'
        )
        ->join('ventas', 'ventasdetalle.IdVenta', 'ventas.IdVenta')
        ->join('productos', 'ventasdetalle.IdProducto', 'productos.IdProducto')
        ->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = DetalleModel::find($id);
        if ($model == null) {
            $model = new DetalleModel();
        }
        return $model;
    }
    public function insert($obj)
    {
        $model = new DetalleModel();
        $model->IdVentasDetalle = $obj->IdVentasDetalle;
        $model->IdVenta = $obj->IdVenta;
        $model->IdProducto = $obj->IdProducto;
        $model->Cantidad = $obj->Cantidad;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Item = $obj->Item;
        $model->save();
    }
    public function update($obj)
    {
        $model = DetalleModel::find($obj->IdVentasDetalle);
        $model->IdVentasDetalle = $obj->IdVentasDetalle;
        $model->IdVenta = $obj->IdVenta;
        $model->IdProducto = $obj->IdProducto;
        $model->Cantidad = $obj->Cantidad;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Item = $obj->Item;
        $model->save();
    }
    public function delete(int $id)
    {
        $model = DetalleModel::find($id);
        $model->delete();
    }
}