<?php

namespace Router;

class RouterHandler {

    private $method;
    protected $data;

    public function setMethod($method) {
        $this->method = $method;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function route($controllerClass, $id = null) {
        $controller = new $controllerClass();

        switch ($this->method) {
            case 'GET':
                if ($id) {
                    if (method_exists($controller, 'show')) {
                        $controller->show($id);
                    } else {
                        echo "Method 'show' not found in controller.\n";
                    }
                } else {
                    if (method_exists($controller, 'index')) {
                        $controller->index();
                    } else {
                        echo "Method 'index' not found in controller.\n";
                    }

                    if ($id && method_exists($controller, 'create')) {
                        $controller->create($id);
                    }
                }
                break;
            case 'POST':
                if (method_exists($controller, 'store')) {
                    $controller->store($this->data);
                } else {
                    echo "Method 'store' not found in controller.\n";
                }
                break;
            // Add more HTTP methods as needed (PUT, DELETE, etc.)

            case 'DELETE':
                if ($id && method_exists($controller, 'destroy')) {
                    $controller->destroy($id);
                } else {
                    echo "Method 'destroy' not found in controller.\n";
                }
                break;
            default:
                echo "Unsupported HTTP method: " . $this->method . "\n";
                break;
        }
    }

}