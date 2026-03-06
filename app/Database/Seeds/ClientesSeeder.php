<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "apellidos"     => "Frontera Trump",
                "nombres"       => "Carolina",
                "dni"           => "12345678",
                "telefono"      => "987654321"
            ],
            [
                "apellidos"     => "Peñazcos",
                "nombres"       => "Gabriela",
                "dni"           => "87654321",
                "telefono"      => "987654322"
            ],
            [
                "apellidos"     => "Salvavidas",
                "nombres"       => "Esther",
                "dni"           => "56781234",
                "telefono"      => "987654323"
            ]
        ];

        $this->db->table("clientes")->insertBatch($data);
    }
}
