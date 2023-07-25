<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $Nombre
 * @property $Email
 * @property $Contrasena
 * @property $created_at
 * @property $updated_at
 *
 * @property UsuariosRol[] $usuariosRols
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Email' => 'required',
		'Contrasena' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Email','Contrasena'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuariosRols()
    {
        return $this->hasMany('App\Models\UsuariosRol', 'usuarios_id', 'id');
    }
    

}
