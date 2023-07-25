<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignacion
 *
 * @property $id
 * @property $usuarios_id
 * @property $rol_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Rol $rol
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignacion extends Model
{
    
    static $rules = [
		'usuarios_id' => 'required',
		'rol_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuarios_id','rol_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rol()
    {
        return $this->hasOne('App\Models\Rol', 'id', 'rol_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuarios_id');
    }
    

}
