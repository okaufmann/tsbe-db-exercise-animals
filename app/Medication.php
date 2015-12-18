<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medications';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price'];

    public function animals()
    {
        return $this->belongsToMany(\App\Animal::class, 'animals_medications');
    }
}
