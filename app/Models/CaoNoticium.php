<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoNoticium
 *
 * @property $co_noticia
 * @property $assunto
 * @property $descricao
 * @property $foto
 * @property $co_usuario
 * @property $dt_noticia
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoNoticium extends Model
{
    
    static $rules = [
		'co_noticia' => 'required',
		'assunto' => 'required',
		'descricao' => 'required',
		'foto' => 'required',
		'co_usuario' => 'required',
		'dt_noticia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_noticia','assunto','descricao','foto','co_usuario','dt_noticia'];



}
