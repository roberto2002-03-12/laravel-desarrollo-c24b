<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class container extends Model
{
    use HasFactory;

    protected $table = 'container';

    protected $primarykey = 'id';

    protected $fillable = array('tipo_producto', 'dimensiones', 
    'id_embarcacion');
}
