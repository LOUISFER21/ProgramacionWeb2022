<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalledirectore
 *
 * @property $id
 * @property $director_id
 * @property $pelicula_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Directore $directore
 * @property Pelicula $pelicula
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalledirectore extends Model
{
    
    static $rules = [
		'director_id' => 'required',
		'pelicula_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['director_id','pelicula_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function directore()
    {
        return $this->hasOne('App\Models\Directore', 'id', 'director_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pelicula()
    {
        return $this->hasOne('App\Models\Pelicula', 'id', 'pelicula_id');
    }
    

}
