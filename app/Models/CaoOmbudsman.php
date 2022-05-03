<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOmbudsman
 *
 * @property $id
 * @property $idtipo
 * @property $idcategoria
 * @property $data
 * @property $comentario
 * @property $co_escritorio
 *
 * @property CaoCategoriasOmbudsman $caoCategoriasOmbudsman
 * @property CaoTipoOmbudsman $caoTipoOmbudsman
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOmbudsman extends Model
{
    
    static $rules = [
		'idtipo' => 'required',
		'idcategoria' => 'required',
		'data' => 'required',
		'comentario' => 'required',
		'co_escritorio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idtipo','idcategoria','data','comentario','co_escritorio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoCategoriasOmbudsman()
    {
        return $this->hasOne('App\Models\CaoCategoriasOmbudsman', 'idcategoria', 'idcategoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoTipoOmbudsman()
    {
        return $this->hasOne('App\Models\CaoTipoOmbudsman', 'idtipo', 'idtipo');
    }
    

}
