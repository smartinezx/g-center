<?php

class Pasarela extends Controller
{
    public function __construct()
    {
        session_start();
        if (!empty($_SESSION['activo'])) {
            header("location: " . base_url . "administracion/home");
        }
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Comprar membresia';
        $this->views->getView($this, "index", $data);
    }

    public function basico()
    {
        $this->views->getView($this, "basico");
    }

    public function premium()
    {
        $this->views->getView($this, "premium");
    }

    public function estandar()
    {
        $this->views->getView($this, "estandar");
    }
}
