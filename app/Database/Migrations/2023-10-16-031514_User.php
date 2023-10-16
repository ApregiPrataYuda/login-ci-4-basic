<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userId' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'UserName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'UserEmail' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
           
            'Active' => [
                'type' => 'INT',
                'constraint'  => 5,
            ],
            'roleId' => [
                'type' => 'INT',
                'constraint'  => 5,
            ],
            'createDate' => [
                'type' => 'datetime',
                'Default' => 'CURRENT_TIMESTAMP',
                'ON UPDATE CURRENT_TIMESTAMP' => TRUE,
            ],
            'updateDate' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('userId', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
