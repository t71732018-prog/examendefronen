<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funkopops extends Model
{
    protected $fillable = ["nombre","tipo" ,"precio", "item_number",
    "categoria_id","license_id", "box_number" ,"imagen"  ];
}
