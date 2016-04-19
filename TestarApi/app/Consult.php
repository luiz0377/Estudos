<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    /**
     * @var string
     */
    protected $table ='consult';
    /**
     * @var array
     */
    protected $fillable = [
        'cpf'
    ];
}
