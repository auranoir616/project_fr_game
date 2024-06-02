<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblGame extends Migration
{
    public function up(){
        $this->forge->addField([
        'id'         => ['type'=> 'BIGINT','constraint'=> 20,'unsigned'=> true,'auto_increment' => true,],
        'username'   => ['type'=> 'VARCHAR','constraint' => 255,],
        'password'   => ['type'=> 'VARCHAR','constraint' => 255,],
        'created_at' => ['type'=> 'TIMESTAMP','null'=> true,],
        'updated_at' => ['type'=> 'TIMESTAMP','null'=> true,],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('tbl_admin', true);
    }

    public function down()
    {
        //
    }
}
