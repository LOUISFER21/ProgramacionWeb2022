<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalleprestamo
 *
 * @property $id
 * @property $socio_id
 * @property $prestamo_id
 * @property $cinta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cinta $cinta
 * @property Devolucione[] $devoluciones
 * @property Prestamo $prestamo
 * @property Socio $socio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalleprestamo extends Model
{
    
    static $rules = [
		'socio_id' => 'required',
		'prestamo_id' => 'required',
		'cinta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['socio_id','prestamo_id','cinta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cinta()
    {
        return $this->hasOne('App\Models\Cinta', 'id', 'cinta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function devoluciones()
    {
        return $this->hasMany('App\Models\Devolucione', 'detalleprestamo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prestamo()
    {
        return $this->hasOne('App\Models\Prestamo', 'id', 'prestamo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function socio()
    {
        return $this->hasOne('App\Models\Socio', 'id', 'socio_id');
    }
    

}
