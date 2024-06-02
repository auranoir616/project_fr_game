<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblGame2 extends Migration
{
    public function up(){
        $this->forge->addField([
            'id'         => ['type'=> 'BIGINT','constraint'=> 20,'unsigned'=> true,'auto_increment' => true,],
            'nama_game'   => ['type'=> 'VARCHAR','constraint' => 255,],
            'gambar_game'   => ['type'=> 'VARCHAR','constraint' => 255,],
            'url_game'   => ['type'=> 'VARCHAR','constraint' => 255,],
            'created_at' => ['type'=> 'TIMESTAMP','null'=> true,],
            'updated_at' => ['type'=> 'TIMESTAMP','null'=> true,],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_game', true);
        
    }

    public function down()
    {
        //
    }
}
