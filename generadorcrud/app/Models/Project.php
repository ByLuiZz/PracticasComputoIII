<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 *
 * @property $id
 * @property $value
 * @property $content
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Project extends Model
{
    
    static $rules = [
		'value' => 'required',
		'content' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['value','content'];



}
