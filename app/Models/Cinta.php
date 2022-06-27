<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cinta
 *
 * @property $id
 * @property $pelicula_id
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @property Pelicula $pelicula
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cinta extends Model
{
    
    static $rules = [
		'pelicula_id' => 'required',
		'codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pelicula_id','codigo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pelicula()
    {
        return $this->hasOne('App\Models\Pelicula', 'id', 'pelicula_id');
    }
    

}
