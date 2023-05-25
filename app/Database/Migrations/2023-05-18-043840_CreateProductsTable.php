<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "name" => [
                "type" => "TEXT",
            ],
            "description" => [
                "type" => "TEXT",
            ],
            "image" => [
                "type" => "TEXT"
            ],
            "price" => [
                "type" => "FLOAT",
                "unsigned" => true,
            ],
            "id_user" => [
                "type" => "INT",
                "unsigned" => true,
            ]
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("products");
    }

    public function down()
    {
        $this->forge->dropTable("products");
    }
}
