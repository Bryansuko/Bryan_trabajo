<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $nombre
 * @property $fechainicio
 * @property $fechafin
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleca[] $emplecas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fechainicio' => 'required',
		'fechafin' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fechainicio','fechafin','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplecas()
    {
        return $this->hasMany('App\Models\Empleca', 'periodo_id', 'id');
    }
    

}
