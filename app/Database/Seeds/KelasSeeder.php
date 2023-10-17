<?php

namespace App\Database\Seeds;

use App\Models\Modelkelas;
use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelasModel = new Modelkelas();
        $kelasModel->save([
            'nama_kelas' => 'AB'
        ]);
        $kelasModel->save([
            'nama_kelas' => 'BC'
        ]);
        $kelasModel->save([
            'nama_kelas' => 'CD'
        ]);
        $kelasModel->save([
            'nama_kelas' => 'DA'
        ]);
    }
}
