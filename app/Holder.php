<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holder extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'holders';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['givenname', 'surname', 'address', 'zip', 'location'];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
