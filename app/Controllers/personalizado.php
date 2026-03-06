<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class proveedor extends BaseController
{
    public function index()
    {
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Reportes/personalizados', data: $data);
    }
}