<?php

class Welcome extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->sessionInit();
    
    }

    public function index()
    {
        load_script();
    }
}