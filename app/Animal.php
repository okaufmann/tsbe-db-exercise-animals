<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'animals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'birthday', 'holder_id', 'race_id'];

    public function holder()
    {
        return $this->belongsTo(\App\Holder::class);
    }

    public function race()
    {
        return $this->belongsTo(\App\Race::class);
    }

    public function medications()
    {
        return $this->belongsToMany(\App\Medication::class, 'animals_medications');
    }
}
