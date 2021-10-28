<?php
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{
    protected $table='user';
    public $timestamps=false;
    protected $fillable=[
        'id', 'nombre','email','ciudad','telefono'
    ];

    protected $primaryKey='id';
}
