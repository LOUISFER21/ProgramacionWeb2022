<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $fechaprestamo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'fechaprestamo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaprestamo'];



}
