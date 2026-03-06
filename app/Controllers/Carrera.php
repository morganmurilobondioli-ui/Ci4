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
        $lista = array("Javascript", "PHP", "Python", "Java", "SQL");
        return view('ingenieria', ["desarrollador" => "Morgan Bondioli", "lenguajes"=> $lista]);
    }

    /**
     * Retorna la vista de la Web de Diseño Gráfico Digital
     */
    public function showDesing(): string
    {
        $aplicaciones = ["Photoshop", "Illustrator", "InDesign", "CorelDRAW", "GIMP"];
        return view('desing', ["desarrollador" => "Yolanda Eva","aplicaciones" => $aplicaciones]);
    }

    
}