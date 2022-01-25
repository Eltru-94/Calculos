<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'apellido' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'altura' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null'=>true
            ],
            'peso' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null'=>true
            ],
            'IMC' => [
                'type' => 'TEXT',
                'constraint' => 50,
                'null'=>true
            ],
            'estado' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'created_at datetime default current_timestamp'
        ]);

        $this->forge->addKey('id_user', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
