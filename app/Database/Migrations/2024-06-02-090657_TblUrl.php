<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUrl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type'=> 'BIGINT','constraint'=> 20,'unsigned'=> true,'auto_increment' => true,],
            'link_url_display'   => ['type'=> 'TEXT','constraint' => 2550,],
            'link_url_redirect'   => ['type'=> 'TEXT','constraint' => 2550,],
            'created_at' => ['type'=> 'TIMESTAMP','null'=> true,],
            'updated_at' => ['type'=> 'TIMESTAMP','null'=> true,],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_url', true);
    }

    public function down()
    {
        //
    }
}
