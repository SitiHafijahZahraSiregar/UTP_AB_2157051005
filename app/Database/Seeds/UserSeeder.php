<?php

namespace App\Database\Seeds;

use App\Models\Modeluser;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new Modeluser();
        $userModel->save([
            'npm' => '2157051005',
            'nama'=> 'sitihafijahzahrasiregar',
            'id_kelas'=> 1,
            'email'=> 'sitihafizah579@gmail.com',            
            'no_hp'=> '087807545712',            

        ]);
    }
    
}
