<?php

namespace App\Controllers;

use App\Interfaces\IClienteService;
use App\Interfaces\IUsuarioService;
use App\Services\ClienteService;
use App\Services\UsuarioService;
use Libs\Controller;
use Libs\Database;

class ClienteController extends Controller
{
    private readonly IClienteService $service;
    private readonly IUsuarioService $usuarioService;

    public function __construct(IClienteService $service, IUsuarioService $usuarioService)
    {
        $this->service = $service;
        $this->usuarioService = $usuarioService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        echo $this->blade->make('cliente.index', ['data' => $data])->render();
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $IdUsuario = isset($param[1]) ? $param[1] : 0;

        $data = $this->service->get($id);
        $usuario = (new UsuarioService(new Database()))->getAllsimple();

        echo $this->blade->render('cliente.detail', [
            'data' => $data,
            'usuario' => $usuario,
            'IdUsuario' => $IdUsuario
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdCliente']) ? intval($_POST['IdCliente']) : 0;
        $obj = new \stdClass();
        $obj->IdCliente = $id;
        $obj->IdUsuario = $_POST['IdUsuario'];
        $obj->Nombres = $_POST['Nombres'];
        $obj->Apellidos = $_POST['Apellidos'];
        $obj->Direccion = $_POST['Direccion'];
        $obj->Ubicacion = $_POST['Ubicacion'];
        $obj->Telf = $_POST['Telf'];
        $obj->DNI = $_POST['DNI'];
        $obj->Nacimiento = $_POST['Nacimiento'];
        $obj->Sexo = $_POST['Sexo'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Producto guardado correctamente',
                'redirection' => URL . 'cliente/index'
            ];
        }

        echo json_encode($response);

        //header("Location:" . URL . "producto");
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
                'message' => 'Producto eliminado correctamente',
                'redirection' => URL . 'cliente/index'
            ];
        }
        echo json_encode($response);
    }
}