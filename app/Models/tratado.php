<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tratado extends Model
{
    protected $table = 'tratado';
    protected $primaryKey = 'id';
    protected $fillable = array('pais_import','impuesto','fec_tratado',
    'pais_export', 'producto');
    use HasFactory;
}
