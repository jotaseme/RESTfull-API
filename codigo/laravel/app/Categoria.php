<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = array('nombre');
    protected $hidden = ['created_at','updated_at'];

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }
}
