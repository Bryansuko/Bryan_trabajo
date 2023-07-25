<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $codigo
 * @property $Apellido
 * @property $Nombre
 * @property $usuarios_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleca[] $emplecas
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'Apellido' => 'required',
		'Nombre' => 'required',
		'usuarios_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','Apellido','Nombre','usuarios_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplecas()
    {
        return $this->hasMany('App\Models\Empleca', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuarios_id');
    }
    

}
