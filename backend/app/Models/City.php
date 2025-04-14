<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['country_id', 'value', 'name', 'temperature', 'icon', 'weather'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
