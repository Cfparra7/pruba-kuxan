<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Factura extends Model
{
    use HasFactory;
    protected $table ='factura';
    protected $primaryKey='id';
    protected $fillable= [
        'numero',
        'fecha',
        'total_de_productos',
        'precio_total',
    ];

//Cristian parra lo hizo
}
//Cristian parra lo hizo
