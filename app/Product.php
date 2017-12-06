<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public static $rules = array(
        "value" => "required|unique:nama"

    );

    protected $fillable = ['nama','deskripsi','gambar','harga','slug'];
}
