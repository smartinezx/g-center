<?php


class Signup extends Controller
{
    public function __construct() {
        session_start();
        if (!empty($_SESSION['activo'])) {
            header("location: ".base_url. "administracion/home");
        }
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Crear cuenta';
        $this->views->getView($this, "index", $data);
    }
}

