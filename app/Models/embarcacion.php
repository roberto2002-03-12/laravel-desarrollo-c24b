<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class embarcacion extends Model
{
    use HasFactory;

    protected $table = 'embarcacion';

    protected $primarykey = 'id';

    protected $fillable = array('cantidad_tripu', 'destino', 'inicio', 'llegada', 'nro_comunicacion');
}
