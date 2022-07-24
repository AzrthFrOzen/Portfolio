<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Services\CategoriaService;
use Libs\Controller;

class CategoriaController extends Controller
{
    private ICategoriaService $service;

    public function __construct(ICategoriaService $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        echo $this->blade->make('categoria.index', ['data' => $data])->render();
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $data = $this->service->get($id);
        echo $this->blade->render('categoria.detail', ['data' => $data]);
    }

    public function save()
    {
        $id = isset($_POST['IdCateg']) ? intval($_POST['IdCateg']) : 0;
        $obj = new \stdClass();
        $obj->IdCateg = $id;
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
                'message' => 'Categoria guardada correctamente',
                'redirection' => URL . 'categoria/index'
            ];
        }
        /*

            $response = [
                'success' => true,
                'message' => 'Categoria guardada correctamente',
                'redirection' => URL . 'categoria/index'
            ];
        */
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
                'redirection' => URL . 'categoria/index'
            ];
        }
        echo json_encode($response);
    }
}

