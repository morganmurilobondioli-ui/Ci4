<?php

namespace App\Controllers;

class Carrera extends BaseController
{
    /**
     * Retorna la vista de la Web de Ingeniería de Software
     */
    public function showIngenieria(): string
    {
        //Los métodos en los controladores pueden realizar operaciones complejas
        //Una de estas tareas es enviare datos al frontend (vista)
        return view('ingenieria', ["desarrollador" => "Morgan Bondioli"]);
    }

    /**
     * Retorna la vista de la Web de Diseño Gráfico Digital
     */
    public function showDesing(): string
    {
        return view('desing');
    }

    
}