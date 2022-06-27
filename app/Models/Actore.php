<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actore
 *
 * @property $id
 * @property $persona_id
 * @property $nombreartistico
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona $persona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actore extends Model
{
    
    static $rules = [
		'persona_id' => 'required',
		'nombreartistico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','nombreartistico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    

}
