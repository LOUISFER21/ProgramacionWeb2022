<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Directorfavorito
 *
 * @property $id
 * @property $director_id
 * @property $socio_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Directore $directore
 * @property Socio $socio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Directorfavorito extends Model
{
    
    static $rules = [
		'director_id' => 'required',
		'socio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['director_id','socio_id'];


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
    public function socio()
    {
        return $this->hasOne('App\Models\Socio', 'id', 'socio_id');
    }
    

}
