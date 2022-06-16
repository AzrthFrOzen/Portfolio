<?php

namespace Libs;



class Core
{
    public function __construct(ContainerDI $container)
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $service_name = "i" . $url[0] . "service";
        $flag_service = $container->searchEntry($service_name);

        if (empty($url[0])) {
            require_once '../app/controllers/homeController.php'; //Ruta del controlador principal, colocar nombre
            if ($flag_service)
            {
                $controller = new \App\Controllers\HomeController($container->getContainer()->get($service_name));
            }
            else
            {
                $controller = new \App\Controllers\HomeController(); //Colocar el controlador principal
            }            
            $controller->index();
            return false;
        }
        $file_controller = '../app/controllers/' . $url[0] . 'Controller.php';

        if (file_exists($file_controller)) {
            require_once $file_controller;
            $controller_name = '\\app\\controllers\\' . $url[0] . 'Controller';
            if ($flag_service)
            {
                $controller = new $controller_name($container->getContainer()->get($service_name));
            }
            else
            {
                $controller = new $controller_name();
            }

            $size = sizeof($url);
            if ($size >= 2) {
                if (method_exists($controller, $url[1])) {
                    if ($size >= 3) {
                        $param = [];
                        for ($i = 2; $i < $size; $i++) {
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    } else {
                        $controller->{$url[1]}();
                    }
                } else {
                    echo "La accion no existe";
                }
            } else {
                $controller->index();
            }
        } else {
            echo "No existe el archivo controlador";
        }
        //myEcho($file_controller);
    }
}
