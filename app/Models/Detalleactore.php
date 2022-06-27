<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalleactore
 *
 * @property $id
 * @property $actor_id
 * @property $pelicula_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Actore $actore
 * @property Pelicula $pelicula
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalleactore extends Model
{
    
    static $rules = [
		'actor_id' => 'required',
		'pelicula_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['actor_id','pelicula_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actore()
    {
        return $this->hasOne('App\Models\Actore', 'id', 'actor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pelicula()
    {
        return $this->hasOne('App\Models\Pelicula', 'id', 'pelicula_id');
    }
    

}
