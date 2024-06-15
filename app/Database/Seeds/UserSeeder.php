<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();

        // Memanggil metode insert dengan array asosiatif
        $data = [
            "username" => "fithra",
            "email" => "fithra@gmail.com",
            "password" => password_hash("12345678", PASSWORD_DEFAULT),
        ];

        try {
            $model->insert($data);
            echo "User inserted successfully.";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
