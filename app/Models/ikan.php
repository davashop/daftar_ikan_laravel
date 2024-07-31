<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ikan extends Model
{
    use HasFactory;

    public $table = "jenis.ikan";

    protected $filltable =[
        "id",
        "nama",
        "asal",
        "karakteristik",
    ];
}
