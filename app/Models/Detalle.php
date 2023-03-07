<?php
//Cristian parra lo hizo
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Detalle extends Model
{
    use HasFactory;
    protected $table ='detalles_de_factura';
    protected $primaryKey ='id';
    protected $fillable =[
        'factura_id',
        'producto_id',
        'cantidad',


    ];
    public function Producto()
    {
        return $this->belongsTo('App\Models\Producto', 'producto_id');
    }
    public function Factura()
    {
        return $this->belongsTo('App\Models\Factura', 'factura_id');
    }
}
