<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'Name' => 'elon s',
            'UserName' => 'elon',
            'UserEmail'    => 'elon.com',
            'Password'    => password_hash('12345', PASSWORD_BCRYPT),
            'Active'    => 0,
            'role_id'    => 3,
        ];


        // Using Query Builder
        $this->db->table('user')->insert($data);
    }
}
