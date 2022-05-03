<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsItemMenu
 *
 * @property $co_item
 * @property $ds_item
 * @property $co_sistema
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsItemMenu extends Model
{
    
    static $rules = [
		'co_item' => 'required',
		'ds_item' => 'required',
		'co_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_item','ds_item','co_sistema'];



}
