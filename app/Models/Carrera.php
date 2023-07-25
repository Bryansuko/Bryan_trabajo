<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $estado
 * @property $facultad
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleca[] $emplecas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'facultad' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','facultad','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplecas()
    {
        return $this->hasMany('App\Models\Empleca', 'carrera_id', 'id');
    }
    

}
