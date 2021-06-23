<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    protected $table = 'pais';
    protected $primaryKey = 'id';
    protected $fillable = array('nombre','presi_actual',
    'fec_newpresi');
    use HasFactory;
}
