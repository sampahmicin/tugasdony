<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $table;

    public function __construct()
    {
        $this->table = 'products';
    }

    public function up()
    {
        Schema::dropIfExists($this->table);
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->mediumText('deskripsi');
            $table->string('gambar');
            $table->decimal('harga');
            $table->string('slug');
            $table->timestamps();
        });

        $products = array(
            ['nama' => 'Peking', 'deskripsi' => 'Bebek Peking', 'gambar' => 'peking.jpg', 'harga' => 1900],
            ['nama' => 'Hibrida', 'deskripsi' => 'Bebek Hibrida', 'gambar' => 'hibrida.jpg', 'harga' => 1900 ],
            ['nama' => 'Jawa', 'deskripsi' => 'Bebek Jawa', 'gambar' => 'jawa.jpg', 'harga' => 1900 ]
        );
        #$products=json_decode(json_encode($t_product));
        foreach ($products as $i => $bebek){
            $bebek['slug']=str_slug($bebek['nama'], '-');
            \App\Product::create($bebek);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);

    }
}
