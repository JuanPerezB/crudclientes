<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primarykey='id';
    protected $filable=['nombre','telefono','correo'];
    protected $guarded=[];
    public $timestamps=false;
}
