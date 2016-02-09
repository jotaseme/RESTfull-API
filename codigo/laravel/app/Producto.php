<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table = 'productos';

    protected $fillable = array('nombre','categoria_id');
    protected $hidden = ['created_at','update_at'];

    public function categoria()
    {
    	return $this->belongsTo(App\Categoria);
    }
}
