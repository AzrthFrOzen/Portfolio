<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Interfaces\IMarcaService;
use App\Interfaces\IProductoService;
use App\Services\CategoriaService;
use App\Services\MarcaService;
use App\Services\ProductoService;
use Libs\Controller;
use Libs\Database;

class ProductoController extends Controller
{
    private readonly IProductoService $service;
    private readonly ICategoriaService $categoriaService;
    private readonly IMarcaService $marcaService;

    public function __construct(IProductoService $service, ICategoriaService $categoriaService, IMarcaService $marcaService)
    {
        $this->service = $service;
        $this->categoriaService = $categoriaService;
        $this->marcaService = $marcaService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll(true);
        echo $this->blade->make('producto.index', ['data' => $data])->render();
        
    }
    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $IdCateg = isset($param[1]) ? $param[1] : 0;
        $IdMarca = isset($param[2]) ? $param[2] : 0;

        $data = $this->service->get($id);
        $categorias = (new CategoriaService(new Database()))->getAllsimple();
        $marcas = (new MarcaService(new Database()))->getAllSimple();

        echo $this->blade->render('producto.detail', [
            'data' => $data,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'IdCateg' => $IdCateg,
            'IdMarca' => $IdMarca
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdProducto']) ? intval($_POST['IdProducto']) : 0;
        $obj = new \stdClass();
        $obj->IdProducto=$id;
        $obj->IdMarca = $_POST['IdMarca'];
        $obj->IdCateg = $_POST['IdCateg'];
        $obj->Nombre = $_POST['Nombre'];
        $obj->Descripcion = $_POST['Descripcion'];
        $obj->PrecioCosto = $_POST['PrecioCosto'];
        $obj->PrecioVenta = $_POST['PrecioVenta'];
        $obj->Stock = $_POST['Stock'];
        $obj->StockMinimo = $_POST['StockMinimo'];
        $obj->estado = $_POST['estado'] ? 1 : 0;

        if ($id > 0)
        {
            $rpta = $this->service->update($obj);
        }
        else
        {
            $rpta = $this->service->insert($obj);
        }
        
        header("Location:" . URL . "producto");
    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        if  ($id > 0)
        {
            $this->service->delete($id);
            header("Location:" . URL . "producto");
        }
    }
}