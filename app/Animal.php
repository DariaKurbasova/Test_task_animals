<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animal
 * @package App
 *
 * @property string $name
 * @property string $type
 * @property int $legs
 */
class Animal extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'type', 'legs'
    ];

    protected $table = 'animals';
}
