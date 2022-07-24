<?php

namespace App\Controllers;

use App\Interfaces\IMarcaService;
use App\Services\MarcaService;
use Libs\Controller;
use stdClass;

class MarcaController extends Controller
{
    private readonly IMarcaService $service;

    public function __construct(IMarcaService $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        echo $this->blade->make('marca.index', ['data' => $data])->render();
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $data = $this->service->get($id);
        echo $this->blade->render('marca.detail', ['data' => $data]);
    }

    public function save()
    {
        $id = isset($_POST['IdMarca']) ? intval($_POST['IdMarca']) : 0;
        $obj = new \stdClass();
        $obj->IdMarca = $id;
        $obj->Nombre = $_POST['Nombre'];
        $obj->Descripcion = $_POST['Descripcion'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {            
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Marca guardada correctamente',
                'redirection' => URL . 'marca/index'
            ];
        }
        
        echo json_encode($response);
    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        if ($id > 0) {
            $rpta = $this->service->delete($id);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Marca eliminada correctamente',
                'redirection' => URL . 'marca/index'
            ];
        }
        echo json_encode($response);
    }
}