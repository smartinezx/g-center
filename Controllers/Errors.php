<?php
class Errors extends Controller
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = '404. Not found';
        $this->views->getView($this, "index");
    }
}
