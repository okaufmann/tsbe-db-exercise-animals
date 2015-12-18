<?php
/**
 * Race.php, tsbe-db-formular-tiere
 *
 * This File belongs to to Project tsbe-db-formular-tiere
 *
 * @author Oliver Kaufmann <okaufmann91@gmail.com>
 * @version 1.0
 * @package YOUREOACKAGE
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';
    protected $fillable = ['name'];
}