<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devolucione
 *
 * @property $id
 * @property $detalleprestamo_id
 * @property $fechadevolucion
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Detalleprestamo $detalleprestamo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Devolucione extends Model
{
    
    static $rules = [
		'detalleprestamo_id' => 'required',
		'fechadevolucion' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['detalleprestamo_id','fechadevolucion','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleprestamo()
    {
        return $this->hasOne('App\Models\Detalleprestamo', 'id', 'detalleprestamo_id');
    }
    

}
